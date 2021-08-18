<html>
<body>
<h1> IMAGENES SUBIDAS</h1>
<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'programacionnet';
        
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");

        $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
        if($insert){
            echo "Documento cargado exitosamente.";
        }else{
            echo "Error al cargar el archivo, inténtelo de nuevo.";
        } 
    }else{
        echo "Seleccione un archivo de imagen para cargar.";
    }
}
   echo "<br>";
echo'
<a href="Index.html"> Volver</a> 
';
?>
</body>

</html>