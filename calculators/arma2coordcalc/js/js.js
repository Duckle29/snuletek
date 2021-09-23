// JavaScript Document

/*
ARMA 2 Coordinate calculator, made by Mikkel Jeppesen.
You are free to use and emhance this, just leave this link intact: http://snuletek.org as it is my site, and I would like to keep the credit for what I made ;)

The only thing that is to this calculator, is the main html document, this javascript, and jquery, which is included from one of googles code hosting sites.

Happy hacking!
*/
var map = $('#map option:selected').val();
var inCoords = document.getElementById('databaseCoords');
var xOutBox = document.getElementById('xOutBox');
var yOutBox = document.getElementById('yOutBox');
var zOutBox = document.getElementById('zOutBox');

function waterMark(dom,isFocus,watermark)
{
	if(isFocus)
	{
		if(dom.value === watermark)
		{
			dom.value = '';
		}
	}
	else if(!isFocus)
	{
		if(dom.value === '')
		{
			dom.value = watermark;
		}
	}
}

function calculateCoords(direction)
{
	switch(direction)
	{
		case 1:
			var inCoordsString = inCoords.value;
			var headStart = inCoordsString.indexOf('[') + 1;
			var headEnd = inCoordsString.indexOf(',');		
			var heading = inCoordsString.substr(headStart,headEnd - headStart);
			
			var XcoordStart = inCoordsString.indexOf('[',1) + 1;
			var XcoordEnd = inCoordsString.indexOf(',',XcoordStart);
			var Xraw = inCoordsString.substr(XcoordStart,XcoordEnd - XcoordStart);
	
			var YcoordStart = XcoordEnd + 1;
			var YcoordEnd = inCoordsString.indexOf(',',YcoordStart);
			var Yraw = inCoordsString.substr(YcoordStart,YcoordEnd - YcoordStart);
			
			var ZcoordStart = ZcoordEnd + 1;
			var ZcoordEnd = inCoordsString.indexOf(',',ZcoordStart);
			var Zraw = inCoordsString.indexOf(ZcoordStart, ZcoordEnd - ZcoordStart);
			
			var Xout = Math.round(Xraw * 10) / 1000;
			var Yout = Math.round((15360 - Yraw)*10) / 1000;
					
			xOutBox.value = Xout;
			yOutBox.value = Yout;
			headOutBox.value = heading;
			
				
			var urlXCoord = Math.floor(Xout);
			var urlYCoord = Math.floor(Yout);
				
			if(urlXCoord < 10)
			{
				urlXCoord = '00' + urlXCoord;
			}
			else if(urlXCoord < 100 && urlXCoord > 9)
			{
				urlXCoord = '0' + urlXCoord;	
			}
					
			if(urlYCoord < 10)
			{
				urlYCoord = '00' + urlYCoord;
			}
			else if(urlYCoord < 100 && urlYCoord > 9)
			{
			urlYCoord = '0' + urlYCoord;	
			}
			
			var getUrl = 'http://dayzdb.com/map#6.' + urlXCoord + '.' + urlYCoord;			
		
			$('#mapUrl').fadeOut(400, function() {
		  		height = $(document).height() * 0.8;
		  		$('#mapUrl').remove();
		  		$('<iframe id="mapUrl" src="'+getUrl+'" height="'+height+'"width="100%">').delay(200).appendTo('body').hide();
		  	$('#mapUrl').delay(400).fadeIn(400); 
			});
			break;
		
		case 0:	
			var Xin = xOutBox.value * 100;
			var Yin = 15360 - yOutBox.value * 100;
			if(isNaN(headOutBox.value))
			{
				var heading = 0;
			}
			else
			{
				var heading = headOutBox.value;
			}
			
			var databaseOut = '[' + heading + ',[' + Xin + ',' + Yin + ',0]]'
		
			inCoords.value = databaseOut;
			break;
	}
}