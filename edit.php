<?php

	$id = 0;
	if (!empty($_GET)){
		$id = $_REQUEST['id'];
    }
	
	if (!empty($_POST)){
		$id = $_POST['id'];
		$sql = "UPDATE guest_list SET name = ? WHERE id = ?";
		require_once('db.php');
		try{
			$pdo = Database::connection();
			$deleteQuery = $pdo -> prepare($sql);
			$deleteQuery -> bindParam(1,$id, PDO::PARAM_INT);
			$deleteQuery -> execute();
			header("Location: /babyshower/guests.php");
		} catch(Exception $e){
			echo $e->getMessage();
			die();
		}
		
	} else{
		$id = $_POST['id'];
		$sql = "SELECT * FROM guest_list WHERE id = ?";
		require_once('db.php');
		try{
			$pdo = Database::connection();
			$userInfoQuery = $pdo -> prepare($sql);
			$userInfoQuery -> bindParam(1, $id, PDO::PARAM_INT);
			$userInfoQuery -> execute();
			$info = $userInfoQuery -> fetch(PDO::FETCH_ASSOC);
			$name = $info['name'];
			$guests = $info['guests'];
		} catch(Exception $e){
			echo $e->getMessage();
			die();
		} 
	}
	
	$pageTitle = "edit";
	include ("inc/header.php");

?>

<div class="body-container">
	
	<h1 class="body-title">Are you sure you want to edit this guest.</h1>
	
	<form class="update-form" action="delete.php" method="post">
	
		<label class="update-form__label" for="name">Name</label>
		<input type="hidden" name="name" value=" <?php echo $name; ?> " "/>
		
		<label class="update-form__label" for="guests">Guests</label>
		<input type="hidden" name="guests" value=" <?php echo $guests; ?> "/>
		
		<button type="submit" class="btn btn-update">Update</button>
        <button class="btn btn-noupdate"><a class="btn" href="/babyshower/guests.php">Back</a><button>
		
	</form>
	
</div>