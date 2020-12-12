<?php 
	$company_name = "Franklin's Fine Dining";
	require('arrays.php'); 
?>



<?php 
	/* Informa o nível dos erros que serão exibidos */
	error_reporting(E_ALL);
	 
	/* Habilita a exibição de erros */
	ini_set("display_errors", 1);
?>


<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>Frankin's Fine Dining</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" type="image/png" href="img/logo_2.png"/>
	</head>



	<body id="final-example">

		<div class="wrapper">

			<div id="banner">
				<a href="/" title="Return to Home">
					<img src="img/banner.png" alt="Franklin's Fine Dining">
				</a>
			</div><!-- banner -->



			<div id="nav">
				<ul>
					<?php require('includes/nav.php'); ?>
				</ul>
			</div><!-- nav -->



			<div class="content">