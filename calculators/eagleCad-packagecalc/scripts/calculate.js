// JavaScript Document

//Wait till the calculator has been loaded
$(window).load(function() {
	//A value used to see wheater or not the user has calculated an output.
	var calculated = true;
	
	$('#wire').hide();
	$('#pads').hide();
	$('#smds').hide();
	
	
	$(':text').focusin(function(){
		$(this).val('');
		calculated = false;
		$('#wire').slideUp();
		$('#pads').slideUp();
		$('#smds').slideUp();
	});
	
	$(':button').click(function(){
		var packwidth = $('#packwidth').val();
		var packheight = $('#packheight').val();
		var packheighttwo = $('#packheight2').val();
		var pinspaceing = $('#pinspace').val();
		var pinnumber = $('#pinnumber').val();
		var padsheight = $('#padsheight').val();
		var pinwidth = $('#pinwidth').val();
		var foot = $('#foot').val();
		
		
		var y = pinspaceing*pinnumber;
		alert(pinspaceing);
		var x = packwidth-y;
		var chiptopadx = x/2;
		
		var y = packheighttwo-packheight-foot;
		var x = y/2;
		var chiptopady = padsheight/2+x;
		
		var wirestr = 'wire (0 0)('+packwidth+' 0)('+packwidth+' '+packheight+')(0 ' +packheight+')(0 0);';
		var padsstrOne = 'change drill'+pinwidth ;
		var padsstrtwo ='pad R90 ';
		
		for(var i=0; i<pinnumber; i++)
		{
			var x = pinspaceing*i+chiptopadx;
			var z = 0-1;
			var y = chiptopady*z;
			padsstrtwo += '('+x+' '+y+')';
		}
		
		for(var i=pinnumber-1; i>=0; i--)
		{
			var x = pinspaceing*i+chiptopadx;
			var y = chiptopady+packheight;
			padsstrtwo += '('+x+' '+y+')';	
		}
		
		padsstrtwo += ';';
		
		alert(padsstrtwo);
		
		$('#wireout').text(wirestr);
		
		$('#wire').slideDown(fast, function(){
			$('#pads').slideDown(fast, function(){
				$('#smds').slideDown();
			});
		});
		
		calculated = true;		
	});
});