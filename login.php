<?php
	
	$pageTitle = "login";
	
	session_start();
	
	if (isset($_POST['password'])){	
		
		if ($_POST['password'] == "KateandEddie"){
			$_SESSION['login'] = true;
			header("Location: /babyshower/guests.php");
		} 
		else{
			header("Location: /babyshower");
		}
		
	} 
	include ("inc/header.php");
?>

	<div class="body-container">
		<div class="admin-container">
		<?php require_once('login.php'); ?>
			<form class="login-form" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="post">
				<label class="login-form__label" for="password">Admin</label>
				<input class="login-form__input" type="text" name="password" />
				<button type="submit" class="btn btn--yes">Login</button>
			</form>
		</div>
	</div>