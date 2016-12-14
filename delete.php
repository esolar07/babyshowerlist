<?php

	$pageTitle = "delete";
	include ("inc/header.php");
	
	
	if (!empty($_POST)){
		$id = $_POST['id'];
		$sql = "Delete * FROM guest_list WHERE id = ?";
		
		try{
			$pdo = Database::connection();
			$deleteQuery = $pdo -> prepare($sql);
			$deleteQuery -> bindParam($id);
			$deleteQuery -> execute();
		} catch(Exception $e){
			echo $e->getMessage();
			die();
		}
		
	}
?>
<div class="body-container">
	
	<h1>Are you sure you want to delete this guest.</h1>

</div>
