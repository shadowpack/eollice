// JavaScript Document
$(document).ready(function() {
	if(typeof getUrlVars['recoverToken'] != "undefined" || getUrlVars['recoverToken'] != "" || getUrlVars['recoverToken'] != null)
	{
		$("#definePassword").modal('toggle');
	}
	$("#definePassword").on('show.bs.modal',function(){
		if(typeof getUrlVars['recoverToken'] == "undefined" || getUrlVars['recoverToken'] == "" || getUrlVars['recoverToken'] == null)
		{
			$(this).hide();
		}
	});
	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}
	// FUNCIONES DE BOTON
	$("#definePasswordBtn").click(function(){
		if($("#definePassword").val() == $("#repeatDefinePassword").val()) && $("#aceptoDefinePass").is(':checked'))
		{

		}
		else if(($("#definePassword").val() != $("#repeatDefinePassword").val()))
		{
			$(".messageInputDefine").show();
			$(".messageInputDefine").html("Las contraseñas indicadas no coinciden.");
			$("#definePassword").parent().addClass('has-error');
			$("#repeatDefinePassword").parent().addClass('has-error');
		}
		else if(!$("#aceptoDefinePass").is(':checked')){
			$(".messageInputDefine").show();
			$(".messageInputDefine").html("Debe aceptar las condiciones y terminos de uso.");
			$("#aceptoDefinePass").parent().addClass('has-error');
		}
	});
});