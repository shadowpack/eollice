// JavaScript Document
$(document).ready(function() {
	$("#forgotButton").click(function(){
		if($("#forgotEmail").val() != "" && $("#checkForgot").is(':checked')){
			$.ajax({
				url: "model/users.php",
				type: "POST",
				data:{
					method: "passwordForget",
					vars: JSON.stringify({
						email: $("#forgotEmail").val()
					})
				},
				success: function(resultado){
					$(".has-error").each(function(key,value){
						$(this).removeClass('has-error');
					});
					var result = JSON.parse(resultado);
					if(result.status == 0){
						$("#forgot-body").hide();
						$("#forgot-success").show();
						$("#forgot-status0").show();
						$("#forgotButton").hide();
					}
					else if(result.status == 1){
						$(".messageinputForgot").show();
						$(".messageinputForgot").html("El E-mail indicado ya exite en nuestros registros.");
						$("#forgotEmail").parent().addClass('has-error');
					}
					else if(result.status == 2){
						$("#forgot-body").hide();
						$("#forgot-success").show();
						$("#forgot-status2").show();
						$("#forgotButton").hide();
					}
					else if(result.status == 3){
						$("#forgot-body").hide();
						$("#forgot-success").show();
						$("#forgot-status3").show();
						$("#forgotButton").hide();
					}
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
	// CON ESTE EVENTO LIMPIAMOS EL FOMR DE TODO
	$("#forgotPassword").on('show.bs.modal',function(){
		$("#forgot-body").show();
		$("#forgot-success").hide();
		$(".messageinputForgot").hide();
		$("#forgotButton").show();
		$("#forgot-status0").hide();
		$("#forgot-status2").hide();
		$("#forgot-status3").hide();
		$(".has-error").each(function(key,value){
			$(this).removeClass('has-error');
		});
		$(".form-control").each(function(key,value){
			$(this).val('');
		});
	});
});