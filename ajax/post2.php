<?php

$con = mysqli_connect("localhost", "root", "", "mastro");

$opcion = $_POST['opcion'];

echo "OPCION:";
echo $opcion;

$id = $_POST["id"];

echo "ID:";
echo $id;


if($opcion=="LISTA"){

$resul = $_POST["res"];
echo "FILTRO:";
echo $resul;

$ano = $_POST["ano"];
echo $ano;

$consulta = mysqli_query($con, "SELECT * FROM resultados WHERE resultado = '".$resul."' ");
while ($da = $consulta->fetch_assoc()) {

    echo "<li><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' onclick='CRUD('NUEVO','','')'>Nuevo</button>\n";
    echo $da['usuario'] . ' ' . $da['pregunta'] . ' ' . $da['respuesta'] . ' ' . $da['resultado'];
    echo "</a></li>";
}

$consulta->free();
//$conexion->close();

}// FIN IF

if($opcion=="TODOS"){

$resul = $_POST["res"];
echo "FILTRO:";
echo $resul;

$consulta = mysqli_query($con, "SELECT * FROM resultados");
while ($da = $consulta->fetch_assoc()) {
    echo "<li><a href='#'>\n";
    echo $da['usuario'] . ' ' . $da['pregunta'] . ' ' . $da['respuesta'] . ' ' . $da['resultado'];
    echo "</a></li>\n";
}
$consulta->free();

}// FIN IF

else if($opcion=="NUEVO"){

	echo "NUEVO ARTICULO";
	echo $opcion;
	echo $id;
	$resul = $_POST["res"];
	echo $resul;

}



?>