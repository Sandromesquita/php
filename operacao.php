<?php
include "input.html";

@$a = $_POST["num1"];
@$b = $_POST["num2"];
@$op = $_POST["operacao"];

if(!empty($op)){
	if($op=='+'){
		$c = $a + $b;
	}
	else if($op=='-'){
		$c = $a - $b;
	}
	else if($op=='x'){
		$c = $a * $b;
	}
	else if($op=='/'){
		$c = $a / $b;
	}
	echo "$c";
}



?>