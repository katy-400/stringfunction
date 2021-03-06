<html> <h1> String Functions </h1> </html>

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

  
  <?php
    $str = "A 'quote' is <b>bold</b>";
    
    // Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
    echo htmlentities($str);
    
    // Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
    echo htmlentities($str, ENT_QUOTES);
  ?>


<html> <h3> htmlspecialchars_decode </h3> </html>
 
  <?php
    $str = "<p>this -&gt; &quot;</p>\n";
    
    echo htmlspecialchars_decode($str);
    
    // note that here the quotes aren't converted
    echo htmlspecialchars_decode($str, ENT_NOQUOTES);
  ?>


<html> <h3> implode </h3> </html>

  <?php
  
    $array = array('NYBY', 'POOP', 'phone');
    $comma_separated = implode(", ", $array);
    
    echo $comma_separated; // lastname,email,phone
    
    // Empty string when using an empty array:
    var_dump(implode('hello', array())); 
    // string(0) ""
  
  ?>


<html> <h3> md5 </h3> </html>

  <?php
    $str = 'apple';
    
    if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
        echo "Would you like a green or red apple?";
    }
  ?>

<html> <h3> rtrim </h3> </html>


<?php

$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = rtrim($text);
var_dump($trimmed);

$trimmed = rtrim($text, " \t.");
var_dump($trimmed);

$trimmed = rtrim($hello, "Hdle");
var_dump($trimmed);

// trim the ASCII control characters at the end of $binary
// (from 0 to 31 inclusive)
$clean = rtrim($binary, "\x00..\x1F");
var_dump($clean);

?>


<html> <h3> str_getcsv </h3> </html>

  <?php
  
  $csv = array_map('str_getcsv', file('Names.csv'));
  
  ?>

<html> <h3> strip_tags </h3> </html>


  <?php
  $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
  echo strip_tags($text);
  echo "\n";
  
  // Allow <p> and <a>
  echo strip_tags($text, '<p><a>');
  ?>


<html> <h3> strpos </h3> </html>
  
  <?php
  $mystring = 'abc';
  $findme   = 'a';
  $pos = strpos($mystring, $findme);
  
  // Note our use of ===.  Simply == would not work as expected
  // because the position of 'a' was the 0th (first) character.
  if ($pos === false) {
      echo "The string '$findme' was not found in the string '$mystring'";
  } else {
      echo "The string '$findme' was found in the string '$mystring'";
      echo " and exists at position $pos";
  }
  ?>

<html> <h3> string length function </h3> </html>


<?php
$str = 'I am the best';
echo strlen($str); // 6

$str = ' abcdef ';
echo strlen($str); // 7
?>

