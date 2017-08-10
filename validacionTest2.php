<!DOCTYPE html>
<html>
 <head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="js/validacion.js"></script>
    <script type="text/javascript">
       function validarFormulario(){
          $("#formulario").validate();
       }
       $(document).ready(function(){
          validarFormulario();
       });
    </script>
    <style type="text/css">
       .error {color: #f00;}
    </style>
 </head>
 <body>
    <form id="formulario" action="" >
       <label for="nombre_y_apellido"> (*) Nombre y apellido </label>
       <br />
       <input type="text" name="nombre_y_apellido" id="nombre_y_apellido" class="required" />
       <br />
       <label for="sueldo"> (*) Sueldo estimativo </label>
       <br />
       <input type="text" name="sueldo" id="sueldo" size="5" maxlength="5" class="required number" />
       <br />
       <label for="email"> (*) E-mail </label>
       <br />
       <input type="text" name="email" id="email" class="required email" />
       <br />
       <label for="telefono"> Tel&eacute;fono </label>
       <br />
       <input type="text" name="telefono" id="telefono" />
       <br />
       <label for="cv"> Cv </label>
       <br />
       <textarea rows="5" cols="50" name="cv" id="cv" class="required"></textarea>
       <br />
       (*) Campos requeridos
       <br />
       <input type="submit" id="enviar" value="Enviar" />
       
    </form>
 </body>
</html>