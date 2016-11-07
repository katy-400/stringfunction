<?php	
	$data = "My name Starkesha.";

 	foreach (count_chars($data, 1) as $i => $val) {
    		echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
    }
?>

