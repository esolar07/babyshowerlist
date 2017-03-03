
<?php

	$pageTitle = "guests";
	include ("inc/header.php");
	$pdo = Database::connection();

	// SQL query to pull down all rows
	$sql = "SELECT * FROM guest_list ORDER BY name ASC";
	
	// SQL query to sum up all values of total_guest column
	$totalGuest = "SELECT SUM(total_guest) AS totalcount FROM guest_list";

	try{
		$guests = $pdo->query($sql);
		$totalCount = $pdo->query($totalGuest);
	} catch(Exception $e){
		echo $e->getMessage();
		die();
	}	
	
	// fetches all columns and coumts all rows
	$guestList = $guests -> fetchAll(PDO::FETCH_ASSOC);
	$count = $guests -> rowCount();

	// fetches totalCount row
	$totalCount = $totalCount->fetch(PDO::FETCH_ASSOC);
	
?>

<div class="body-container">
	<h2 class="body-title"> <?php echo ucwords($pageTitle); ?> </h2>
	<div class="guest-info">
		<div class="guest-info__box"> 
		
			<?php 
			/* 
			*  checks if count is not equal to zero
			*  if not, count is displayed
			*  if so, show no one registered message
			*/
			if ($count != 0){ 
			
			?>
			
				<p class="guest-info__count"><?php echo $count ; ?></p>
				<p>have RSVP'd.</p>
			
			<?php } else { ?>
			
				<h1> No one has registered.</h1>
			
			<?php } ?>
			
		</div>

		<div class="guest-info__box"> 
			
			<?php 
			/* 
			*  checks if totalcount is not equal to zero
			*  if not, totalcount is displayed
			*  if so, show no one registered message
			*/
			if ($totalCount["totalcount"] != 0){ 
			?>
				<p>You have a total of </p>
				<p class="guest-info__count"><?php echo $totalCount["totalcount"]; ?></p>
				<p>guests</p>
			<?php } else { ?>
			
				<h1> No one has registered.</h1>
			
			<?php } ?>

		</div>

		<?php 
			// displays guest list if there are ppl registered
			if (!empty($guestList)){
		 ?>
		
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