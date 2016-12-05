
<?php

	$pageTitle = "guests";
	include ("inc/header.php");
	$pdo = Database::connection();
	$sql = "SELECT * FROM guest_list ORDER BY name ASC";
	
	try{
		$guests = $pdo->query($sql);
	} catch(Exception $e){
		echo $e->getMessage();
		die();
	}	
	
	$guestList = $guests -> fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($guestList as $guest){ ?>
	<?php echo "<div>" . $guest["name"] . "</div>"; ?>
	<?php echo "<div>" . $guest["total_guest"] . "</div>"; ?>
							
<?php } ?>


<?php include ("inc/footer.php");?>