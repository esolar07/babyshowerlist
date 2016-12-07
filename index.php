<?php
	$pageTitle = "rsvp";
	include ("inc/header.php");

?>
	<div class="body-container">
		<h2 class="body-title"> <?php echo ucwords($pageTitle); ?> </h2>
			<form class="rsvp-form" action="addToList.php" method="post">
				<fieldset class="rsvp-form__set">
					<label class="rsvp-form__label" for="name">FullName</label>
					<input class="rsvp-form__input" type="text" name="name" id="name" required>
					<?php if (!empty($errorName)): ?>
						<span class="rsvp__help"><?php echo $errorName;?></span>
					<?php endif; ?>
				</fieldset>
				<fieldset class="rsvp-form__set">
					<label class="rsvp-form__label" for="guests">Guests</label>
					<input class="rsvp-form__input" type="text"  name="guests" id="guests" required>
					<?php if (!empty($errorGuest)): ?>
						<span class="rsvp__help"><?php echo $errorGuest;?></span>
					<?php endif; ?>
				</fieldset>
				<fieldset class="rsvp-form__set">
					<button class="rsvp-form__btn" type="submit">RSVP</button>
				</fieldset>
			</form>
	</div>
			
<?php include ("inc/footer.php");?>