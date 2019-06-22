
<?php
#substr()
$output = substr('hello', 1, 3);
$output = substr('hello', -2);


#strlen()
$output = strlen('hello world');


#strpos()
$output = strpos('hello world', 'o');


#strrpos()
$output = strrpos('hello world', 'o');


#trim()
$text = 'Hello World                                  ';
// var_dump($text);

$trimmed = trim($text);
// var_dump($trimmed);

#upper case
$output = strtoupper('hello World');
#lower case
$output = strtolower('hello World');

#ucword() // capitalize every word.
$output = ucwords('hello world');

#str_replace()
$text = 'Hello world';
$output = str_replace('world', 'everyone', $text);

#is_string()
$val = 'hello';
// $output = is_string($val);

$values = [true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0'];

// foreach($values as $value) {
//     if(is_string($value)) {
//         echo "$value is a string<br>";
//     }
// }

#gzcompress() // compress a string.

$string = "lorem ipsum dolor sit amet lorem ipsum dolor sit amet 
lorem ipsum dolor sit amet lorem ipsum dolor sit amet 
lorem ipsum dolor sit amet lorem ipsum dolor sit amet 
lorem ipsum dolor sit amet lorem ipsum dolor sit amet  
lorem ipsum dolor sit amet lorem ipsum dolor sit amet  
lorem ipsum dolor sit amet lorem ipsum dolor sit amet  
lorem ipsum dolor sit amet lorem ipsum dolor sit amet ";

$compressed = gzcompress($string);

$original = gzuncompress($compressed);

echo $original;
?>