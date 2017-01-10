<?php

	session_start();
	
	$pageTitle = "rsvp";
	
	include ("inc/header.php");
	
?>
	<?php if ($pageTitle == 'rsvp') { ?>
			
		<div class="admin-container">
		
			<?php if ($_SESSION['login'] == true) { ?>
				<button class="btn btn--yes"><a href="/babyshower/guests.php">Admin</a></button>
			<?php } else { ?>
				<button class="btn btn--yes"><a href="/babyshower/login.php">Login</a></button>
			<?php }; ?>
		
		</div>
		
	<?php }; ?>
	
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