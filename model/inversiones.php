<?php
	session_start();
	require_once('db_core.php');
	require_once('webservice.php');
	require_once('mail.php');
	class generic extends webservice{
		var $db;
		function generic(){
			$this->db = new db_core(); 
		}
		public function add_bank($opt){
			$dbo = $this->db;
			$valores['id_user']= $this->get_user($_SESSION['token']);
			$valores['numero_cuenta_banco'] = $opt->ncuenta;
			$valores['banco'] = $this->get_banco($opt->id_banco);
			$valores['tipo_de_cuenta'] = $this->get_banco($opt->tipo_cuenta);
			$dbo->insert('cuentas_bancarias',$valores);
			$retorno['status'] = true;
			$retorno['ncuenta'] = $opt->ncuenta;
			$retorno['banco'] = utf8_encode($valores['banco']);
			$retorno['tipo'] = ($opt->tipo_cuenta == 0)?"Cuenta Corriente":"Cuenta Vista";
			$retorno['id'] = $dbo->last_id();
			$this->returnData($retorno);
		}
		private function get_banco($id_banco){
			$dbo = $this->db;
			$banco = $dbo->reg_one("SELECT nombre FROM listado_bancos AS l WHERE l.id_banco='".$id_banco."'");
			return $banco[0];
		}
		public function mod_bank($opt){
			$dbo = $this->db;
			$valores['banco'] = $this->get_banco($opt->id_banco);
			$valores['tipo_de_cuenta'] = $opt->tipo_cuenta;
			$valores['numero_cuenta_banco'] = $opt->ncuenta;
			$where['id_cuenta'] = $opt->idcuenta;
			$dbo->update('cuentas_bancarias',$valores, $where);
			$retorno['status'] = true;
			$this->returnData($retorno);
		}
		public function invertir($opt){
			$dbo = $this->db;
			$opt->inversion = str_replace(array("$ ","."), array("",""), $opt->inversion);
			$valores['monto_inversion'] = $opt->inversion;
			$valores['id_user'] = $this->get_user($_SESSION['token']);
			$valores['fecha_declaracion_inversion'] = date('Y-m-d h:i:s');
			$valores['id_proyecto'] = $opt->id_proyecto;
			$valores['token_transaccion'] = $this->getToken('inversion_proyecto','token_transaccion',TRUE,TRUE,FALSE,9);
			$dbo->insert('inversion_proyecto',$valores);
			$retorno['status'] = true;
			$retorno['inversion'] = $valores['token_transaccion'];
			$this->returnData($retorno);
		}
		public function mod_invertir($opt){
			$dbo = $this->db;
			$opt->inversion = str_replace(array("$ ","."), array("",""), $opt->inversion);
			$valores['monto_inversion'] = $opt->inversion;
			$where['token_transaccion'] = $opt->token;
			$dbo->update('inversion_proyecto',$valores, $where);
			$retorno['status'] = true;
			$this->returnData($retorno);
		}
		public function set_bank($opt){
			$dbo = $this->db;
			$valores['id_cuenta_bancaria'] = $opt->id_cuenta;
			$where['token_transaccion'] = $opt->token;
			$dbo->update('inversion_proyecto',$valores, $where);
			$retorno['status'] = true;
			$this->returnData($retorno);
		}
		public function confirm_founding($opt){
			$dbo = $this->db;
			$valores['preconfirmado'] = 1;
			$where['token_transaccion'] = $opt->token;
			$dbo->update('inversion_proyecto',$valores, $where);
			$retorno['status'] = true;
			$this->returnData($retorno);
		}
	}
	include("handler.php");
?>