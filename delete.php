<?php

	$pageTitle = "delete";
	include ("inc/header.php");
	
	$id = 0;
	if (!empty($_GET)){
		$id = $_REQUEST['id'];
    }
	
	if (!empty($_POST)){
		$id = $_POST['id'];
		$sql = "DELETE FROM guest_list WHERE id = ?";
		
		try{
			$pdo = Database::connection();
			$deleteQuery = $pdo -> prepare($sql);
			$deleteQuery -> bindParam($id);
			$deleteQuery -> execute();
			header("Location: /babyshower/guests.php");
		} catch(Exception $e){
			echo $e->getMessage();
			die();
		}
		
	}
?>
<div class="body-container">
	
	<h1 class="body-title">Are you sure you want to delete this guest.</h1>
	
	<form class="delete-form" action="addToList.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id;?>"/>
		<button type="submit" class="btn btn-delete">Yes</button>
        <button class="btn btn-nodelete"><a class="btn" href="/babyshower/guests.php">No</a><button>
	</form>
	
</div>
