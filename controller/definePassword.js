// JavaScript Document
$(document).ready(function() {
	$("#definePassword").on('show.bs.modal',function(){
		if(typeof getUrlVars()['recoverToken'] == "undefined" || getUrlVars()['recoverToken'] == "" || getUrlVars()['recoverToken'] == null)
		{
			$(this).hide();
		}
		$("#define-body").show();
		$("#define-success").hide();
		$(".messageInputDefine").hide();
		$("#definePasswordBtn").show();
		$("#define-status0").hide();
		$("#define-status1").hide();
		$("#define-status2").hide();
		$(".has-error").each(function(key,value){
			$(this).removeClass('has-error');
		});
		$(".form-control").each(function(key,value){
			$(this).val('');
		});
	});
	if(typeof getUrlVars()['recoverToken'] != "undefined")
	{
		$("#definePassword").modal('toggle');
	}
	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}
	// FUNCIONES DE BOTON
	$("#definePasswordBtn").click(function(){
		if(($("#definePasswordInput").val() == $("#repeatDefinePassword").val()) && $("#aceptoDefinePass").is(':checked'))
		{
			$.ajax({
				url: "model/users.php",
				type: "POST",
				data:{
					method: "reDefinePassword",
					vars: JSON.stringify({
						password: $("#definePasswordInput").val(),
						token: getUrlVars()['recoverToken']
					})
				},
				success: function(resultado){
					$(".has-error").each(function(key,value){
						$(this).removeClass('has-error');
					});
					var result = JSON.parse(resultado);
					if(result.status == 0){
						$("#define-body").hide();
						$("#define-success").show();
						$("#define-status0").show();
						$("#definePasswordBtn").hide();
					}
					else if(result.status == 1){
						$("#define-body").hide();
						$("#define-success").show();
						$("#define-status1").show();
						$("#definePasswordBtn").hide();
					}
					else if(result.status == 2){
						$("#define-body").hide();
						$("#define-success").show();
						$("#define-status2").show();
						$("#definePasswordBtn").hide();
					}
				}
			});
		}
		else if(($("#definePasswordInput").val() != $("#repeatDefinePassword").val()))
		{
			$(".messageInputDefine").show();
			$(".messageInputDefine").html("Las contraseñas indicadas no coinciden.");
			$("#definePasswordInput").parent().addClass('has-error');
			$("#repeatDefinePassword").parent().addClass('has-error');
		}
		else if(!$("#aceptoDefinePass").is(':checked')){
			$(".messageInputDefine").show();
			$(".messageInputDefine").html("Debe aceptar las condiciones y terminos de uso.");
			$("#aceptoDefinePass").parent().addClass('has-error');
		}
	});
});