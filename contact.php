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
				

				if (!$name || !$email || !$message) {
					?>
					<h4 class="error">All fields required.</h4>
					<a href="contact.php" class="button">Go back and try again</a>
					<?php
					exit;
				}

				// add recipient email to a variable
				$to = "tiagolemespalhano@gmail.com";

				// create a subject
				$subject = '$name sent you a message via your contact form';

				// contruct the message
				$message = "Name: $name\r\n";
				$message .= "Email: $email\r\n";
				$message .= "Message: \r\n$message";

				// If the subscribe checkbox was checked...
				if (isset($_POST['subscribe']) && $_POST['subscribe'] == "Subscribe") {
					// Add a new line to the $message
					$message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
				}

				$message = wordwrap($message, 72);

				// Set the email headers into a variable
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/plain; charset: iso-8859-1\r\n";
				$headers .= "From: $name <$email> \r\n";
				$headers .= "X-Priority: 1\r\n";
				$headers .= "X-MSMail-Priority: High\r\n\r\n";

				//Send the email
				mail($to, $subject, $message, $headers);				

				// Show success message after email has sent
				?>
				<h5>Thanks for contacting Franklin's</h5>
				<p>Please allow us 24 hours for a response</p>
				<p><a href="/final" class="button block">&laquo; Go to Home Page</a></p>
				<?php
			}
			else{
				?>
				<form method="post" action="" id="contact-form">

					<label for="name">Name</label>
					<input type="text" id="name" name="name" required placeholder="Your name here">

					<label for="email">Email</label>
					<input type="email" id="email" name="email" required placeholder="Your email here">

					<label for="message">Message</label>
					<textarea id="message" name="message" required placeholder="Your message here"></textarea>

					<input type="checkbox" id="subscribe" for="subscribe" name="subscribe" value="subscribe">

					<label for="subscribe">Subscribe to Newsletter</label>

					<input type="submit" name="contact_submit" class="button next" value="Send Message">
					
				</form>
				<?php

			}


		?>

	</div>

<?php	require('includes/footer.php'); ?>