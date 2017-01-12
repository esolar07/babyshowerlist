<?php
	ob_start();
	
	$siteTitle = "kate & eddie's baby shower";
	require_once('db.php');
	$pdo = Database::connection();
	

?>

<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> <?php echo ucwords($siteTitle) . " - " . strtoupper($pageTitle); ?> </title>
        <meta name="description" content="Kate & Eddie's Baby Shower">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="prod/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	</head>
    <body>
	
		<header class="l-page-header">
			<h1 class="header-title"><a href="/babyshower"> <?php echo strtoupper($siteTitle); ?> </a></h1>			
		</header>
		
		<main class="l-main-container">
			
			<?php if ($pageTitle == 'rsvp') { ?>
			
				<div class="admin-container">
				
					<?php if ($_SESSION['login'] == true) { ?>
						<button class="btn btn--yes"><a href="/babyshower/guests.php">Admin</a></button>
						<button class="btn btn--delete"><a href="/babyshower">Log Out</a></button>
					<?php } else { ?>
						<button class="btn btn--yes"><a href="/babyshower/login.php">Login</a></button>
					<?php }; ?>
				
				</div>
				
			<?php }; ?>