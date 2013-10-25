// JavaScript Document
$(document).ready(function() {
	$(".btn-info-proyect").click(function(){
		// $.ajax({
		// 	url: "model/connection_live.php",
		// 	type: "POST",
		// 	success: function(resultado){
		// 		if(resultado == "true"){
		// 			location.href="proyecto.php?id="+$(this).attr('cuenta');
		// 		}
		// 		else
		// 		{
		// 			$("#logForm").modal('toggle');
		// 		}
		// 	}
		// });
		location.href="proyecto.php?id="+$(this).attr('cuenta');
	});
});