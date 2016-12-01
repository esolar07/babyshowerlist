<?php
	$pageTitle = "rsvp";
	include ("inc/header.php");

?>
			
	<form class="rsvp-form" action="addToList.php" method="post">
		<fieldset class="rsvp-form__set">
			<label class="rsvp-form__label" for="name">FullName</label>
			<input class="rsvp-form__input" type="text" id="name" required>
		</fieldset>
		<fieldset class="rsvp-form__set">
			<label class="rsvp-form__label" for="guests">Guests</label>
			<input class="rsvp-form__input" type="text" id="name" required>
		</fieldset>
		<fieldset class="rsvp-form__set">
			<input class="rsvp-form__btn" type="submit" value="RSVP">
		</fieldset>
	</form>
			
<?php include ("inc/footer.php");?>