<?php

require_once('database.php');

?>

<?php

$siteTitle = "kate & eddie's baby shower";
$pageTitle = "rsvp"
require_once('database.php');

?>

<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> <?php echo ucwords($siteTitle) . " - " . strtoupper($pageTitle); ?> </title>
        <meta name="description" content="Kate & Eddie's Baby Shower">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="styles.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	</head>
    <body>
		<header>
			<h1> <?php echo strtoupper($pageTitle); ?> </h1>
		</header>
		<main class="l-main-container">
			
			<form class="rsvp-form">
				<fieldset class="rsvp-form__set">
					<label class="rsvp-form__label" for="name">FullName</label>
					<input class="rsvp-form__input" type="text" id="name" required>
				</fieldset>
				<fieldset class="rsvp-form__set">
					<label class="rsvp-form__label" for="name">FullName</label>
					<input class="rsvp-form__input" type="text" id="name" required>
				</fieldset>
				<fieldset class="rsvp-form__set">
					<input class="rsvp-form__btn" type="submit" value="RSVP">
				</fieldset>
			</form>
		</main>
	</body>
</html>