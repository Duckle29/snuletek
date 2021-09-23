<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="pragma" content="no-cahce" />
<title>Snuletek.org</title>
<link href="http://snuletek.org/Styles/main.css" rel="stylesheet" type="text/css" />
<link href="tjCalc.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://snuletek.org/scripts/main.js"></script>
<script type="text/javascript" src="calc.js"></script>
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
<body>
	<div id="centerPage">
    	<div id="header">
	        <a href="http://snuletek.com/">
        	<img alt="Header-Img" src="../../images/header.png" />
            </a>
        </div>
        
        <div id="topmenu">
        	<?php include '../../site/topMenu.php'; ?>
        </div>
        
        <div id="centerSubMenu">
        	<div id="submenu" class="submenu">
        	</div>
        </div>
        
        <div id="bodydiv">
			<div id="content">
        		<h2>Tj temperature calculator for fets</h2>
                <form id="calculator">
                	<input type="radio" name="cooling" value="freeStanding" checked="checked"/>Free standing
                    <input type="radio" name="cooling" value="heatSinked"/>Heatsinked
                    <br />
                    <br />
                    <table>
                    	<thead>
                        </thead>
                        <tbody>
                    		<tr>
                    			<td>
					                <table>
    					            	<thead>
   										</thead>
                    					<tbody>
				                    		<tr>
				                    	    	<td><label for="RdsON">RdsON</label></td>
				                                <td><input type="text" id="RdsON" name="RdsON"/></td>
				                                <td>m&Omega;</td>
				                    	    </tr>
				                            <tr>
				                            	<td><label for="current">Current</label></td>
				                                <td><input type="text" id="current" name="current"/></td>
				                                <td>A</td>
				                            </tr>
				                            <tr>
				                            	<td><label for="ambient">Ambient</label></td>
				                                <td><input type="text" id="ambient" name="ambient"/></td>
				                                <td>&deg;C</td>
				                            </tr>
				                            <tr class="heatSinked">
				                    	    	<td><label for="RthetaJC">R&theta;JC</label></td>
				                                <td><input type="text" id="RthetaJC" name="RthetaJC"/></td>
				                                <td>&deg;C/W</td>
				                    	    </tr>
				                            <tr class="heatSinked">
				                    	    	<td><label for="RthetaCA">R&theta;CA</label></td>
				                                <td><input type="text" id="RthetaCA" name="RthetaCA"/></td>
				                                <td>&deg;C/W</td>
				                    	    </tr>
				                            <tr>
				                            	<td><label for="RthetaJA">R&theta;JA</label></td>
				                                <td><input type="text" id="RthetaJA" name="RthetaJA"/></td>
				                                <td>&deg;C/W</td>
				                            </tr>
				                            <tr>
				                            	<td><hr /></td>
				                                <td><hr /></td>
				                                <td><hr /></td>
				                            </tr>
				                            <tr>
				                            	<td><label for="Tj">Tj</label></td>
				                                <td><input type="text" id="Tj" name="Tj" readonly="readonly"/></td>
				                                <td>&deg;C</td>
				                            </tr>
				                    	</tbody>
				                	</table>
				                </td>
                                <td width="50px;"></td>
            				    <td>
				                  	This calculator will calculate the internal Tj of a mosfet.<br />
                			        RdsON is the resistance the mosfet will have when fully on.<br />
			                        It is adviced to use worst case figures.<br />
			                        <br />
			                        Ambient is the ambient temperature the mosfet will be in.<br />
                                    <br />
			                        R&theta;JA can be found in the datasheet. It's the temperature<br />
			                        difference between the junction and ambient. Similarly JC and CA<br />
			                        stands for Junction to case, and case to air, where case to air<br />
			                        is to be found in the datasheet for the heatsink.
			                    </td>
            		        </tr>
                        </tbody>
                   </table>
                </form>
                <br />
                <img class="fetImg" src="fet.png" />
       		</div>
        </div>
        <div id="footer">
        	<?php include '../../site/footer.php'; ?>
        </div>
    </div>
</body>
</html>