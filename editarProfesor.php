<?php
include ("conexion.php");

$IdProfesor=$_GET['profesor'];
$buscarProfesor=mysql_query("Select * from profesores where IdProfesor='$IdProfesor';");
$profesor=mysql_fetch_array($buscarProfesor);
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Editar datos del Profesor</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.ico">
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
          include('aux php/validarAdministrador.php');
         ?>
  
	      <div class="container">
          <br clear="all">
         <br><br><br><br>
         <h1 align="center">Editar Profesor</h1>

          <form class="" action="aux php/bdEditarProfesor.php" method="POST">
                <div class="form-group row">
                  <?php 
                    echo "<input type='hidden' id='Id' name='Id' value='{$IdProfesor}'>";
                   ?>
                  
                  <label for="nombre" class="control-label col-md-2">Nombre completo:</label>
                  <div class="col-md-10"></html>
                    <?php 
                     echo "<input class='form-control' type='text' id='nombre' name='nombre' placeholder='Nombre Completo' value='{$profesor['Nombre']}'>";
                     ?>
                    
                    <html>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="telefono" class="control-label col-md-2">Telefono:</label>
                  <div class="col-md-10">
                     <?php 
                      echo "<input class='form-control' type='text' id='telefono' name='telefono' placeholder='Ingrese su nueva Telefono' value='{$profesor['Telefono']}'>";
                     ?>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="correo" class="control-label col-md-2">Correo:</label>
                  <div class="col-md-10">
                     <?php 
                      echo "<input class='form-control' type='text' id='correo' name='correo' placeholder='Ingrese su nuevo Correo' value='{$profesor['Correo']}'>";
                     ?>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="usuario" class="control-label col-md-2">Usuario:</label>
                  <div class="col-md-10">
                    <p id="usuario"><?php echo $profesor['Usuario'] ?></p>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="contraseña" class="control-label col-md-2">Contraseña:</label>
                  <div class="col-md-10">
                    <?php 
                      echo "<input class='form-control' type='text' id='contraseña' name='contraseña' placeholder='Ingrese su nueva Contraseña' value='{$profesor['Password']}'>";
                     ?>
                   
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="Tipo" class="control-label col-md-2">Tipo:</label>
                  <div class="col-md-10">
                    <p id="Tipo"><?php echo $profesor['Tipo'] ?></p>
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