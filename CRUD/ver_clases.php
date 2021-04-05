

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>EJEMPLO MAQUETACIÓN EN HTML5</title>

<link rel="stylesheet" href="style.css">	
 <link href="https://file.myfontastic.com/SQCTrQzt324xtfzLYQHv3c/icons.css" rel="stylesheet">
  <link href="https://file.myfontastic.com/M2NtntLYDwb9VjaUFXnWTU/icons.css" rel="stylesheet">
	
</head>

<header>
  <nav class="menuCSS3">
    <ul>
      <li><a href="cargar_clases.php">Cargar regristro</a></li>
      <li><a href="ver_clases.php">Ver regristro</a></li>
      <li><a href="borrar_clases.php">Eliminar regristro</a></li>
     
    </ul> 

       
        <div class="header">

             <h1>Administrador de regristros</h1>
          <p></p>
</div>


  </nav>


       </header>

<body>
             <section>
         <article>
                      
           
               

         </article>
      </section>




      <aside>
        <h3></h3>
       

                     
      </aside>


   
   

</body>
</html>

<?php



 //crear conexion a la base de datos
$conexion = mysqli_connect ("localhost", "root", "","phpintermedio");
if(!$conexion){
	echo "Error al conectar con la base de datos";
	}
else {
  echo "Conectado a la base de datos";

};


$consulta_bd = mysqli_query ($conexion, "SELECT * FROM clases" );

while ($mostrar_datos = mysqli_fetch_assoc ($consulta_bd)) {

?>
<div class="caja_clases">

<h2><?php echo $mostrar_datos['unidad']. " " . $mostrar_datos['fecha']; ?></h2>

<img src="imagens/<?php echo $mostrar_datos['imagen'];?>">

<p><a href="borrar_clases.php?id=<?php echo $mostrar_datos ['id_clase']; ?>" >Eliminar</a></p>

</div>

<?php

}


?>

<div class="borrar"></div>

