<?php if (!defined('FLUX_ROOT')) exit; ?>
<link rel="stylesheet" type="text/css" href="style.css" />
<div id="page-wrap">
	  <p>&nbsp;</p>
				
		<div id="contact-area">
			
			<form method="post" action="contactengine.php">
				<label for="Name">Name:</label>
				<input type="text" name="Name" id="Name" />
				
				<label for="City">City:</label>
				<input type="text" name="City" id="City" />
	
				<label for="Email">Email:</label>
				<input type="text" name="Email" id="Email" />
				
				<label for="Message">Message:</label><br />
				<textarea name="Message" rows="20" cols="20" id="Message"></textarea>

				<input type="submit" name="submit" value="Submit" class="submit-button" />
			</form>
			
			<div style="clear: both;"></div>
			
			<p>Check out a <a href="http://css-tricks.com/examples/NiceSimpleContactForm2">version of this</a> with SPAM protection.</p>
		
		</div>
	
	</div>