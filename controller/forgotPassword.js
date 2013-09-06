// JavaScript Document
$(document).ready(function() {
	if($("#forgotEmail").val() != "" && $("#checkForgot").is(':checked')){
		$.ajax({
			url: "model/users.php",
			type: "POST",
			data:{
				method: "passwordForget",
				vars: {
					email: $("#forgotEmail").val()
				}
			},
			success: function(resultado){
				alert(resultado);
			}
		});
	}
	else if($("#forgotEmail").val() == "")
	{
		$(".messageinputForgot").show();
		$(".messageinputForgot").html("Las contraseñas indicadas no coinciden.");
		$("#forgotEmail").parent().addClass('has-error');
	}
	else if(!$("#acepto").is(':checked')){
		$(".messageinput").show();
		$(".messageinputForgot").html("Debe aceptar las condiciones y terminos de uso.");
	}
	
});