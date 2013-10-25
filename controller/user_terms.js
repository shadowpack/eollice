// JavaScript Document
$(document).ready(function(){
	$(".user_terms").click(function(){
		$("#user_terms").modal('toggle');
		$("#reject_terms_btn").html("Rechazar");
		$("#user_terms").scrollTop(0);
	}); 
	 $("#user_terms").scroll(function () {
	     if($("#user_terms").scrollTop() >= 5300)
	     {
	         $("#acept_terms_btn").removeAttr("disabled");
	     }
	     else{
	     	$("#acept_terms_btn").attr("disabled", "disabled");
	     }
	 });
	 $("#reject_terms_btn").click(function(){
	 	$("#acepto").attr('checked', false);
	 	$("#acept_terms_btn").show();
	 	$("#user_terms").scrollTop(0);
	 });
	 $("#acept_terms_btn").click(function(){
	 	$("#user_terms").modal('hide');
	 	$("#user_terms").scrollTop(0);
	 });
	 $("#terms_user_footer").click(function(){
	 	$("#user_terms").modal('toggle');
	 	$("#acept_terms_btn").hide();
	 	$("#reject_terms_btn").html("Cerrar");
	 	$("#user_terms").scrollTop(0);
	 });
	 $("#acepto").click(function(){
		$("#user_terms").modal('toggle');
		$("#reject_terms_btn").html("Rechazar");
		$("#user_terms").scrollTop(0);
	}); 
});