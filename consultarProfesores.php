<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Encuesta Nutricional</title>

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
        //Incluimos el encabezado de la pagina con los datos y validacion de la sesión
        include('encabezado.php');
        //Validamos el tipo de usuario que vera la pagina
        include("aux php/validarAdministrador.php");
      ?>

      <section class="container">
        <br clear="all"><br><br><br><br>
<h1 align=center>Consultar Profesores</h1>

  <div class="form-group row alert alert-success col-xs-12">
            <label for="profesor" class="control-label col-xs-1">Profesor:</label>
            <div class="col-xs-5 col-md-8">
              <input class="form-control" type="text" id="profesor" name="profesor" placeholder="Ingrese el nombre del profesor" onKeyUp="buscarProfesor();">
            </div>
          </div>
   
	<div class="table-responsive">
    <div class="alert-info col-sm-6" id="infoResultados"></div>
			<table class="table table-hover table-striped" id="tabla">
				
				 <thead class="thead-inverse">
					<th >Id</th><th>Nombre</th><th>Telefono</th><th>Correo</th><th>Usuario</th><th>Contraseña</th><th>Editar</th>
				</thead>
					
          <tbody id="contenidoTabla">
				
           </tbody>
					
		</table>
</div>


<!-- Modal -->
<div class='modal' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Editar Datos</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <form action='index.html'>
      <div class='modal-body'>
          <div class='form-group'>
            <label for='nombre'>Nombre:</label>
            <input class='form-control' type='text' holdplace='Aqui esta su reinita'>
          </div>
        
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
        <input type='submit' class='btn btn-primary' value='Guardar'>
      </div>
      </form>
    </div>
  </div>
</div>

    </section>
  

  

  
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
    <script src="js/Custom/jsConsultarProfesor.js"></script>
    <script type="text/javascript" src="js/validacion.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

      <!--Estructura del modal-->   
      <div class="modal fade" id="ModalEditarProfesor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                
                <div class="modal-header">           
                      <h4 class="modal-title" id="myModalLabel">Editar Profesor</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      
                  </div>
                  <form id="formularioEditarProfesor">
                  <div class="modal-body">
                     <!--Div donde se llenara el resultado de la operación--> 
                                       
                      <div id="contenidoResultado">
                      </div>
                      <!--Div donde se llenara el modal con los datos del alimento-->
                                           
                      <div id="contenidoModal">
                      </div>
                      
                            
                  </div>
                  <div class="modal-footer col-md-12" id="operacionesModal">
                   
                     
                  </div> 
                   </form>
              </div>
          </div>
      </div>

  </body>
</html>