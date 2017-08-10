<?php
include ("conexion.php");
$Sentencia="Select * from alimentos;";
$r= mysql_query("Select * from alimentos;");

$IdAlumno=$_GET['alumno'];
$buscarAlumno=mysql_query("Select * from usuarios where IdUsuario='$IdAlumno';");
$alumno=mysql_fetch_array($buscarAlumno);
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Editar datos del Alumno</title>
   <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
  
      <?php
          //Se incluye el encabezado con la validacion y datos de la sesión 
          include('encabezado.php');
          //Se expulsa solo a los alumnos
          include('aux php/validarSuper.php');
         ?>
 
  
	      <div class="container">
          <br clear="all">
         <br><br><br><br>
         <h1 align="center">Editar Alumno</h1>

          <form class="" action="aux php/bdEditarAlumno.php" method="POST">
                <div class="form-group row">
                  <?php 
                    echo "<input type='hidden' id='Id' name='Id' value='{$IdAlumno}'>";
                   ?>
                  
                  <label for="nombre" class="control-label col-md-2">Nombre completo:</label>
                  <div class="col-md-10"></html>
                    <?php 
                     echo "<input class='form-control' type='text' id='nombre' name='nombre' placeholder='Nombre Completo' value='{$alumno['Nombre']}'>";
                     ?>
                    
                    <html>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="usuario" class="control-label col-md-2">Usuario:</label>
                  <div class="col-md-10">
                    <p id="usuario"><?php echo $alumno['Usuario'] ?></p>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="contraseña" class="control-label col-md-2">Contraseña:</label>
                  <div class="col-md-10">
                    <?php 
                      echo "<input class='form-control' type='text' id='contraseña' name='contraseña' placeholder='Ingrese su nueva Contraseña' value='{$alumno['Password']}'>";
                     ?>
                   
                  </div>
                </div>

                <div class="form-group row">
                  <label for="profesor" class="control-label col-md-2">Profesor Asociado:</label>
                  <div class="col-md-10">
                     <p id='profesor'><?php
                     $r2=mysql_query("select Nombre from profesores where IdProfesor={$alumno['IdProfesor']}");
                     $profe=mysql_fetch_array($r2);
                      echo $profe['Nombre'] ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <div align="center">
                    <input type="submit" class="btn btn-primary" value="Guardar Cambios">
                  </div>
                </div>
          </form>

	     </div>
    
  

  

  
   <footer class="piedepagina p-y-2" role="contentinfo">
        <div class="container">
            <p ><br>ENCUESTA NUTRICIONAL</p>
            <ul class="redes-sociales">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
            </ul>

        </div>

    </footer>

    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>    
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/sitio.js"></script>
    <script src="js/tether.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  </body>
</html>