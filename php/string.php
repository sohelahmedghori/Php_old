<?php
//  ---------------- String Function in PHP -------------------
// 	1. strlen() ----- count a string charactor with space
$a = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
echo strlen($a);
echo "<hr >";
// 	2. strrev() ------------- Reverse a string

$a = "i love my india";
echo strrev($a);
echo "<hr >";

//	3. strtoupper()   -------- Convert uppercase

echo strtoupper($a);
echo "<Hr >";

// 	4. strtolower() ------Convert lowercase


//	5. ucwords() ----- upper case first letter of every word
echo ucwords($a);
echo "<Hr />";

//	6. ucfirst() ----- upper case first letter of a string
echo ucfirst($a);
echo "<Hr />";

// 	7. number_format()

$b = 77457811145;
echo $b;
echo "<br />";
echo number_format($b);
echo "<hr >";


//	8. str_repeat()

echo str_repeat("hello world<br >", 10);








?>
