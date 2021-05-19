<?php

$a = 3;
$b = 7;
$e = 0;
$c = $a + $b;

echo "$c";
echo "</br>";

function add($a, $b)
{ 
	return $a + $b;
}

function sub($a, $b)
{ 
	return $a - $b;
}

echo "$e";
echo "</br>";

echo add(5, 6);
echo "</br>";

$result = sub(34, 10);
echo "$result";


?>