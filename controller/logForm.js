// JavaScript Document
$(document).ready(function() {
	$("#loginButton").click(function(){
		$(this).button('loading');
		if($("#loginUser").val() != "" && $("#loginPassword").val() != "")
		{
			$(".has-error").each(function(key,value){
			$(this).removeClass('has-error');
			});
			var datas = {
				email: $("#loginUser").val(),
				password: $("#loginPassword").val()
			}
			$.ajax({
				url: "model/users.php",
				type: "POST",
				data : {
					method: "login",
					vars: JSON.stringify(datas)
				},
				success: function(resultado){
					var result = JSON.parse(resultado);
					if(result.status == 0){
						location.reload();
					}
					else if(result.status == 2){
						$("#loginUser").parent().addClass('has-error');
						$(".message-logform").html("El usuario indicado no existe.");
						$("#loginButton").button('reset');
					}
					else
					{
						$("#loginUser").parent().addClass('has-error');
						$("#loginPassword").parent().addClass('has-error');
						$(".message-logform").html("El usuario y la contraseña no coinciden");
						$("#loginButton").button('reset');
					}
				}
			});
		}
		else
		{
			$("#loginUser").parent().addClass('has-error');
			$("#loginPassword").parent().addClass('has-error');
			$(".message-logform").html("Debe indicar un nombre de usuario y contraseña.");
			$(this).button('reset');
		}
		
	});
	$("#loginPassword").keypress(function(e){
		if(e.which == 13)
		{
			$(this).button('loading');
			if($("#loginUser").val() != "" && $("#loginPassword").val() != "")
			{
				$(".has-error").each(function(key,value){
				$(this).removeClass('has-error');
				});
				var datas = {
					email: $("#loginUser").val(),
					password: $("#loginPassword").val()
				}
				$.ajax({
					url: "model/users.php",
					type: "POST",
					data : {
						method: "login",
						vars: JSON.stringify(datas)
					},
					success: function(resultado){
						var result = JSON.parse(resultado);
						if(result.status == 0){
							location.reload();
						}
						else if(result.status == 2){
							$("#loginUser").parent().addClass('has-error');
							$(".message-logform").html("El usuario indicado no existe.");
							$("#loginButton").button('reset');
						}
						else if(result.status == 3){
							$("#emailLog").parent().addClass('has-error');
							$(".messageinput").html("El usuario no se encuentra activado.");
							$("#logButton").button('reset');
						}
						else
						{
							$("#loginUser").parent().addClass('has-error');
							$("#loginPassword").parent().addClass('has-error');
							$(".message-logform").html("El usuario y la contraseña no coinciden");
							$("#loginButton").button('reset');
						}
					}
				});
			}
			else
			{
				$("#loginUser").parent().addClass('has-error');
				$("#loginPassword").parent().addClass('has-error');
				$(".message-logform").html("Debe indicar un nombre de usuario y contraseña.");
				$(this).button('reset');
			}
		}
	});
	$("#btn_proyectos_landing").click(function(){
		location.href="proyectos.php";
	});
});