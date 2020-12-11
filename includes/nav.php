<ul>
	
	<?php   

		foreach ($nav_items as $item) {
			
			?>

				<li>
					<a href="<?php echo $item['slug']; ?>">
						<?php echo $item['title']; ?>
					</a>
				</li>

			<?php


		}

	?>
	
</ul>