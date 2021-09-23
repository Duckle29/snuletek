<?php 
	session_start();
	if(isset($_REQUEST['logout']) && $_REQUEST['logout'])
	{
		if(isset($_SESSION['redir']) && $_SESSION['redir'] != '')
		{
			$redir = $_SESSION['redir'];
		}
		else
		{
			$redir = 'http://snuletek.org';
		}
		$_SESSION = array(); //destroy all of the session variables
	    session_destroy();
		header('location: '.$redir);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; 
charset=iso-8859-1" />
<meta http-equiv="pragma" content="no-cahce" />
<title>Snuletek.org</title>
<link href="http://snuletek.org/Styles/main.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://snuletek.org/scripts/main.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35303785-1']);
  _gaq.push(['_setDomainName', 'snuletek.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>