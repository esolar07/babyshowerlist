
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
	$count = $guests -> rowCount();

?>
<div class="body-container">
	<h2 class="body-title"> <?php echo ucwords($pageTitle); ?> </h2>
	<div class="guest-info">
		<div class="guest-info__box"> 
			<p class="guest-info__count"><?php echo $count ; ?></p>
			<p>have RSVP'd.</p>
		</div>
		<div class="guest-info__box guest-info__box--list">
			<ul class="guest-list">
				<?php foreach($guestList as $guest){ ?>
					<li class="guest-list__person">
						<?php echo "<div> <span class='guest-list__person-name'>Name:</span> " . $guest["name"] . "</div>"; ?>
						<?php echo "<div> Guests: " . $guest["total_guest"] . "</div>"; ?>
						<button class="guest-list__delete"> <a <?php echo 'href="/babyshower/delete.php?id=' . $guest['id'] . '"'; ?> > Delete Guest </a></button>
					</li>					
				<?php } ?>
			</ul>
		</div>
		<div class="guest-info__box"></div>
	</div>
</div>

<?php include ("inc/footer.php");?>