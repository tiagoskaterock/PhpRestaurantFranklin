<?php 

	define("TITLE", "Contact Us | Franklin's Fine Dining");

	require('includes/header.php');



?>

	<div id="contact">
		<hr>

		<h2>Get in Touch With Us</h2>

		<?php

		 	// check for header injection
			function has_header_injection($string){
				return preg_match("/[\r\n]/", $string);
			}

			if (isset($_POST['contact_submit'])) {
				$name = trim($_POST['name']);
				$email = trim($_POST['email']);
				$message = $_POST['message'];

				// Check to see if $name or $email have header injections				
				if (has_header_injection($name) || has_header_injection($email)) {
					die(); // If true, kill the script
				}
				

				if (!$name || $email || $message) {
					?>
					<h4 class="error">All fields required.</h4><a href="contact.php">Go back and try again</a>
					<?php
				}
				
			}


		?>

		<form method="post" action="" id="contact-form">

			<label for="name">Name</label>
			<input type="text" id="name" name="name" placeholder="Your name here">

			<label for="email">Email</label>
			<input type="email" id="email" name="email" placeholder="Your email here">

			<label for="message">Message</label>
			<textarea id="message" name="message" placeholder="Your message here"></textarea>

			<input type="checkbox" id="subscribe" for="subscribe" name="subscribe" value="subscribe">
			<label for="subscribe">Subscribe to Newsletter</label>

			<input type="submit" name="contact_submit" class="button next" value="Send Message">
			
		</form>
	</div>

<?php	require('includes/footer.php'); ?>