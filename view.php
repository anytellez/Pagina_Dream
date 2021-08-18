<html>
<body>
<?php
if(!empty($_GET['id'])){
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'programacionnet';
    
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }

    $result = $db->query("SELECT image FROM images WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();

        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }
}
?>
</body>

</html>