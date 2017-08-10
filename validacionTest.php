<html>
<head>
	 <title>Test Validación</title>
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
    <style type="text/css">
       .error {
       	content: "Capítulo ";
       	color: #f00;
       }
    </style>
</head>


<body>
	<div class="container">
		<h1 class="text-center">Validar Campos</h1>

		<form id="register" method="post" >
		<input type="text" name="Nombre" id="Nombre" class="form-control required" placeholder="Ingrese su Nombre">
		<input type="text" name="Apellido_uno" class="form-control" placeholder="Ingrese su primer apellido">
		<button class="btn btn-primary" type="submit">Enviar Datos</button>
		</form>
		
	</div>	

</body>

   <script src="js/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>    
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/sitio.js"></script>
    <script src="js/tether.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validacion.js"

type="text/javascript"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$("#register").validate();
	alert("Se cargo con exito");
})
</script>

</html>