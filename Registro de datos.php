<html>
<body>
<center><h1>REGISTRO DE DATOS</h1></center>
<?php
$link = mysqli_connect("localhost","root","") or die ("<h2>No se encuentra el servidor </h2>");;
mysqli_select_db($link,'registro' ) or die ("<h2>Error de la conexión </h2>");

  $nombre = $_POST['nombre'];
   $gmail = $_POST['gmail'];
   $contraseña = $_POST['contraseña']; 
   
$req = (strlen($nombre)*strlen($gmail)*strlen($contraseña)) or die ("No se han llenado todos los campos <br><br> <a href='Index.html'>Volver</a>");

mysqli_query($link,"SELECT*FROM datos") or die ("<h2>Error de envió </h2>");
 
echo'
<h2>Registro completo</h2>
<h5>Gracias por registrarte en nuestra página web</h5>
<a href="Index.html">Volver</a> 
';
?>
</body>
</html>