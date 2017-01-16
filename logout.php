<?php
	
	$pageTitle = "logout";
	
	session_start();
	
	if (isset($_POST['logout'])){	
		unset($_SESSION['login']);
		header("Location: /babyshower");
	}

		
	
	include ("inc/header.php");
?>

	<div class="body-container">
		<div class="admin-container">
			<h1 class="body-title">Are you sure you want to log out?</h1>
			<form class="logout-form" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="post">
				<input type="hidden" name="logout"/>
				<button type="submit" class="btn btn--yes">Logout</button>
			</form>
		</div>
	</div>