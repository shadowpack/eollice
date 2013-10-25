// JavaScript Document
$(document).ready(function() {
	// $("#add_banco_btn").click(function(){
	// 	if(!($("#banco_input").val() == "#" || $("#tipo_cuenta_input").val() == "#" || $("#numero_cuenta_input").val() == "")){
	// 		$.ajax({
	// 			url:"model/inversiones.php",
	// 			type:"POST",
	// 			data:{
	// 				method: "add_bank",
	// 				vars: JSON.stringify({
	// 					ncuenta: $("#numero_cuenta_input").val(),
	// 					id_banco: $("#banco_input").val(),
	// 					tipo_cuenta: $("#tipo_cuenta_input").val(),
	// 				})
	// 			},
	// 			success:function(resultado){
	// 				var result = JSON.parse(resultado);
	// 				if(result.status == 1)
	// 				{
	// 					var cuenta = $('<div class="cuenta_bank"></div>')
	// 					$('<div class="cuentas-checkbox"></div>').append($('<div class="checkbox"><label><input type="radio" name="cuentas_reg" class="select_cuenta" cuenta="'+result.id+'" /></label></div>')).appendTo(cuenta);
	// 					$('<div class="cuentas-Titulos"></div>').append('<div class="cuentas-tipoCuenta">Cuenta Personal</div><div class="cuentas-descripcion">'+result.tipo+': '+result.ncuenta+'; '+result.banco+'</div>').appendTo(cuenta);
	// 					$('<div class="cuentas-button"></div>').append('<button type="button" class="btn btn-default blank_button mod-cuenta" cuenta="'+result.id+'"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Modificar Cuenta Bancaria</button>').appendTo(cuenta);
	// 					cuenta.appendTo($('.cuentas_list'));
	// 					$(".select_cuenta").unbind();
	// 					$(".select_cuenta").change(function(){
	// 						var self = $(this);
	// 						$.ajax({
	// 							url: "model/inversiones.php",
	// 							type: "POST",
	// 							data:{
	// 								method: "set_bank",
	// 								vars: JSON.stringify({
	// 									token: getUrlVars()['id_inv'],
	// 									id_cuenta: self.attr("cuenta")
	// 								})
	// 							},
	// 							success:function(resultado){
	// 								var result = JSON.parse(resultado);
	// 								if(result.status == 1){
	// 									$(".pago-container").fadeIn();
	// 								}
	// 							}
	// 						})
	// 					});
	// 					$("#add_banco").modal('hide');
	// 				}
	// 			}
	// 		});
	// 	}
	// 	else
	// 	{
	// 		alert("Debes Completar Todos los Campos.");
	// 	}
	// 	e.stopPropagation();
	// });
});