<?php
	$pageTitle = "rsvp";
	include ("inc/header.php");

?>
	<div class="body-container">
		<h2 class="body-title"> <?php echo ucwords($pageTitle); ?> </h2>
			<form class="rsvp-form" id="js-form" action="addToList.php" method="post">
				<fieldset class="rsvp-form__set rsvp-form__set--1">
					<label class="rsvp-form__label" for="name">FullName</label>
					<input class="rsvp-form__input" type="text" name="name" id="name" required>
					<?php if (!empty($errorName)): ?>
						<span class="rsvp__help"><?php echo $errorName;?></span>
					<?php endif; ?>
					<input type="submit" value="Next" class="rsvp-form__next" id="next--1">
				</fieldset>
				<fieldset class="rsvp-form__set rsvp-form__set--2">
					<label class="rsvp-form__label" for="guests">Guests</label>
					<input class="rsvp-form__input" type="text"  name="guests" id="guests" required>
					<input type="submit" value="Next" class="rsvp-form__next" id="next--2">
					<?php if (!empty($errorGuest)): ?>
						<span class="rsvp__help"><?php echo $errorGuest;?></span>
					<?php endif; ?>
				</fieldset>
				<fieldset class="rsvp-form__set rsvp-form__set--3">
					<button class="rsvp-form__btn" type="submit">RSVP</button>
				</fieldset>
			</form>
	</div>
			
<?php include ("inc/footer.php");?>