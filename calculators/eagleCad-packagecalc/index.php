<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
		<title>Eagle part spec calculator</title>
    <link href="styles/main.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="scripts/calculate.js"></script>
	</head>

	<body>
    	<div id="centerbg">
        	<div id="contents">
				<h2>Package calculator for eagle part making</h2>
				<p>
        			I often have to make a custom part in eagleCAD, and i found myself doing a lot of the same calculations over and over. Therefore i made this calculator, and i hope you will enjoy it :)
        		</p>
                <center>
                	<form>
                		<table id="inputform">
                    		<tr>
                        		<td>Package width</td>
                        	    <td><input type="text" id="packwidth" value="0"/></td>
                       	 	</tr>
                        	<tr>
                            	<td>Package height</td>
                                <td><input type="text" id="packheight" value="0"/></td>
                            </tr>
                            <tr>
                            	<td>Package height with pins</td>
                                <td><input type="text" id="packheight2" value="0"/></td>
                            </tr>
                            <tr>
                            	<td>Pinspaceing</td>
                                <td><input type="text" id="pinspace" value="0"/></td>
                            </tr>
                            <tr>
                            	<td>Pin width</td>
                                <td><input type="text" id="pinwidth" value="0"/></td>
                            </tr>
                            	<td>Foot length(for smds)</td>
                                <td><input type="text" id="foot" value="0" /></td>
                            <tr>
                            	<td>Number of pins along one side</td>
                                <td><input type="text" id="pinnumber" value="0"/></td>
                            </tr>
                            <tr>
                            	<td>Height/diameter of solderpads</td>
                                <td><input type="text" id="padsheight" value="0"/></td>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                            	<td><input type="button" value="Calculate" /></td>
                            </tr>
                		</table>
                	</form>
                    <hr />
                 </center>
                 <h4>Output:</h4>
                 <center>
                 	<table id="output">
                    	<div id="wire">
                        	<tr>
                            	<td>1. Making the package. copy this into eagles commandline.</td>
                            </tr>
                    		<tr>
                        		<td class="resultbgcolor" id="wireout"></td>
                        	</tr>
                        </div>
                        <div id="pads">
                        	<tr>
                            	<td>2a. Copy this line if you're making a throughhole component.</td>
                            </tr>
                        	<tr>
                            	<td class="resultbgcolor" id="padsout"></td>
                        	</tr>
                        </div>
                        <div id="smds">
                            <tr>
                            	<td>2b. Copy this line if you're making a surface mounted component.</td>
                            </tr>
                            <tr>
                            	<td class="resultbgcolor" id="smdsout"></td>
                            </tr>
                        </div>
                    </table>
                </center>
        	</div>
    	</div>
	</body>
</html>