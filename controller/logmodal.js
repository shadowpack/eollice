// JavaScript Document
$(document).ready(function() {
	$(".loginBtn").click(function(){
		$("#logForm").modal('toggle');
	});
	$("#logButton").click(function(){
		$(this).button('loading');
		if($("#emailLog").val() != "" && $("#passwordLog").val() != "")
		{
			$(".has-error").each(function(key,value){
			$(this).removeClass('has-error');
			});
			var datas = {
				email: $("#emailLog").val(),
				password: $("#passwordLog").val()
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
						$("#emailLog").parent().addClass('has-error');
						$(".messageinput").html("El usuario indicado no existe.");
						$("#logButton").button('reset');
					}
					else if(result.status == 3){
						$("#emailLog").parent().addClass('has-error');
						$(".messageinput").html("El usuario no se encuentra activado.");
						$("#logButton").button('reset');
					}
					else
					{
						$("#emailLog").parent().addClass('has-error');
						$("#passwordLog").parent().addClass('has-error');
						$(".messageinput").html("El usuario y la contraseña no coinciden");
						$("#logButton").button('reset');
					}
				}
			});
		}
	});
	$("#passwordLog").keypress(function(e){
		if(e.which == 13)
		{
			$("#logButton").button('loading');
			if($("#emailLog").val() != "" && $("#passwordLog").val() != "")
			{
				$(".has-error").each(function(key,value){
				$(this).removeClass('has-error');
				});
				var datas = {
					email: $("#emailLog").val(),
					password: $("#passwordLog").val()
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
							$("#emailLog").parent().addClass('has-error');
							$(".messageinput").html("El usuario indicado no existe.");
							$("#logButton").button('reset');
						}
						else
						{
							$("#emailLog").parent().addClass('has-error');
							$("#passwordLog").parent().addClass('has-error');
							$(".messageinput").html("El usuario y la contraseña no coinciden");
							$("#logButton").button('reset');
						}
					}
				});
			}
		}
	});
	$("#forgotPasswordLink").click(function(){
		$("#logForm").modal('hide');
		$("#forgotPassword").modal('toggle');
	});
	$("#registerLink").click(function(){
		$("#logForm").modal('hide');
		$("#RegForm").modal('toggle');
	});
});