<?php
	
	if(!empty($_POST)){
		
		 // keep track post values
        $name = $_POST['name'];
        $guests = $_POST['guests'];
		$redFlagWordsArray = array('anal', 'anus', 'arse', 'ass', 'ballsack', 'balls', 'bastard', 'bitch', 'biatch', 'bloody', 'blowjob', 'blow job', 'bollock', 'bollok', 'boner', 'boob', 'bugger', 'bum', 'butt', 'buttplug', 'clitoris', 'cock', 'coon', 'crap', 'cunt', 'damn', 'dick', 'dildo', 'dyke', 'fag', 'feck', 'fellate', 'fellatio', 'felching', 'fuck', 'f u c k', 'fudgepacker', 'fudge packer', 'flange', 'Goddamn', 'God damn', 'hell', 'homo', 'jerk', 'jizz', 'knobend', 'knob end', 'labia', 'lmfao', 'muff', 'nigger', 'nigga', 'omg', 'penis', 'piss', 'poop', 'prick', 'pube', 'pussy', 'queer', 'scrotum', 'sex', 'shit', 's hit', 'sh1t', 'slut', 'smegma', 'spunk', 'tit', 'tosser', 'turd', 'twat', 'vagina', 'wank', 'whore', 'wtf');
		
		// validate input
        $valid = true;
		
		// checks to make sure name field is not empty
		if (empty($name)){
			$errorName = "Please enter you name.";
			$valid = false;
		} else if ( in_array($name, $redFlagWordsArray)){
			$redFlagAlertMsg = "You're a " . $name ." !";
			$valid = false;
		}
		
		// checks to make sure guests field is not empty and is an int
		if (empty($guests) && !is_int($guests)){
			$errorGuest = "Please enter the total number of guest.";
			$valid = false;
		}
		
		if ($valid){
			require_once('db.php');
			
			$sqlCreateQuery = "INSERT INTO guest_list (name, total_guest) VALUES (?, ?)";
			
			try{
				$pdo = Database::connection();
				$creatQuery = $pdo -> prepare($sqlCreateQuery);
				$creatQuery->bindValue (1, $name, PDO::PARAM_STR);
				$creatQuery->bindValue (2, $guests, PDO::PARAM_INT);
				$creatQuery -> exec();
				header("Location: http://eddiesolar.com/babyshower/");
			} catch (Exception $e){
				echo $e->getMessage();
				die();
			}	
		}
	}
	
?>