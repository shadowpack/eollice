// JavaScript Document
$(document).ready(function() {
	var monto_acumulador = 100000;
	$('.input_monto_plus').click(function(){
		monto_acumulador += 50000;
		$('.input_monto_number').html("$ "+number_format(monto_acumulador,0,",","."));
		simular();
	});
	$('.input_monto_less').click(function(){
		monto_acumulador -= 50000;
		if(monto_acumulador < 100000)
		{
			monto_acumulador = 100000;
		}
		$('.input_monto_number').html("$ "+number_format(monto_acumulador,0,",","."));
		simular();
	});
	$('#simulation_btn_invertir').click(function(){
		$.ajax({
			url: "model/connection_live.php",
			type: "POST",
			success: function(resultado){
				if(resultado == "true"){
					$("#contrato-modal").modal('toggle');
				}
				else
				{
					$("#simulation-modal").modal('hide');
					$("#logForm").modal('toggle');
				}
			}
		});
	});
	
	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}
	function simular(){
		var cuota_proy;
		$.ajax({
			url: "model/getIndicadores.php",
			type: "POST",
			data:{
				id: getUrlVars()['id']
			},
			success:function(resultado){
				var result = JSON.parse(resultado);
				$("#costo_opcion_inversion").html('$'+number_format(monto_acumulador*0.01,0,",","."));
				$("#costo_opcion_inversion_1").html('$'+number_format(monto_acumulador*0.01,0,",","."));
				$("#gastos_administracion").html('$'+number_format(pago_mensual(monto_acumulador,result['proyecto']['tasa_interes_anual'],result['proyecto']['plazo'])*0.008,0,",","."));
				$("#cuota_mensual").html("$"+number_format(pago_mensual(monto_acumulador,result['proyecto']['tasa_interes_anual'],result['proyecto']['plazo'])*0.992,0,",","."));
				$("#utilidades_credito").html('$'+number_format(((pago_mensual(monto_acumulador,result['proyecto']['tasa_interes_anual'],result['proyecto']['plazo'])*0.992)*result['proyecto']['plazo']-(monto_acumulador*1.01)),0,",","."));
				$("#plazo_recuperar").html(number_format((monto_acumulador/pago_mensual(monto_acumulador,result['proyecto']['tasa_interes_anual'],result['proyecto']['plazo'])*0.992),0,",",".")+" Meses")
			}
		});
		
	}
	function sumatoria(t,n,r){
		if(t <= n){
			var value = 1/(Math.pow((1+(r/100)),t));
			t++;
			return value + sumatoria(t,n,r);
		}
		else
		{
			return 0;
		}
	}
	function pago_mensual(inversion,tasa,plazo){
		var tasa_m = tasa/12;
		return inversion/sumatoria(1,plazo,tasa_m);
	}
	function number_format(number, decimals, dec_point, thousands_sep){
		number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
	  	var n = !isFinite(+number) ? 0 : +number,
	    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
	    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
	    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
	    s = '',
	    toFixedFix = function (n, prec) {
	      var k = Math.pow(10, prec);
	      return '' + Math.round(n * k) / k;
	    };
		// Fix for IE parseFloat(0.55).toFixed(0) = 0;
		s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
		if (s[0].length > 3) {
		    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
		}
		if ((s[1] || '').length < prec) {
		    s[1] = s[1] || '';
	    	s[1] += new Array(prec - s[1].length + 1).join('0');
		}
		return s.join(dec);
	}
	simular();
});