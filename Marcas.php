<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dream</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/Tienda Dream.png">

<style>
img{ float: left; margin-left: 1em; margin-bottom: 4em; margin-top: 1.5em;
}
h1{text-align: center; margin-top: 0.5em; font-family:"Baskerville Old Face";font-size:4em;}
.container{font-weight: bold;border-radius: 8px;margin-top: 1em; margin-bottom:1em;padding-bottom: 2em;border: solid 1px black;}
.container-fluid{padding:2em;padding-top:0.5em;}
.container.info{
padding-top: 1em; border-left-style: white;1em;margin-left:7em;margin-right:10em;text-align:center;font-size: 16px;}
echo{text-align:center;font-family: Baskerville Old Face; font-size: 16px;}
body { background-color: #FFFDE7; }
</style>
</head>
<body>
<div class="container-fluid" style="background-color: #FFF8E1">
<img src="img/Tienda Dream.png" width="80" height="80"/>
<h1>TIENDA DREAM</h1>
</div>
<div class="container info" style="background-color:white" >
</br>
<?php
echo "Nuestra tienda cuenta con 6 de las mejores marcas de maquillaje como son:";
   echo "<br>";    echo "<br>";
$string= "1. nyk professional mekeup ";
$a= strtoupper ($string);
echo $a;
   echo "<br>";   echo "<br>";
$a1=   "2. nars cosmetics ";
$b= strtoupper ($a1);
echo $b;
   echo "<br>";   echo "<br>";
$a2= "3. BODDI BROWN COSMETICS boddi brown cosmetics";
$c= strtoupper ($a2);
echo $c;
   echo "<br>";   echo "<br>";
$a3= "4. laura mercier";
$d= strtoupper ($a3);
echo $d;
   echo "<br>";   echo "<br>";
$a4= "5. lancome";
$e= strtoupper ($a4);
echo $e;
   echo "<br>";   echo "<br>";
$a5= "6. urban decay";
$f= strtoupper ($a5);
echo $f;
   echo "<br>";   echo "<br>";
echo "Además de contar con los mejores productos y precios en nuestra tienda. En donde los clientes";
   echo "<br>";   echo "<br>";
 echo "son atendidos de manera atenta sin necesidad de precionarlos por hacer una compra.";
   echo "<br>";   echo "<br>";
 echo "Para conocer un poco de nuestra tienda visita nuestras redes sociales.";
   echo "<br>";   echo "<br>"; 
 $fecha  = date ("j/n/Y H:i");
	print ("$fecha");
   echo "<br>";
?>
</div>
</body>
</html>
