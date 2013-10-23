// JavaScript Document
$(document).ready(function() {
	$(".contrato-detail").scroll(function () {
	     if($(".contrato-detail").scrollTop() >= 7700)
	     {
	         $("#acept_contrato_btn").removeAttr("disabled");
	     }
	     else{
	     	$("#acept_contrato_btn").attr("disabled", "disabled");
	     }
	 });
	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}
	$("#acept_contrato_btn").click(function(){
		$.ajax({
			url:"model/inversiones.php",
			type:"POST",
			data:{
				method:"invertir",
				vars: JSON.stringify({
					inversion: $(".input_monto_number").html(),
					id_proyecto: getUrlVars()['id']
				})
			},
			success:function(resultado){
				var result = JSON.parse(resultado);
				if(result.status == 1){
					location.href="invertir.php?id="+getUrlVars()['id']+"&id_inv="+result.inversion;
				}
			}
		});
	});
});