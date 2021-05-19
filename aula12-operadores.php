<?php

echo "Aula 12 - Operadores";
echo "</br>";
$a = 11; #a - c (1), a - d (-1), a - e (0)
$b = '11';
$c = 10; 
$d = 13;
$e = 11;

$nome = "Sandro Costa Mesquita";
$nome1 = "Pulo";
$nome2 = "Roberto";
$nome3 = "Pedro";

echo $nome1 <=> $nome2;
echo "</br>";
echo $nome1 <=> $nome3;
echo "</br>";

echo "</br>";
echo $a==$b;
echo "</br>";
echo $a==$c;
echo "</br>";

var_dump($a);
echo "</br>";
var_dump($b);
echo "</br>";
var_dump($nome);
echo "</br>";

if($a == $b){
	echo "A é igual a B";
	echo "</br>";
}
else echo "Numeros diferentes";

if ($a === $b) {
	echo "A é igual a B em valor e tipo";
}
else echo "Cara, A pode ate ser igual a B em valor, mas é diferente em tipo";
echo "</br>";

if ($a != $c) {
	echo "A é diferente de C";
	echo "</br>";
}

if($a == $c){
	echo "A é igual a C";
}
else echo "A é diferente mesmo de C";
echo "</br>";

echo "========================";
echo "</br>";

echo $a<=>$c; #1
echo "</br>";

echo $a<=>$d; #-1
echo "</br>";

echo $a<=>$e; #0
echo "</br>";

?>