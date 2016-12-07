
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
<div class="body-container">
	<h2 class="body-title"> <?php echo ucwords($pageTitle); ?> </h2>
	<ul class="guest-list">
		<?php foreach($guestList as $guest){ ?>
			<li class="guest-list__person">
				<?php echo "<div> Name: " . $guest["name"] . "</div>"; ?>
				<?php echo "<div> Guests: " . $guest["total_guest"] . "</div>"; ?>
			</li>					
		<?php } ?>
	</ul>
</div>

<?php include ("inc/footer.php");?>