<?php
	require 'db.php';
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		 // keep track post values
        $name = $_POST['name'];
        $guests = $_POST['guests'];
		
		//$redFlagWordsArray = array('anal', 'anus', 'arse', 'ass', 'ballsack', 'balls', 'bastard', 'bitch', 'biatch', 'bloody', 'blowjob', 'blow job', 'bollock', 'bollok', 'boner', 'boob', 'bugger', 'bum', 'butt', 'buttplug', 'clitoris', 'cock', 'coon', 'crap', 'cunt', 'damn', 'dick', 'dildo', 'dyke', 'fag', 'feck', 'fellate', 'fellatio', 'felching', 'fuck', 'f u c k', 'fudgepacker', 'fudge packer', 'flange', 'Goddamn', 'God damn', 'hell', 'homo', 'jerk', 'jizz', 'knobend', 'knob end', 'labia', 'lmfao', 'muff', 'nigger', 'nigga', 'omg', 'penis', 'piss', 'poop', 'prick', 'pube', 'pussy', 'queer', 'scrotum', 'sex', 'shit', 's hit', 'sh1t', 'slut', 'smegma', 'spunk', 'tit', 'tosser', 'turd', 'twat', 'vagina', 'wank', 'whore', 'wtf');
		
		// validate input
        $valid = true;
		
		// checks to make sure name field is not empty
		if (empty($name)){
			$errorName = "Please enter you name.";
			$valid = false;
		//} else if ( in_array($name, $redFlagWordsArray)){
			//$redFlagAlertMsg = "You're a " . $name ." !";
			//$valid = false;
		}
		
		// checks to make sure guests field is not empty and is an int
		if (empty($guests) && !is_int($guests)){
			$errorGuest = "Please enter the total number of guest.";
			$valid = false;
		}
		 // checks to make sure $valid is true
		if ($valid){
			
			$sqlCreateQuery = "INSERT INTO guest_list (name, total_guest) VALUES (?, ?)";
			
			try{
				$pdo = Database::connection();
				$insertQuery = $pdo -> prepare($sqlCreateQuery);
				$insertQuery->bindValue (1, $name, PDO::PARAM_STR);
				$insertQuery->bindValue (2, $guests, PDO::PARAM_INT);
				$insertQuery -> execute();
			} catch (Exception $e){
				echo $e->getMessage();
				die();
			}	
		}
	}


	$pageTitle = "compelte";
	include ("inc/header.php");

?>
	<section class="l-comfirm">
		<div class="confirm-info">
			<h1> See you soon <?php echo $name; ?> </h1>
			<h2>Babyshower Information</h2>
			<ul class="confirm-info__date"> 
				<li> 
					<p>Date: April 8, 2017</p>
				</li>
				<li> 
					<p>Time: 1: 00 PM </p>
				</li>
				<li> 
					<p>Location: C. B. Smith Park </p>
				</li>
				<li> 
					<p>Address: 900 N Flamingo Rd, Pembroke Pines, FL 33028</p>
				</li>
			</ul>
		</div>
	</section>
<?php include ("inc/footer.php");?>