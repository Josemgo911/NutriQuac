<?php
include ("conexion.php");
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Programar Encuesta</title>
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
  

 <section>
                        
        <?php
          //Se incluye el encabezado con la validacion y datos de la sesión 
          include('encabezado.php');
          //Se expulsa solo a los alumnos
          include('aux php/validarSuper.php');
         ?>

      </section>
  
        <div class="container">
            <br clear="all"><br><br><br>
            <h1 class="text-center">Programar Encuesta</h1>

            <section class="ruta p-y-1">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-sm-right">
                            Inicio » Alumnos
                        </div>
                    </div>
                </div>
            </section>


            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalNuevaEncuesta" value="boton dos" id="boton dos">Nueva Encuesta</button>
            <br><br>



            <div class="table-responsive">
                 <table class="table table-hover table-striped">
                     <thead class="thead-inverse">             
                        <th>Id</th><th>Paciente</th><th>Fecha</th><th>Detalles</th>
                    </thead>
       
                    <?php 
                        $SQLEncustas=mysql_query("SELECT encuestas.IdEncuesta,usuarios.Nombre,encuestas.Fecha
                        FROM encuestas inner join usuarios on (encuestas.IdUsuario=usuarios.IdUsuario)");
                        while ($datos=mysql_fetch_array($SQLEncustas)) {
                            echo "
                                <tr>
                                    <td>{$datos[0]}</td>
                                    <td>{$datos['Nombre']}</td>
                                    <td>{$datos['Fecha']}</td> 
                                    <td><a class='btn btn-sm btn-info btn-block' href='detallesEncuesta.php?ca=Encuestas&encuesta={$datos[0]}'>Detalles</a></td>
                                </tr>
                            ";
                        }
                     ?>            
                </table>
            </div>
            
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

 <!-- Modal -->
      <div class="modal fade" id="ModalNuevaEncuesta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="aux php/bdAgregarEncuesta.php" method="POST">
                <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Nuevo Examen</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Id Encuesta:</label>
                        <input class="form-control" type="text" id="nombre" name="nombre" disabled="true">
                      </div>
                     
                       <div class="form-group">
                        <label for="tema">Fecha:</label>
                        <input class="form-control" type="date" id="tema" name="tema" holplace="Ingrese un Tema">
                      </div>
                      <div class="form-group">
                        <label for="subtopico">Subtopico:</label>
                        <input class="form-control" type="text" id="subtopico" name="subtopico" holplace="Ingrese un Tema">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <input type="submit" class="btn btn-primary" value="Crear Examen"></button>
                  </div>
                </form>
                  
              </div>
          </div>
      </div>

  </body>
</html>