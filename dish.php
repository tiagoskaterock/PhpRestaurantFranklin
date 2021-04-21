<?php define("TITLE", "Menu Item | Franklin's Fine Dining") ?>

<?php define("TIP", 0.2) ?>

<?php require('includes/header.php') ?>

<?php

	if (isset($_GET['item'])) {
		$menu_item = strip_bad_chars($_GET['item']);
		$dish = $menu_items[$menu_item];
		$title = $dish['title'];
		$price = $dish['price'];
		$blurb = $dish['blurb'];
		$drink = $dish['drink'];
	}

?>

<hr>

<div id="dish">

	<h1><?= $title ?> <span class="price"><sup>$</sup><?= $price ?></span></h1>
	<p><?= $blurb ?></p>

	<br>

	<p><strong>Suggested Beverage: <?= $drink ?></strong></p>
	<p><em>Suggested Tip: <sup>$</sup><?= suggested_tip($price, TIP) ?></em></p>

</div>

<hr>

<a href="menu.php" class="button previous">&laquo; Back to Menu</a>

<?php require('includes/footer.php'); ?>