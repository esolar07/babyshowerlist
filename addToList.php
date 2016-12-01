<?php

	require_once('db.php');
	
	if(!empty($_POST)){
		
		 // keep track post values
        $name = $_POST['name'];
        $guests = $_POST['guests'];
		$redFlagWordsArray = array('anal', 'anus', 'arse', 'ass', 'ballsack', 'balls', 'bastard', 'bitch', 'biatch', 'bloody', 'blowjob', 'blow job', 'bollock', 'bollok', 'boner', 'boob', 'bugger', 'bum', 'butt', 'buttplug', 'clitoris', 'cock', 'coon', 'crap', 'cunt', 'damn', 'dick', 'dildo', 'dyke', 'fag', 'feck', 'fellate', 'fellatio', 'felching', 'fuck', 'f u c k', 'fudgepacker', 'fudge packer', 'flange', 'Goddamn', 'God damn', 'hell', 'homo', 'jerk', 'jizz', 'knobend', 'knob end',
		'labia', 'lmfao', 'muff', 'nigger', 'nigga', 'omg', 'penis', 'piss', 'poop', 'prick', 'pube', 'pussy', 'queer', 'scrotum', 'sex', 'shit', 's hit', 'sh1t', 'slut', 'smegma', 'spunk', 'tit', 'tosser', 'turd', 'twat', 'vagina', 'wank', 'whore', 'wtf');
		
		// validate input
        $valid = true;
		
		// checks to make sure name field is not empty
		if (empty($name)){
			$valid = false;
		}
		
		// checks to make sure guests field is not empty and is an int
		if (empty($guests) && !is_int($guests)){
			$valid = false;
		}
		
		if 
		
	}
	
?>