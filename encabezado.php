<style type="text/css">
    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: 0.5rem 0;
        margin: 0.125rem 0 0;
        font-size: 1rem;
        color: #292b2c;
        text-align: left;
        list-style: none;
        background-color: #ef5350;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 0.25rem;
    }
    
    #menu-principal ul li a.desactive {
        color: #ffffff;
        border-bottom: 0px solid;
    }
    
    #menu-principal ul li a.desactive:hover {
        color: #ef5350;
        border-bottom: 0px solid;
    }
    
    .dropdown-header {
        display: block;
        padding: 0.5rem 1.5rem;
        margin-bottom: 0;
        font-size: 0.875rem;
        color: #000000;
        white-space: nowrap;
    }

</style>

<header class="encabezado fixed-top " role="banner" id="encabezado">

    <?php
        //background-color: #ef5350;
        //Se guardan en variables los datos de la sesion 
        session_start();
        $TipoUsuario=$_SESSION['TipoUsuario'];
        $Usuario=$_SESSION['Usuario'];
        $IdUsuario=$_SESSION['Id'];

        //Variable del campo en el que se dio click
            //Si la pagina no contiene esta variable se redirige al login
            //El login verifica el tipo de sesion y redirige a la pagina de inicio de la sesion con la varible de campo
        $Campo=$_GET['ca'];
        if ($Campo=="") {
            header("location: index.php");
        }
        if (!$TipoUsuario) {
            $_SESSION['TipoUsuario']="";
            $_SESSION['Usuario']="";

            //Se redirigue al Login
            header("location: index.php"); 
        }
     ?>
        <div class="container">
            <div class="col-sm-4">
                <a href="index.php" class="logo">
                    <img src="images/pie-logo.svg" alt="logotipo">
                </a>
            </div>
            <div class="col-sm-8">
                <p class="text-right">
                    <?php echo $TipoUsuario.": ".$_SESSION['Nombre']; ?>
                </p>
            </div>

            <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>


            <nav id="menu-principal" class="collapse">
                <ul>
                    <!-- >Se valida el tipo de secion para mostrar las opciones y el campo activo<-->
                    <?php 
                            //Inicio para cualquier tipo de sesión
                            if ($Campo=="Inicio") {
                                        echo "<li class='active'><a href='index.php'>Inicio</a></li>";
                                    }else echo "<li><a href='index.php'>Inicio</a></li>";

                            //Tipos de Sesión
                            switch ($TipoUsuario) {
                                //Menu del Administrador
                                case 'Administrador':
                                    //Campo Pacientes                              
                                    if ($Campo=="Pacientes") {
                                        echo "<li class='active'>";}
                                        else echo "<li class=''>";
                                            //Subitems
                                            echo    "<div class='dropdown open'>
                                                    <a href='' class='dropdown-toggle' id='dropdownMenuAdmin' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Pacientes
                                                    </a>
                                                    <div class='dropdown-menu' id='drop'>
                                                        <h6 class='dropdown-header'>Registrar y consultar Pacientes.</h6>
                                                        <a class='dropdown-item desactive' href='registrarAlumnoAdmin.php?ca=Pacientes'>Registrar Paciente</a>
                                                        <a class='dropdown-item desactive' href='consultarAlumnosAdmin.php?ca=Pacientes&pagina=1'>Consultar Pacientes</a>
                                                    </div>
                                                </div>
                                             </li>";
                                    //Campo Profesores                             
                                    if ($Campo=="Profesores") {
                                        echo "<li class='active'>";}
                                        else echo "<li class=''>";
                                            //Subitems
                                              echo  "<div class='dropdown open'>
                                                    <a href='' class='dropdown-toggle' id='dropdownMenuAdmin' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Profesores
                                                    </a>
                                                    <div class='dropdown-menu' id='drop'>
                                                        <h6 class='dropdown-header'>Registrar y consultar profesores.</h6>
                                                        <a class='dropdown-item desactive' href='registrarProfesor.php?ca=Profesores'>Registrar Profesor</a>
                                                        <a class='dropdown-item desactive' href='consultarProfesores.php?ca=Profesores'>Consultar Profesores</a>
                                                    </div>
                                                </div>
                                             </li>";
                                        //Campo Alimentos
                                        if ($Campo=="Alimentos") {
                                        echo "<li class='active'>";
                                        }else echo "<li class=''>";
                                            //Subitems
                                            echo    "<div class='dropdown open'>
                                                    <a href='' class='dropdown-toggle' id='dropdownMenuAdmin' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Alimentos
                                                    </a>
                                                    <div class='dropdown-menu' id='drop'>
                                                        <h6 class='dropdown-header'>Registrar y consultar alimentos.</h6>
                                                        <a class='dropdown-item desactive' href='registrarAlimento.php?ca=Alimentos'>Registrar Alimento</a>
                                                        <a class='dropdown-item desactive' href='consultarAlimentos.php?ca=Alimentos'>Consultar Alimentos</a>
                                                        <h6 class='dropdown-header'>Registrar y consultar Grupos y Origenes.</h6>
                                                        <a class='dropdown-item desactive' href='gruposAlimento.php?ca=Alimentos'>Grupos Alimenticios</a>
                                                        <a class='dropdown-item desactive' href='origenesAlimentos.php?ca=Alimentos'>Origenes Alimenticios</a>
                                                        <h6 class='dropdown-header'>Consultar Registros Oficiales de la USDA.</h6>
                                                        <a class='dropdown-item desactive' href='consultarUSDA2.php?ca=Alimentos&pagina=1'>USDA</a>
                                                    </div>
                                                </div>
                                             </li>";

                                       //Campo de Encuestas            
                                    if ($Campo=="Encuestas") {
                                        ?>

                    <li class="active">
                        <?php
                                    }else{
                                        ?>
                            <li class="">

                                <?php
                                    }
                                    ?>

                                    <div class="dropdown open">
                                        <a href='' class="dropdown-toggle" id="dropdownMenuAdmin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Encuestas</a>
                                        <div class="dropdown-menu" id="drop">
                                            <h6 class="dropdown-header">Realizar..</h6>
                                            <a class="dropdown-item desactive" href="agendar-encuesta.php?ca=Encuestas">Agendar encuesta</a>
                                            <a class="dropdown-item desactive" href="consultar-encuestas.php?ca=Encuestas">Consultar encuestas</a>
                                        </div>
                                    </div>
                            </li>

                            <?php
                                
                                break;


                                //Menu del Profesor
                                case 'Profesor':
                                    //Campo Pacientes                              
                                    if ($Campo=="Pacientes") {
                                        echo "<li class='active'>";}
                                        else{ echo "<li class=''>";}
                                            //Subitems
                                               echo "<div class='dropdown open'>
                                                    <a href='' class='dropdown-toggle' id='dropdownMenuAdmin' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Pacientes
                                                    </a>
                                                    <div class='dropdown-menu' id='drop'>
                                                        <h6 class='dropdown-header'>Realizar..</h6>
                                                        <a class='dropdown-item desactive' href='registrarAlumno.php?ca=Pacientes'>Registrar Paciente</a>
                                                        <a class='dropdown-item desactive' href='consultarAlumnos.php?ca=Pacientes&pagina=1'>Consultar Pacientes</a>
                                                    </div>
                                                </div>
                                             </li>";

                                    
                                    
                                    //Campo de Encuestas            
                                    if ($Campo=="Encuestas") {
                                        ?>

                                <li class="active">
                                    <?php
                                    }else{
                                        ?>
                                        <li class="">

                                            <?php
                                    }
                                    ?>

                                                <div class="dropdown open">
                                                    <a href='' class="dropdown-toggle" id="dropdownMenuAdmin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Encuestas</a>
                                                    <div class="dropdown-menu" id="drop">
                                                        <h6 class="dropdown-header">Realizar..</h6>
                                                        <a class="dropdown-item desactive" href="agendar-encuesta.php?ca=Encuestas">Agendar encuesta</a>
                                                        <a class="dropdown-item desactive" href="consultar-encuestas.php?ca=Encuestas">Consultar encuestas</a>
                                                    </div>
                                                </div>
                                        </li>

                                        <?php
                                
                                break;

                                default:
                                    # code...
                                    break;
                            }
                         ?>

                                            <li><a href="aux php/cerrarSesion.php">Cerrar Sesión</a></li>

                </ul>
            </nav>

        </div>
</header>
