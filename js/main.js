$(document).ready(function(e){
$("#inicio").click(function(){
		$(".login").animate({
			left : "-500px",
		});
		 $(".registro").animate({
			left : "-500px",
		});
		$("#texto").fadeIn();
		$("#contenedor_textos").css({"background-color": "", "border":""});
})

	$("#registro").click(function(){
		$("#texto").fadeOut();
	    $(".login").animate({
			left : "-500px",
		});
		$(".registro").animate({
			left : "100px",
		});
		$("#contenedor_textos").css({"background-color": "#fff", "border":"3px solid #ccc"});

	});
    $("#login").click(function(){
		$("#texto").fadeOut();
		$(".registro").animate({
			left : "-500px",
		});
		$(".login").animate({
			left : "100px",
		});
		$("#contenedor_textos").css({"background-color": "#fff", "border":"3px solid #ccc"});
	});

    $("#db").click(function(){
		$("#texto").fadeOut();
	});

});