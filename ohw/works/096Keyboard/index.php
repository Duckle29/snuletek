<?php require '../../essentials/head.php';?>
<body id="o96Keyboard">
	<div id="centerPage">
    	<div id="header">
	        <a href="http://snuletek.org/">
        		<img alt="Header-Img" src="../../images/ohwHeader.png" />
            </a>
        </div>

        <div id="mainMenu">
        	<?php require '../../essentials/topMenu.php'; ?>
        </div>

        <div id="centerSubMenu">
        	<div id="submenu" class="submenu">
        	</div>
        </div>

        <div id="bodydiv">
			<div id="content">
        		<h2>The 0.96% Keyboard</h2>
				<hr />

				<h3>The why?</h3>
				<p>Why was this project actually created?<br />
              	Browsing <a href="https://www.reddit.com/r/MechanicalKeyboards">/r/MechanicalKeyboards</a> on reddit, you will now and then see some
								keyrings, and people in the comments will mention how it could be awesome if that keyring actually worked. <br />
								So I decided to make that happen. It had to have 1 key, and preferably fit under the switch. <br />
								Then I figured, why make it only one userselectable letter? "Why not make it a morse code keyboard?" And that's how this happened. <br />
								Is it usefull? Nope! Was it fun? Yep!
			  </p>

				<h3>The code</h3>
				<p>And of course, this won't work without some code. <br />
				For this project, I bootloaded the ATTiny85 with the <a href="https://github.com/micronucleus/micronucleus">micronucleus bootloader </a>
				I used the latest version, which at the time of writing was 1.11 <br />
				This will allow us to upload programs over usb, which will be much easier, due to the lack of space for an ISP header on the board.<br />

				I then used the <a href="https://code.google.com/p/morse-endecoder/">Morse-EnDecoder library.</a> A rather impressive
				Library, which can encode and decode morse-code simultaneously, I used this for decoding the morse input.<br />

				And the last library that I used was the DigiKeyboard library, a library that I can't seem to find a download for, other than getting <a href="https://digistump.com/wiki/digispark/tutorials/connecting">Digistumps version of the arduino IDE</a>
				which really isn't too big of an issue, as you will need it to upload the sketch anyways (Unless you use the command line program for uploading .hex files to the chip)
				<br />
				Then it was just a few lines of code, taking the output of the morse-code decoder, and stuffing it in to the keyboard library, and tadah!

				<h3>The files</h3>
				<p>And here's the fils for the project</p>
                <a href="files/top.png"><img src="files/top.png" /></a>&nbsp;<a href="files/bot.png"><img src="files/bot.png" /></a>
				<ul>
					<li><a href="files/1pcb.sch">Eagle schematic</a></li>
				  <li><a href="files/1pcb.brd">Eagle board</a></li>
          <li><a href="files/1pcb.pdf">schematic PDF</a></li>
					<li><a href="files/_0.96Keyboard.ino">Sketch</a></li>
				</ul>
       		</div>
        </div>
        <div id="footer">
        	<?php require '../../essentials/footer.php'; ?>
        </div>
    </div>
</body>
</html>
