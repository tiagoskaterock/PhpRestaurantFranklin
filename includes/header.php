<?php $company_name = "Franklin's Fine Dining"; ?>

<?php require('arrays.php'); ?>

<?php error_reporting(E_ALL); ?>
	 
<?php ini_set("display_errors", 1); ?>

<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title><?php echo TITLE; ?></title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" type="image/png" href="img/logo_2.png"/>
	</head>

	<body id="final-example">

		<div class="wrapper">

			<div id="banner">
				<a href="index.php" title="Return to Home">
					<img src="img/banner.png" alt="Franklin's Fine Dining">
				</a>
			</div><!-- banner -->

			<div id="nav">
				<ul>
					<?php require('includes/nav.php'); ?>
				</ul>
			</div><!-- nav -->

			<div class="content">