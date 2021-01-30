<?php 

	define("TITLE", "Contact Us | Franklin's Fine Dining");

	require('includes/header.php');

?>

	<div id="contact">
		<hr>

		<h2>Get in Touch With Us</h2>

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
	</div>

<?php	require('includes/footer.php'); ?>