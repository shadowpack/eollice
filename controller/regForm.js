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
					alert(resultado);
				}
			});
		}
		else
		{
			alert("Faltan Datos por completar.");
		}
		
	});
});