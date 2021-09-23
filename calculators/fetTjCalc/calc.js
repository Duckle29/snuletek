/*
TJ temp calculator
By Mikkel DB Jeppesen 2014
Use it if you want, but please credit :)
*/
var coolingMethod = 'freeStanding';
var Tj;

function calc()
{
	if(coolingMethod == 'heatSinked')
	{
		if($.isNumeric($('#RthetaJC').val()) && $.isNumeric($('#RthetaCA').val()))
		{
			$('#RthetaJA').val(1*$('#RthetaJC').val()+1*$('#RthetaCA').val());
		}			
	}
	if($.isNumeric($('#RdsON').val()) && $.isNumeric($('#current').val()) && $.isNumeric($('#ambient').val()) && $.isNumeric($('#RthetaJA').val()))
	{
		Tj = Math.pow($('#current').val(),2) * $('#RdsON').val() / 1000 * $('#RthetaJA').val();
		$('#Tj').val(Tj + 1*$('#ambient').val());			
	}
}

$(document).ready(function(){
	$('input[type="radio"][name="cooling"]').on('change', function()
	{
		coolingMethod = $(this).val();
	    switch(coolingMethod)
		{
	        case 'freeStanding' :
	            $('.heatSinked').hide(0);
				$('#RthetaJA').prop('readOnly', false);
				$('#RthetaJA').css('background-color','#FFF');
				
	            break;
	        case 'heatSinked' :
				$('.heatSinked').show(0);
				$('#RthetaJA').prop('readOnly', true);
				$('#RthetaJA').css('background-color','#CCC');
	            break;
	    }            
	});
	
	$('input[type="text"]').on('change', function()
	{
		calc();
	});
	$('input[type="text"]').on('blur', function()
	{
		calc();
	});
});