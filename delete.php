<?php
	
	require_once('db.php');
	
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
			$deleteQuery -> bindParam(1,$id, PDO::PARAM_INT);
			$deleteQuery -> execute();
			header("Location: /babyshower/guests.php");
		} catch(Exception $e){
			echo $e->getMessage();
			die();
		}
		
		
		
	} else {
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
		
	}
	
	
	
	
	$pageTitle = "delete";
	include ("inc/header.php");
?>
<div class="body-container">
	
	<h1 class="body-title">Are you sure you want to delete this guest.</h1>
	
	<form class="delete-form" action="delete.php" method="post">
		<?php echo "<div> <b>ID: </b>" . $id . "</div>"; ?>
		<?php echo "<div> <b>Name: </b> " . $info['name'] . "</div>"; ?>
		<?php echo "<div> <b>Guests: </b> " . $info['total_guest'] . "</div>"; ?>
		<input type="hidden" name="id" value="<?php echo $id;?>"/>
		<button type="submit" class="btn btn--delete">Yes</button>
        <button class="btn btn--no"><a href="/babyshower/guests.php">No</a></button>
	</form>
	
</div>
