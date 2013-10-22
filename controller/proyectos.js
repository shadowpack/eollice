// JavaScript Document
$(document).ready(function() {
	$(".proyecto_btn").click(function(){
		location.href="proyecto.php?id="+$(this).attr('proyecto');
	});
});