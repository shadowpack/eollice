// JavaScript Document
$(document).ready(function() {
	var tabs_actual = 'proyecto_info_id';
	$(".proyect_informacion_border_r").click(function(){
		if(tabs_actual != $(this).attr('id')){
			$(this).removeClass('proyect_informacion_border_r');
			$(this).addClass('proyect_informacion_border');
			$('#'+tabs_actual).removeClass('proyect_informacion_border');
			$('#'+tabs_actual).addClass('proyect_informacion_border_r');
			$("."+$('#'+tabs_actual).attr('target')).hide();
			$("."+$(this).attr('target')).fadeIn();
			tabs_actual = $(this).attr('id');
		}
	});
	$(".proyect_informacion_border").click(function(){
		if(tabs_actual != $(this).attr('id')){
			$(this).removeClass('proyect_informacion_border_r');
			$(this).addClass('proyect_informacion_border');
			$('#'+tabs_actual).removeClass('proyect_informacion_border');
			$('#'+tabs_actual).addClass('proyect_informacion_border_r');
			$("."+$('#'+tabs_actual).attr('target')).hide();
			$("."+$(this).attr('target')).fadeIn();
			tabs_actual = $(this).attr('id');
		}
	});
	$("#simulate-btn").click(function(){
		$('#simulation-modal').modal('toggle');
	});
	$(".tooltip_data_info").tooltip();
});