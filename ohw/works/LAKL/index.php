<?php require '../../essentials/head.php';?>
<body id="LAKL">
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
        		<h2>The LAKL Keyboard</h2>
				<hr />

				<h3>The why?</h3>
				<p>Why was this keyboard created?<br />
              	Browsing <a href="https://www.reddit.com/r/MechanicalKeyboards">/r/MechanicalKeyboards</a> on reddit, I stumbled across <a href="https://www.reddit.com/r/MechanicalKeyboards/comments/3pmltv/looking_to_commission_someone_to_design_a_pcb_for/">this post.</a>
								I thought it was a great idea, and went to work on getting a schematic wired up, and then a PCB traced out.

								The keyboard is a 60% formfactor, with a numpad slapped on the left. This allows the "closer to the mouse" advantage of a 60% keyboard, while still
								having a rapid way of number-entry.

								The name itself is an abbreviation of "<b>L</b>eftie <b>A</b>rrow-<b>K</b>ey <b>L</b>ess"
			  </p>

				<h3>The software</h3>
				<p>And of course, this won't work without some code. <br />
				For this project, I'm using a Teensy 3.1, running <a href="https://github.com/kiibohd/controller">HaaTa's KiiBohd controller</a>.
				When I'm done with the base keymap for this keyboard, I'll submit a pull request to that repo, and see if HaaTa will accept it. Untill then,
				I have added support for this board in my own fork found <a href="https://github.com/dumle29/controller">here</a>

				To use this software, follow the instructions on the github wiki, linked in the readme. When you can compile the firmware, run LAKL.bash, found in keyboards/

				When I can test this some more, I have plans of adding support for this keyboard, in the web configurator, similar to <a href="http://input.club/configurator">the one used for the massdrop infinity keyboard</a>
				</p>
				<h3>The files</h3>
				<p>And here's the files for the project</p>
				<iframe width="640" height="480" src="https://sketchfab.com/models/f146191054a64f0fa7db680c1c5db222/embed" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel=""></iframe>
					<p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
						<a href="https://sketchfab.com/models/f146191054a64f0fa7db680c1c5db222?utm_source=oembed&utm_medium=embed&utm_campaign=f146191054a64f0fa7db680c1c5db222" target="_blank" style="font-weight: bold; color: #1CAAD9;">LAKL 0.2</a>
						by <a href="https://sketchfab.com/smuttendk?utm_source=oembed&utm_medium=embed&utm_campaign=f146191054a64f0fa7db680c1c5db222" target="_blank" style="font-weight: bold; color: #1CAAD9;">smuttendk</a>
						on <a href="https://sketchfab.com?utm_source=oembed&utm_medium=embed&utm_campaign=f146191054a64f0fa7db680c1c5db222" target="_blank" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a>
					</p>

				<ul>
					<li><a href="files/LAKL.zip">KiCAD files</a></li> These are a bit messy, but they are so because I wanted to include the libraries. They might not be linked right either, but they are there.
          <li><a href="files/LAKL.pdf">Schematic PDF</a></li>
					<li><a href="files/gerbers-LAKL-v0.2.zip">Gerbers</a></li>
				</ul>
       		</div>
        </div>
        <div id="footer">
        </div>
    </div>
</body>
</html>
