<?php
// .Save the string as an array into a new variable by splitting each word by space.

$string = "the,cat,jumped,over,the,fence,at,a,speed,never,imagined";  
$str_arr = preg_split ("/\,/", $string);  
print_r($str_arr); 

// 2.Convert each word with three letters of less into uppercase.

$str = "the cat jumped over the fence at a speed never imagined";
$str = strtoupper($str);
echo $str; 

$array = [...];
shuffle($array);

// 3.Get two random words and delete them from the array.

$input = array("The", "cat", "jumped", "over", "the", "fence", "at", "speed", "never", "imaged");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

// 5.Echo the following text: “The text is ‘$finalText’ and it has X words”.

echo "The text is ‘$finalText’ and it has X words";
?>
