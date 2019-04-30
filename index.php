<?php
// .Save the string as an array into a new variable by splitting each word by space.

$string = "the,cat,jumped,over,the,fence,at,a,speed,never,imagined";  
$str_arr = preg_split ("/\,/", $string);  
print_r($str_arr); 
echo  "<br>";

// 2.Convert each word with three letters of less into uppercase.

$str = "the cat jumped over the fence at a speed never imagined";
$str = strtoupper($str);
echo $str; 
echo "<br>";


// // 3.Get two random words and delete them from the array.

 $input = array("The", "cat", "jumped", "over", "the", "fence", "at", "speed", "never", "imaged");
$rand_keys = array_rand($input, 2);
 echo $input[$rand_keys[0]] . "\n";
 echo $input[$rand_keys[1]] . "\n";
 echo "<br>";


// // 5.Echo the following text: “The text is ‘$finalText’ and it has X words”.
$finalText = "Steven Galvez";
$x = str_word_count($finalText);
echo "The text is $finalText and it has $x words";
echo "<br>";

?>



