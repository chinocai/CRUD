<?php
// traer datos del form
$unidad = $_POST['unidad'];
$fecha  = $_POST['fecha'];

 //crear conexion a la base de datos
$conexion=mysqli_connect ("localhost", "root", "","phpintermedio");
if(!$conexion){
	echo "Error al conectar con la base de datos";
	}
else {
  echo "Conectado a la base de datos";

};

//cargar registros a la base de datos

mysqli_query($conexion, "INSERT INTO clases VALUES (DEFAULT,'$unidad','$fecha')");


mysqli_close($conexion); 


//Redirección del navegador

header("location: ver_clases.php"); /* Redirección del navegador */

?>
