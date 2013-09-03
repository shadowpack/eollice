// JavaScript Document
$(document).ready(function() {
	$("#regButton").click(function(){
		if(($("#password").val() == $("#repeatPassword").val()) && $("#acepto").is(':checked'))
		{
			var packet = {
				name: $("#name").val(),
				email: $("#email").val(),
				password: $("#password").val()
			}
			$.ajax({
				url:"model/users.php",
				type:"POST",
				data:{
					method: "regUser",
					vars: JSON.stringify(packet)
				},
				success:function(resultado){
					var result = JSON.parse(resultado);
					if(result.status == 0){
						$("#modal-reg").hide();
						$("#modal-success").show();
						$("#regButton").hide();
					}
					else if(result.status == 1){
						$(".messageinput").show();
						$(".messageinput").html("El E-mail indicado ya exite en nuestros registros.");
						$("#email").addClass('.has-error');
					}
					else if(result.status == 2){
						$("#modal-reg").hide();
						$("#modal-status2").show();
						$("#regButton").hide();
					}
					else if(result.status == 3){
						$("#modal-reg").hide();
						$("#modal-status3").show();
						$("#regButton").hide();
					}
				}
			});
		}
		else if(($("#password").val() != $("#repeatPassword").val()))
		{
			$(".messageinput").show();
			$(".messageinput").html("Las contraseñas indicadas no coinciden.");
			$("#password").addClass('.has-error');
			$("#repeatPassword").addClass('.has-error');
		}
		else if($("#acepto").is(':checked')){
			$(".messageinput").show();
			$(".messageinput").html("Debe aceptar las condiciones y terminos de uso.");
			$("#acepto").addClass('.has-error');
		}
	});
	// EVENTO QUE CONTROLA EL CLICK EN NO TIENES CUENTA
	// CON ESTE EVENTO LIMPIAMOS EL FOMR DE TODO
	$("#RegForm").on('show.bs.modal',function(){
		$("#modal-reg").show();
		$("#modal-success").hide();
		$("#modal-status2").hide();
		$(".messageinput").hide();
		$("#modal-status3").hide();
		$("#regButton").show();
		$("#email").removeClass('.has-error');
		$("#password").removeClass('.has-error');
		$("#repeatPassword").removeClass('.has-error');
	});
});