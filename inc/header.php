<?php

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
			<h1> <?php echo strtoupper($siteTitle); ?> </h1>
		</header>
		<main class="l-main-container">