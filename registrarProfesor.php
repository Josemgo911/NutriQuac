<?php
include ("conexion.php");
$Sentencia="Select * from alimentos;";
$r= mysql_query("Select * from alimentos;");
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Registrar Profesor</title>
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
        //Incluimos el encabezado de la pagina con los datos y validacion de la sesión
        include('encabezado.php');
        //Validamos el tipo de usuario que vera la pagina
        include("aux php/validarAdministrador.php");
      ?>
  
	      <div class="container">
          <br clear="all">
         <br><br><br><br>
         <h1 align="center">Registrar Profesor</h1>
         <div id="divInfo">
          </div>

          <form class="text-left" id="formulario" >
                <div class="form-group row">
                  <label for="nombre" class="control-label col-md-2">Nombre completo:</label>
                  <div class="col-md-10">
                    <input class="form-control required" type="text" id="nombre" name="nombre" placeholder="Nombre Completo">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="telefono" class="control-label col-md-2">Teléfono:</label>
                  <div class="col-md-10">
                    <input class="form-control required" type="text" id="telefono" name="telefono" placeholder="Número de Teléfono">
                  </div>
                </div>

                <div class="form-group row">
                      <label for="correo" class="control-label col-md-2">Correo:</label>
                         <div class="col-md-10">
                            <input class="form-control required email" type="text" id="correo" placeholder="Ingrese el Correo" name="correo">
                         </div>          
                </div>

                <div class="form-group row">
                  <label for="usuario" class="control-label col-md-2">Usuario:</label>
                  <div class="col-md-6">
                    <input class="form-control required" type="text" id="usuario" name="usuario" placeholder="Ingrese el nuevo Usuario" onKeyUp="validarUsuario();">
                  </div>
                  
                    <div id="infoUsuario" class="col-md-3"></div>
                  
                </div>

                <div class="form-group row">
                  <label for="contraseña" class="control-label col-md-2">Contraseña:</label>
                  <div class="col-md-10">
                    <input class="form-control required" type="text" id="contraseña" name="contraseña" placeholder="Ingrese su nueva Contraseña">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="tipo" class="control-label col-md-2">Tipo de Usuario:</label>
                  <div class="col-md-10">
                    <select id="tipo" name="tipo" class="form-control required">
                      <option>Profesor</option>
                      <option>Administrador</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div align="center">
                    <button type="submit" class="btn btn-primary" value="Registrar" id="btn_enviar">Registrar</button>
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
    <script src="js/Custom/jsRegistrarProfesor.js"></script>
    <script src="js/validacion.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


  </body>
</html>