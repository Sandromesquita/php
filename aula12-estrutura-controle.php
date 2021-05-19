<?php

echo "Estrutura de controle";
echo "</br>";

$a = 3;
$b = 5;
$c = 6;
$d = 2;

if($a < 1){
	echo "A menor";
	echo "</br>";
}

else if ($b < 1) {
	echo "B menor";
	echo "</br>";
}

else if ($c <= 1) {
	echo "C menor";
	echo "</br>";
}

else if ($d < 1) {
	echo "D menor";
	echo "</br>";
}

else echo "Ninguem atendeu";
echo "</br>";

echo "====================FOR===============";
echo "</br>";

for ($i=0; $i < 10; $i++) { 
	echo "$i";
	echo "</br>";
	if($i==5){
		echo "Achou";
		echo "</br>";
		break;
	}
}

echo "====================WHILE===============";
echo "</br>";

$x = 0;

while ($x <= 10) {
	echo "$x";
	echo "</br>";
	$x++;

}

echo "====================FOREACH COM ARRAY===============";
echo "</br>";

$lista_compras = array("chocolate", "xilito", "energetico", "cafe");

echo $lista_compras[0];
echo "</br>";

echo $lista_compras[3];
echo "</br>";

foreach ($lista_compras as $itens) {
	echo "$itens";echo ", ";
}
echo "</br>";

foreach ($lista_compras as $key => $value) {
	echo "{$key} > {$value}";
	echo "</br>";
}

print_r($lista_compras);
echo "</br>";

echo "====================SWITCH CASE===============";
echo "</br>";

switch ($d) {
	case '1':
		echo "Certo mizeravi";
		break;

	case '2':
		echo "Certo mizeravi";
		break;

	case '3':
		echo "Certo mizeravi";
		break;

	default:
		echo "erro mizeravi";
		break;
}
echo "</br>";
?>