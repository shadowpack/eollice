// JavaScript Document
$(document).ready(function() {
	$("#logout").click(function(){
		$.ajax({
			url: "model/users.php",
			type: "POST",
			data:{
				method: "logout"
			},
			success:function(resultado){
				var result = JSON.parse(resultado);
				if(result.status == 1){
					location.reload();
				}
			}
		})
	});
	$('.inactive-account-btn').click(function(){
		$(".modal-confirm-title").html("Seccion Inhabilitada");
		$(".modal-message").html('Actualmente no se encuentra habilitada esta seccion de la plataforma. Mientras tanto disfruta del resto de la version beta de Eollice.');
		$("#modal-confirm-btn").hide();
		$("#confirm-modal").modal('toggle');
	});
});