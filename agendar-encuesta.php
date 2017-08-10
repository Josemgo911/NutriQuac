<?php
header("Content-Type: text/html;charset=utf-8");	
//Conectamos a la base de datos
require_once('Conect.php');


?>
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
        <link href="lib/Datedropper3-master/datedropper.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="lib/timedropper-master/timedropper.css">

        <!-- Owl-->
        <script src="js/jquery.min.js"></script>

        <script src="lib/Datedropper3-master/datedropper.js"></script>
        <script src="lib/timedropper-master/timedropper.js"></script>

        <!-- Libreria Swal -->

        <script src="lib/swal/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="lib/swal/sweetalert.css">
    </head>

    <body class="paginas-internas">



        <section class="bienvenidos">


            <?php 
            include('encabezado.php');
            
            include('aux php/validarSuper.php');
            ?>

            <div class="texto-encabezado text-xs-center">

                <div class="container">
                    <h1 class="display-4">Agendar encuestas</h1>
                    <p class="wow bounceIn" data-wow-delay=".3s">Agenda encuestas estableciendo un intervalo de tiempo limite para responder</p>

                </div>

            </div>

        </section>


        <section class="ruta p-y-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-sm-right">
                        Inicio » Profesores » Agendar encuestas

                    </div>
                </div>
            </div>
        </section>

        <main class="p-y-1 lista-profesores">
            <div class="container">

                <form action="#" class="row form-group-agendar" id="formulario">
                    <div class="col-md-6">
                        <h2 class="m-b-2">Fecha y hora de inicio</h2>

                        <div class="form-group row">
                            <label for="StartDate" class="col-md-4 col-form-label">Fecha</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="StartDate" name="StartDate" placeholder="Fecha de inicio" data-toggle="tooltip" data-placement="top" title="Elija la fecha de inicio" data-lang="es" data-large-mode="true" data-format="Y-m-d" data-lang="es">
                                <script>
                                    $('#StartDate').dateDropper();

                                </script>
                            </div>
                        </div>
                        <!--

                        <div class="form-group row ">
                            <label for="StartTime" class="col-md-4 col-form-label">Hora</label>

                            <div class="col-md-8">
                                <input class="form-control datedroped" type="text" id="StartTime" name="StartTime" placeholder="Hora de inicio" data-toggle="tooltip" data-placement="top" title="Elija la hora de inicio" format="H:mm">
                                <script>
                                    $("#StartTime").timeDropper();

                                </script>
                            </div>
                        </div>


-->





                    </div>
                    <div class="col-md-6">
                        <h2 class="m-b-2">Fecha y hora de finalización</h2>




                        <div class="form-group row">
                            <label for="EndDate" class="col-md-4 col-form-label">Fecha</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="EndDate" name="EndDate" placeholder="Fecha de finalización" data-toggle="tooltip" data-placement="top" title="Elija la fecha de finalización" data-large-mode="true" data-lang="es" data-format="Y-m-d">
                                <script>
                                    $('#EndDate').dateDropper();

                                </script>
                            </div>
                        </div>

                        <!--
                        <div class="form-group row">
                            <label for="EndTime" class="col-md-4 col-form-label">Hora</label>

                            <div class="col-md-8">
                                <input class="form-control datedroped" type="text" id="EndTime" name="EndTime" placeholder="Hora de finalización" data-toggle="tooltip" data-placement="top" title="Elija la hora de finalización" data-lang="es">
                                <script>
                                    $("#EndTime").timeDropper();

                                </script>
                            </div>
                        </div>

-->
                    </div>
                    <div class="col-md-12" id="agendar">

                        <input type="submit" name="acceso-profesor" class="btn btn-primary btn-lg" value="Agendar" id="btn_enviar">
                    </div>
                </form>

            </div>
        </main>






        <footer class="piedepagina p-y-2" role="contentinfo">
            <div class="container">
                <p>
                    ENCUESTA NUTRICIONAL</p>
                <ul class="redes-sociales">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                    <li><a href="https://www.youtube.com/?spfreload=10"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
                </ul>

            </div>

        </footer>

        <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>


        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="js/wow.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/sitio.js"></script>
        <script src="js/tether.js"></script>
        <script src="js/bootstrap.js"></script>

        <script src="js/Custom/agendar-encuesta-form.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    </body>

    </html>
