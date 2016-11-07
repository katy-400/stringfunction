<html> <h3> addslashes </h3> </html>

<?php
	$str = "Is your name O'Reilly?";

	// Outputs: Is your name O\'Reilly?
	echo addslashes($str);
?>

<html> <h3> chr </h3> </html>

<?php	
	echo chr(-159), chr(833), PHP_EOL;
?>

<html> <h3> chunk_split </h3> </html>

<?php
	// format $data using RFC 2045 semantics
	$new_string = chunk_split(base64_encode($data));
?>


<html> <h3> count_chars </h3> </html>

<?php	
	$data = "My name Starkesha.";

 	foreach (count_chars($data, 1) as $i => $val) {
    		echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
    }
?>

<html> <h3> explode </h3> </html>

<?php
  // Example 1
  $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
  $pieces = explode(" ", $pizza);
  echo $pieces[0]; // piece1
  echo $pieces[1]; // piece2
?>

<html> <h3> htmlentities </h3> </html>

<html> <h3> htmlspecialchars_decode </h3> </html>

<html> <h3> implode </h3> </html>

<html> <h3> md5 </h3> </html>

<html> <h3> rtrim </h3> </html>

<html> <h3> str_getcsv </h3> </html>

<html> <h3> strip_tags </h3> </html>

<html> <h3> strpos </h3> </html>

<html> <h3> string length function </h3> </html>
