<html>
<body>
<center><h1>DATOS RECABADOS</h1></center>
<?php
$link = mysqli_connect("localhost","root","") or die ("<h2>No se encuentra el servidor </h2>");;
mysqli_select_db($link,'formulario' ) or die ("<h2>Error de la conexión </h2>");
   $nombre = $_REQUEST['nombre'];
   $apellidos = $_REQUEST['apellidos'];
   $telefono = $_REQUEST['telefono'];
   $direccion = $_REQUEST['direccion'];
   $correo = $_REQUEST['correo'];
   $pagina = $_REQUEST['pagina'];
   $marcas = $_REQUEST['marcas'];
   $maquillaje = $_REQUEST['maquillaje'];
   $rifas = $_REQUEST['rifas'];
   $observaciones = $_REQUEST['observaciones'];
   
   $req = (strlen($nombre)*strlen($apellidos)*strlen($telefono) *strlen($direccion)*strlen($correo)*strlen($pagina)*
   strlen($marcas)*strlen($maquillaje)*strlen($rifas)*strlen($observaciones))
   or die ("No se han llenado todos los campos <br><br> <a href='Index.html'>Volver</a>");

mysqli_query($link,"SELECT*FROM encuesta") or die ("<h2>Error de envió </h2>");
 
echo'
<h2>Formulario completo</h2>
<h5>Gracias por tus respuestas</h5>
<a href="Index.html">Volver</a> 
';
?>
</body>
</html>