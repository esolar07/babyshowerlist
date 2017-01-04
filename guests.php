
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
		
			<?php if ($count != 0){ ?>
			
				<p class="guest-info__count"><?php echo $count ; ?></p>
				<p>have RSVP'd.</p>
			
			<?php } else { ?>
			
				<h1> No one has registered.</h1>
			
			<?php } ?>
			
		</div>
		
		<?php if (!empty($guestList)){ // displays guest list if there are ppl registered ?>
		
		<div class="guest-info__box guest-info__box--list">
			<ul class="guest-list">
			
				<?php foreach($guestList as $guest){ ?>
				
					<li class="guest-list__person">
						<?php echo "<div> <b>ID:</b>" . $guest["id"] . "</div>"; ?>
						<?php echo "<div> <b>Name:</b> " . $guest["name"] . "</div>"; ?>
						<?php echo "<div> <b>Guests:</b> " . $guest["total_guest"] . "</div>"; ?>
						<button class="btn btn--delete"> <a <?php echo 'href="/babyshower/delete.php?id=' . $guest['id'] . '"'; ?> > Delete </a></button>
						<button class=" btn btn--edit"> <a <?php echo 'href="/babyshower/edit.php?id=' . $guest['id'] . '"'; ?> > Edit </a></button>
					</li>		
					
				<?php } ?>
				
			</ul>
		</div>
		
		<?php } ?>
		
	</div>
</div>

<?php include ("inc/footer.php");?>