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
});