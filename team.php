<?php define("TITLE", "Team | Franklin's Fine Dining"); ?>

<?php require('includes/header.php'); ?>




<!-- team-members -->
<div id="team-members" class="cf">

	<h1>Our Team at Franklin's</h1>

	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco <strong>laboris nisi ut aliquip ex ea commodo
		consequat.</strong>
	</p>

	<hr>

	<?php 
		foreach ($team_members as $member) {
			?>
			<div class="member">
				<img src="img/<?= $member['img'] ?>.png" alt="<?= $member['name'] ?>">
				<h2><?= $member['name'] ?></h2>
				<p><?= $member['bio'] ?></p>
			</div>
			<?php
		}
	?>


</div>
<!-- end team-members -->



<?php	require('includes/footer.php'); ?>

