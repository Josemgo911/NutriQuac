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

<body class="paginas-internas">



    <section class="bienvenidos">


        <?php
        //Se incluye el encabezado con la validación y datos de la sesión
        include('encabezado.php'); 
        //pagina disponible solo para el alumno
        include('aux php/validarAlumno.php');
         ?>

            <div class="texto-encabezado text-xs-center">

                <div class="container">
                    <br>
                    <h1 class="display-4">Instrucciones y referencias</h1>
                    <p class="wow bounceIn" data-wow-delay=".3s">¿Cómo llenar la encuesta correctamente?</p>
                    <?php 
                    require_once('Conect.php');
                    /*
                    //Decrypt
                                    function decrypt($string, $key) {
                   $result = '';
                   $string = base64_decode($string);
                   for($i=0; $i<strlen($string); $i++) {
                      $char = substr($string, $i, 1);
                      $keychar = substr($key, ($i % strlen($key))-1, 1);
                      $char = chr(ord($char)-ord($keychar));
                      $result.=$char;
                   }
                   return $result;
                    }

                    $us = decrypt($_GET['us'],"F1Zc134R.#&.");
                    */
                    session_start(); $us=$_SESSION["Id"];
                    
                    $sql="Select * from usuarios where IdUsuario='$us'";
                    $statement = $pdo->prepare($sql);
                    $statement->execute();
                    $results = $statement->fetchAll();

                    foreach($results as $rs)
                      {
                        if ($rs['Respuesta']=="No") {
                       ?>

                    <a href="encuesta.php?ca=Inicio" class="btn btn-primary btn-lg">Iniciar encuesta</a>

                    <?php
                     }else echo "<a href='#' class='btn btn-primary btn-lg'>Encuesta no habilitada</a>"; } ?>


                </div>

            </div>

    </section>


    <section class="ruta p-y-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-sm-right">
                    Inicio » Alumnos

                </div>
            </div>
        </div>
    </section>
    <main class="p-y-1">
        <div class="container">
            <div class="row">
                <article class="col-md-8">
                    <h2>¿Qué es una porción?</h2>

                    <p>Es una unidad de medida de alimentos, bebidas o preparaciones que nos facilitan su consumo y control. Las porciones dependerán de las necesidades de calorías, carbohidratos, proteínas y grasas; las cuales varían de persona a persona o bien, del estado de salud en el que se encuentren.</p>

                    <h2>Algunos consejos</h2>

                    <div id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">

                            <h4 class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#tab-mision"> Medir con el puño </a>

                            </h4>
                            <div id="tab-mision" class="panel-collapse collapse in">
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </p>
                                <p>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                                </p>

                            </div>
                        </div>


                        <div class="panel panel-default">
                            <h4 class="panel-heading">

                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-vision"> Medir con la palma </a>

                            </h4>
                            <div id="tab-vision" class="panel-collapse collapse">
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </p>
                                <p>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                                </p>

                            </div>
                        </div>


                        <div class="panel panel-default">
                            <h4 class="panel-heading">

                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-valores"> Medir un puñado </a>

                            </h4>
                            <div id="tab-valores" class="panel-collapse collapse">
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </p>
                                <p>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                                </p>

                            </div>
                        </div>
                    </div>








                </article>
                <aside class="col-md-4">
                    <img src="images/alumnos-ask.svg" alt="Nosotros">


                </aside>


            </div>
        </div>
    </main>






    <footer class="piedepagina p-y-2" role="contentinfo">
        <div class="container">
            <p>
                ENCUESTA NUTRICIONAL</p>
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
