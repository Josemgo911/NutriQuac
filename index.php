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
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>



    <section class="bienvenidos">
<header class="encabezado fixed-top " role="banner" id="encabezado">
    <?php 
        session_start();

        $TipoUsuario=$_SESSION['TipoUsuario'];
        $Usuario=$_SESSION['Usuario'];

        if ($TipoUsuario=="Alumno") {
            header("location: alumno.php?ca=Inicio");
        }else if ($TipoUsuario=="Profesor") {
            header("location: profesor.php?ca=Inicio");
        }else if ($TipoUsuario=="Administrador") {
            header("location: administrador.php?ca=Inicio");
        }
     ?>
            <div class="container">
                <a href="index.html" class="logo">
                    <img src="images/pie-logo.svg" alt="logotipo">
                </a>


                <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>


                <nav id="menu-principal" class="collapse">
                    <ul>
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a data-toggle="modal" data-target="#ModalAcceso" href="">Ingresar</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </nav>

            </div>
        </header>


        <div class="texto-encabezado text-xl-center">

            <div class="container">
                <h1 class="display-4 wow bounceIn">Encuesta alimentaria</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Se trata de una encuesta acerca de tus hábitos alimenticios la cual esta dividida en grupos relacionadas por el tipo de alimento.</p>
                <a href="contacto.html" class="btn btn-primary btn-lg">Ponte en contacto</a>
            </div>

        </div>
        <div class="flecha-bajar text-xl-center">
            <a data-scroll href="#usda-info"> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>


    </section>

    <section class="usda-info p-y-1" id="usda-info">

        <div class="container">


            <div class="row">

                <div class="col-md-8 col-xl-9 wow bounceIn" data-wow-delay=".3s">
                    <h2 class="h3 text-center text-xl-center font-weight-bold">EL USDA</h2>
                    <p>El Departamento de Agricultura de Estados Unidos (USDA por sus siglas en Inglés) es una organización gubernamental más conocida por su papel en la agricultura estadounidense. Sin embargo, el propósito del USDA va mucho más allá de la regulación de cómo los agricultores hacen negocios.</p>

                    <p>El propósito principal del USDA es asegurarse de que toda la comida estadounidense que se fabrica y consume es segura, nutritiva y sostenible. Así pues, el USDA establece y hace cumplir las regulaciones sobre la manipulación de alimentos, la preparación y la fabricación. Busca encontrar las maneras de hacer cultivos más saludables, tales como el cultivo de ciertos híbridos o la reducción del uso de pesticidas. También trabaja con los agricultores para desarrollar técnicas que les permitan a los agricultores producir cultivos sin perjuicio de una manera eficiente y renovable.</p>

                </div>
                <div class="col-md-4 col-xl-3 wow bounceIn" data-wow-delay=".6s">
                    <img src="images/usda-logo.svg" alt="USDA">
                </div>
            </div>
        </div>

    </section>





    <footer class="piedepagina p-y-2" role="contentinfo">
        <div class="container">
            <p>ENCUESTA NUTRICIONAL</p>
            <ul class="redes-sociales">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
            </ul>

        </div>

    </footer>

    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

    <!-- MODAL´S
    ================================================== -->
    <!-- Modal ALUMNO-->
    <div class="modal fade" id="ModalAcceso" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-alumnolabel">Ingresar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <!-- <p class="text-info">*Comienza por tus apellidos</p> -->
                    <form class="myform container" id="acceso">
                        <div class="form-group row ">

                            <div class="mb-2 mr-sm-2 mb-sm-0">
                            <input type="text" class="form-control " id="userAcceso" placeholder="Usuario" name="userAcceso">
                            </div>

                            <div class="mb-2 mr-sm-2 mb-sm-0">
                            <label class="sr-only" for="inlineFormInput">Password</label>
                            <input type="password" class="form-control" id="passAcceso" placeholder="Contraseña" name="passAcceso">
                            </div>

                        
                        </div>
                        

                        <div class="form-group">
                        <label  for="tipoAcceso">Tipo de Usuario:</label>
                        <select class="form-control mb-2 mr-sm-2 mb-sm-0" id="tipoAcceso" name="tipoAcceso">
                            <option>Alumno</option>
                            <option>Profesor</optgroup>
                            <option>Administrador</option>   
                        </select>
                        </div>
                        

                        <p class="text-danger" id="text-danger-hide" style="margin-top:1rem; display:none;"><strong>!!</strong> Tus datos están incorrectos.</p>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="acceso" class="btn btn-primary" value="Acceder">
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>


                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/sitio.js"></script>
    <script src="js/tether.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/Custom/login.js"></script>


</body>

</html>
