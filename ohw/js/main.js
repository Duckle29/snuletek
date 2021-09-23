// JavaScript Document
$('document').ready( function() {
		
	$('body').delay(100).css('visibility','visible');
	$('#header').delay(100).css('opacity',0).animate({opacity:1}, 700);
	$('#bodydiv').delay(300).css('opacity',0).animate({opacity:1}, 700);
	$('#footer').delay(500).css('opacity',0).animate({opacity:1}, 700);
	$('#mainMenu').delay(700).slideDown(400);
	$('#centerSubMenu').delay(900).slideDown(400);
	
	$(".menuItem").hover(function(){
		$(this).toggleClass("current");
		$(this).toggleClass("nCurrent");
	});
	
});