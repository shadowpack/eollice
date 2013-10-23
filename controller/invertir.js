// JavaScript Document
$(document).ready(function() {
	var proyecto = 
	$("#agregar_banco").click(function(){
		$("#add_banco").modal('toggle');
	});
	$(".invertir-header-btn").click(function(){
		history.back();
	});
	$(".select_cuenta").change(function(){
		var self = $(this);
		$.ajax({
			url: "model/inversiones.php",
			type: "POST",
			data:{
				method: "set_bank",
				vars: JSON.stringify({
					token: getUrlVars()['id_inv'],
					id_cuenta: self.attr("cuenta")
				})
			},
			success:function(resultado){
				var result = JSON.parse(resultado);
				if(result.status == 1){
				}
			}
		})
	});
	$("#modificar_inversion").click(function(){
		$("#simulation-modal").modal('toggle');
		$("#simulation_btn_invertir").unbind();
		$("#simulation_btn_invertir").click(function(){
			$.ajax({
				url:"model/inversiones.php",
				type:"POST",
				data:{
					method: 'mod_invertir',
					vars: JSON.stringify({
						inversion: $(".input_monto_number").html(),
						token: getUrlVars()['id_inv']
					})
				},
				success:function(resultado){
					var result = JSON.parse(resultado);
					if(result.status == 1){
						$("#invertir_monto").html($(".input_monto_number").html());
						$("#invertir_tir").html($("#tir_anual").html());
						$("#invertir_utilidades").html($("#utilidades_credito").html());
						$("#invertir_coi").html($("#costo_opcion_inversion_1").html());
						$("#coi_final").html($("#costo_opcion_inversion_1").html());
						$("#simulation-modal").modal('hide');
					}
				}
			})
		});
	});
	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}
	$(".mod-cuenta").click(function(){
		var self = $(this);
		$("#banco_input option").each(function(key,value){
			if($(".item_banco_value_"+self.attr('cuenta')).html() == $(this).text()){
				$(this).attr("selected",true)
			}
		});
		$("#tipo_cuenta_input option").each(function(key,value){
			if($(".item_tipo_value_"+self.attr('cuenta')).html() == $(this).text()){
				$(this).attr("selected",true)
			}
		});
		$("#numero_cuenta_input").val($(".item_ncuenta_value_"+self.attr('cuenta')).html());
		$("#add_banco").modal('toggle');
		$("#add_banco_btn").unbind().click(function(){
			$(".modal-confirm-title").html("Confirmar Operación");
			$(".modal-message").html('Actualemente tienes '+$("#data_inver_"+self.attr('cuenta')).html()+' inversiones asociadas a esta cuenta bancaria.<br>Todas las inversiones asociadas a dicha cuenta seran dirigidas a la nueva modificación <br><br>¿Esta seguro que desea modificar los datos de la cuenta indicada?');
			$("#modal-confirm-btn").click(function(){
				$.ajax({
					url: 'model/inversiones.php',
					type: 'POST',
					data:{
						method: 'mod_bank',
						vars: JSON.stringify({
							'tipo_cuenta': $("#tipo_cuenta_input").val(),
							ncuenta: $("#numero_cuenta_input").val(),
							'id_banco': $("#banco_input").val(),
							idcuenta: self.attr('cuenta')
						})
					},
					success: function(resultado){
						var result = JSON.parse(resultado);
						if(result.status == 1){
							$(".item_banco_value_"+self.attr('cuenta')).html($("#banco_input option:selected").text());
							$(".item_tipo_value_"+self.attr('cuenta')).html($("#tipo_cuenta_input option:selected").text());
							$(".item_ncuenta_value_"+self.attr('cuenta')).html($("#numero_cuenta_input").val());
							$("#add_banco").modal('hide');
							$("#confirm-modal").modal('hide');
						}
						else{
							alert("Existe un error al modificar la cuenta bancaria, intentelo otra vez. En caso de que el problema persista, contacte con el Staff de Eollice.");
						}
					}
				});
			});
			$("#confirm-modal").modal('toggle');
		});
	});
	$("#confirm_founding").click(function(){
		$(".modal-message").html('El monto invertido ('+$("#invertir_monto").html()+'), asociado a tu cuenta bancaria lo deberás transferir una vez que finalice el proceso de inversión y se alcance el monto pedido. Al no cumplir este compromiso se te aplicará una multa que corresponde al Costo de Opcion a Inversión y se anulara el credito perjudicando a los demas usuarios.');
		$(".modal-confirm-title").html("Responsabilidad de Inversión");
		$('#modal-confirm-btn').html('Confirmar Inversión');
		$("#modal-confirm-btn").click(function(){
			$.ajax({
				url:"model/inversiones.php",
				type:"POST",
				data:{
					method:"confirm_founding",
					vars: JSON.stringify({
						token: getUrlVars()['id_inv']
					})
				},
				success:function(resultado){
					var result = JSON.parse(resultado);
					if(result.status == 1)
					{
						$(".modal-confirm-title").html("Inversión Preconfirmada");
						$('#modal-confirm-btn').html('Volver a Proyectos');
						$("#modal-confirm-close").hide();
						$(".modal-message").html('La inversión ha sido preconfirmada, el equipo de Eollice revisará que la transferencia se haya efectuado y que has entregado el código. Si no has efectuado la transferencia aún, tienes 24 horas para hacerlo, este paso es crucial para ser ingresado como inversionista.');
						$("#modal-confirm-btn").click(function(){
							location.href="proyecto.php?id="+getUrlVars()['id'];
						});
					}
				}
			})
		});
		$("#confirm-modal").modal('toggle');
	});
});