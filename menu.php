<?php define("TITLE", "Menu | Franklin's Fine Dining"); ?>

<?php require('includes/header.php'); ?>

<div id="menu-items">

	<h1>Our Delicious Menu</h1>
	<p>Like our team, our menu is very small &mdash; but dang, does it ever pack a punch!</p>
	<p><em>CLick any menu item to learn more about it.</em></p>

	<hr>

	<ul>
		<?php 
			foreach ($menu_items as $dish => $item) {
			?>
			<li>

				<a href="dish.php?item=<?= $dish ?>">
					<?= $item['title'] ?>
				</a>

				<sup> $</sup>
				
				<?= $item['price'] ?>
				
			</li>
			<?php
			}
		?>
	</ul>

</div>

<?php 
	echo "<pre>";
	print_r($menu_items);
	echo "</pre>";
?>

<?php require('includes/footer.php'); ?>