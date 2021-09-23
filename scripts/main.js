// JavaScript Document
$('document').ready( function() {

	switch(window.location.href)
	{
		case "http://snuletek.org/":
			$("#Home").addClass("cCurrent");
			break;
			
		case "http://snuletek.org/calculators/":
			$("#Calculators").addClass("cCurrent");
			break;
	}
	
	$('body').delay(100).css('visibility','visible');
	$('#header').delay(100).css('opacity',0).animate({opacity:1}, 400);
	$('#topmenu').delay(200).css('opacity',0).animate({opacity:1}, 400);
	$('#bodydiv').delay(300).css('opacity',0).animate({opacity:1}, 400);
	$('#footer').delay(400).css('opacity',0).animate({opacity:1}, 400);
	$('#centerSubMenu').delay(900).slideDown(400);
	
	$(".menuItem").hover(function(){
		$(this).toggleClass("current");
		$(this).toggleClass("nCurrent");
	});
	
});