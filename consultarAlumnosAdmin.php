
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Consultar Pacientes</title>
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
          include('aux php/validarAdministrador.php');

          include ("conexion.php");//Conexion a la base de datos
          //Senetecia que busca todos los registros
          $Sen="select usuarios.IdUsuario,usuarios.Nombre,usuarios.Usuario,usuarios.Password,profesores.Nombre from usuarios inner join profesores on(usuarios.IdProfesor = profesores.IdProfesor)
          order by usuarios.IdUsuario;";
          $r= mysql_query($Sen);//Resultado de la busqueda
          //Pagina en la que estamos
          $pagina=$_GET['pagina'];
          if (!$pagina) {
            $pagina=1;
            $inicio=o;
          }
          //cantidad de registros
          $total_registros=mysql_num_rows($r);
          //Registros por pagina
          $limite=10;
          //Numero de paginas a crear
          $total_paginas=ceil($total_registros/$limite);
          //Inicio de busqueda para cada pagina
          $inicio=($pagina-1)*$limite;
          //Busqueda paginada
          $SQL_Paginada="select usuarios.IdUsuario,usuarios.Nombre,usuarios.Usuario,usuarios.Password,profesores.Nombre,usuarios.Respuesta from usuarios inner join profesores on(usuarios.IdProfesor = profesores.IdProfesor)
          order by usuarios.IdUsuario limit $inicio,$limite;";
          $rs_paginado=mysql_query($SQL_Paginada);
         ?>

      <section class="container">
        <br clear="all"><br><br><br><br>
        <h1 align="center">Consultar Pacientes</h1>

       <div class="alert alert-success">

          <div class="form-group row">
            <label for="paciente" class="control-label col-xs-1">Paciente:</label>
              <div class="col-xs-5 col-md-10">
                <input class="form-control" type="text" id="paciente" name="paciente" placeholder="Ingrese el nombre del paciente" onKeyUp="buscarPaciente();">
              </div>
            </div>

          <form id="formularioProfesor">
            <div class="form-group row">
              <label for="profesor"  class="control-label col-xs-1">Profesor:</label>
                <div class="col-xs-5 col-md-6">
                  <select name="profesor" id="cmbxProfesor" class='form-control' onChange="auxCons();">
                    <?php 
                      $SQLprofesores=mysql_query("select * from profesores;");
                        echo "<option value='Todos'>Todos</option>";
                      while ($datos=mysql_fetch_array($SQLprofesores)) {
                        echo "<option value={$datos['0']} >{$datos['Nombre']}</option>";
                      }
                     ?>
                  </select>
              </div>
              <label for="cmbxRespuesta" class="control-label col-xs-1">Tipo de Respuesta:</label>
              <div class="col-xs-5 col-md-2">
                <select id="cmbxRespuesta" name="respuesta" class="form-control" onChange="consultarProfe();">
                  <option>Todas</option>
                  <option>Si</option>
                  <option>No</option>
                </select>
              </div>
            </div>
          </form>

          </div>

	<div class="table-responsive">
    <div class="alert-info col-sm-6" id="infoResultados"></div>
			<table class="table table-hover table-striped">
				
				 <thead class="thead-inverse">
  				<tr class="">
  					<th >Id</th><th>Nombre</th><th>Usuario</th><th>Contraseña</th><th>Profesor</th><th>Respuesta</th><th>Editar</th>
  				</tr>
				</thead>

       <tbody id="contenidoTabla">
					
					<?php 
						while($Datos=mysql_fetch_array($rs_paginado)){
              $nombre=$Datos['IdUsuario'];
							echo "
              <tr>
							<td>{$Datos['IdUsuario']}</td>
							<td>{$Datos['1']}</td>
							<td>{$Datos['Usuario']}</td>
							<td>{$Datos['Password']}</td>
              <td>{$Datos['4']}</td>
              <td>{$Datos['Respuesta']}</td>
							<td>
              
              <button data-toggle=modal data-target='#ModalEditarAlimento' class='btn btn-primary' type=button value={$Datos['0']}  id={$Datos['0']}>
              <span class='glyphicon glyphicon-pencil'>Editar</span>
              </button>
              
              </td>
							</tr>"
              ;
						}
					 ?>
       
					</tbody>
				
		</table>
	</div>

     <!--Mostrar paginación-->
    <div id="paginacion" class="text-center alert alert-info">
      <?php 
        //Si hay mas de una pagina a mostrar
        if ($total_paginas > 1) {
          //Si la pagina es diferente de 1 entonces se muestra el boton de Regresar a la anterior
          if ($pagina != 1) {
            echo "<a href='consultarAlumnosAdmin.php?ca=Pacientes&pagina=".($pagina-1)."'>Anterior</a> ";
          }
            //Se muestra el boton de cada pagina
            for ($i=1; $i <= $total_paginas ; $i++) {
              //No se pone referencia a la pagina actual 
              if ($pagina==$i) {
                echo "$pagina ";
              }//Es la referencia de las demas paginas
              else{
                 echo "<a href='consultarAlumnosAdmin.php?ca=Pacientes&pagina=".$i."'>{$i}</a> ";
              }
            }

            //Si no estamos en la ultima pagina mostramos ir a la siguiente pagina
            if ($pagina!=$total_paginas) {
              echo "<a href='consultarAlumnosAdmin.php?ca=Pacientes&pagina=".($pagina+1)."'>Siguiente</a> ";
            }
          
        }
       ?>
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
    <script src="js/Custom/jsConsultarPacientesAdmin.js"></script>
    <script type="text/javascript" src="js/validacion.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    

    <!-- Se obtiene el valor del id del boton con el que se llama al modal -->
   

      <!--Estructura del modal-->   
      <div class="modal fade" id="ModalEditarAlimento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                
                <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Editar Paciente</h4>
                      
                  </div>
                  <div class="modal-body">
                     <!--Div donde se llenara el resultado de la operación--> 
                                       
                      <div id="contenidoResultado">
                      </div>
                      <!--Div donde se llenara el modal con los datos del alimento-->
                      <form id="formularioEditarAlimento">                     
                      <div id="contenidoModal">
                      </div>
                     
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary" id="btnEditarAlimento">Guardar Cambios</button>
                      </form>
                  </div> 
              </div>
          </div>
      </div>

  </body>
</html>