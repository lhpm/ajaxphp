<?php

sleep(1);

$num2 = $_POST["num2"];
$num1 = $_POST["num1"];

$suma = $num1+$num2;

	$res = "ok";
	$msn = "SUMADO";
	$datos[] = array("res"=>$res, "msn"=>$msn);
	echo json_encode($datos);

if ($suma > 10) {
	echo "¡La suma es mayor de 10.";
	echo "<p>";
	echo "¡Lo tengo! la suma es... ".$suma;
	exit();
}

if ( !is_numeric($suma) ) {
	echo "Estás intentando enredarme ¡Esto no es un número!";
	exit();
}

$opcion = $_POST["o"];
	echo $opcion;

echo $est = $_POST["est"];

if($opcion=="LISTA"){
	echo "opcion";

	echo $opcion;

echo $est = $_POST["est"];
}



?>