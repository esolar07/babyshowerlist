<?php

	session_start();
	
	$pageTitle = "rsvp";
	
	include ("inc/header.php");
	
?>
	
	<div class="body-container">
		<h2 class="body-title"> <?php echo ucwords($pageTitle); ?> </h2>
		<form class="form rsvp-form"  id="js-form"  action="addToList.php" method="post">
			<div class="rsvp-form__set rsvp-form__set--1">
				<input class="rsvp-form__input" type="text" name="name" id="name" placeholder="Full Name" required>
				<button class="rsvp-form__next" id="next--1">Next</button>
			</div>
			<div class="rsvp-form__set rsvp-form__set--2">
				<input class="rsvp-form__input" type="text"  name="guests" id="guests" placeholder="# of Guests" required>
				<button class="rsvp-form__next" id="next--2">Next</button>
			</div>
			<div class="rsvp-form__set rsvp-form__set--3">
				<button class="rsvp-form__btn" id="submit" type="submit">RSVP</button>
			</div>
		</form>
	</div>
			
<?php include ("inc/footer.php");?>