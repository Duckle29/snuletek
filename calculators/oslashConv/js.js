// JavaScript Document

/*
ARMA 2 Coordinate calculator, made by Mikkel Jeppesen.
You are free to use and emhance this, just leave this link intact: http://snuletek.org as it is my site, and I would like to keep the credit for what I made ;)

The only thing that is to this calculator, is the main html document, this javascript, and jquery, which is included from one of googles code hosting sites.

Happy hacking!
*/

var inStringField = document.getElementById('string');
var out = document.getElementById('out');

function convert()
{
	var string = inStringField.value;
	while(string.indexOf('\u00A0') > -1 || string.indexOf('\u00E6') > -1 || string.indexOf('\u00F8') > -1 || string.indexOf('\u00E5') > -1 || string.indexOf('\u00C6') > -1 || string.indexOf('\u00D8') > -1 || string.indexOf('\u00C5') > -1)
	{
		string = string.replace('\u00E6', '&amp;aelig;');
		string = string.replace('\u00F8', '&amp;oslash;');
		string = string.replace('\u00E5', '&amp;aring;');
		string = string.replace('\u00C6', '&amp;AElig;');
		string = string.replace('\u00D8', '&amp;Oslash;');
		string = string.replace('\u00C5', '&amp;Aring;');
		string = string.replace('\u000a', '<br />');	
		string = string.replace('\u2013', '-');	
	}
	out.innerHTML=string;	
}