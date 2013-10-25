// JavaScript Document
$(document).ready(function() {
	$("#proyecto_send").click(function(){

	});
	$('.inactive-account-btn').click(function(){
		$(".modal-confirm-title").html("Seccion Inhabilitada");
		$(".modal-message").html('Actualmente no se encuentra habilitada esta seccion de la plataforma. Mientras tanto disfruta del resto de la version beta de Eollice.');
		$("#modal-confirm-btn").hide();
		$("#confirm-modal").modal('toggle');
	});
});