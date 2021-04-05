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

             <h1>Administrador de registros</h1>
          <p></p>
</div>


  </nav>


       </header>

<body>
             <section>
         <article>
             <h2>Cargar datos<h2>
             

          <div class="form-style-5">
                      <form action="insertar_clases.php" method="POST">
              <p>UNIDAD: <input type="text" name="unidad" required placeholder="unidad"/> 
              <p>FECHA: <input type="date" name="fecha" required placeholder="fecha"/>
                        
                 
              <p><input class="btn-danger" type="submit" name="enviar"/></p>
               
            </form>

              


          </div>

              
               

         </article>
      </section>




      <aside>
        <h3></h3>
       

                     
      </aside>


        <!-- Page Footer -->
            <footer



                    class="mt-5 py-4 border-top border-secondary">
                 <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, Sistema creado por <a href="https://www.joseperezrodriguez.com" target="_blank">Jose Perez Rodriguez</a>  todos los derechos reservados </p> 

    
            </footer>
            <!-- End of Page Footer -->  
   

</body>
</html>