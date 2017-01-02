<?php
	require_once('db.php');
	
	if (!empty($_GET['id'])){
		$id = $_REQUEST['id'];
    }
	
	if (!empty($_POST)){
		
		$name = $_POST['name'];
		$guests = $_POST['guests'];
		
		$sql = "UPDATE guest_list SET name = ?, total_guest = ? WHERE id = ?";
		
		try{
			$pdo = Database::connection();
			$editQuery = $pdo -> prepare($sql);
			$editQuery -> execute(array($name,$guests,$id));
			header("Location: /babyshower/guests.php");
		} catch(Exception $e){
			echo $e->getMessage();
			die();
		}
		
	} else{
		// Get user from DB with ID and pute name and total_guest in variables for HTML input value
		$sql = "SELECT * FROM guest_list WHERE id = ?";
		try{
			$pdo = Database::connection();
			$userInfoQuery = $pdo -> prepare($sql);
			$userInfoQuery -> bindParam(1, $id, PDO::PARAM_INT);
			$userInfoQuery -> execute();
		} catch(Exception $e){
			echo $e->getMessage();
			die();
		}
		
		$info = $userInfoQuery -> fetch(PDO::FETCH_ASSOC);
		$name = $info['name'];
		$guests = $info['total_guest'];
	}
	
	$pageTitle = "edit";
	include ("inc/header.php");

?>

<div class="body-container">
	
	<h1 class="body-title">Are you sure you want to edit this guest.</h1>
	
	<form class="form update-form" action="edit.php?id= <?php echo $id;?> " method="post">
		<fieldset class="update-form__set">
			<label class="update-form__label" for="name">Name</label>
			<input class="update-form__input" type="text" name="name" value=" <?php echo !empty($name)?$name:' '; ?> "/>
		</fieldset>
		
		<fieldset class="update-form__set">
			<label class="update-form__label" for="guests">Guests</label>
			<input class="update-form__input" type="text" name="guests" value=" <?php echo !empty($guests)?$guests:' '; ?> "/>
		</fieldset>
		
		<fieldset class="update-form__set update-form__set--btns">
			<button type="submit" class="btn btn-update">Update</button>
			<button class="btn btn-noupdate"><a href="/babyshower/guests.php">Back</a></button>
		</fieldset>
	</form>
	
</div>