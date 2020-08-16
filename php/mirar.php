<?php
    //DB details
    $dbHost     = 'MYSQL5021.site4now.net';
    $dbUsername = 'a53efa_lapatti';
    $dbPassword = 'patopatoso2';
    $dbName     = 'db_a53efa_lapatti';

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }

    //Get image data from database
    $result = $db->query("SELECT imagen FROM producto WHERE idProducto=".$_GET["idProducto"]);

    if($result){
        $imgData = $result->fetch_assoc();

        //Render image
        header("Content-type: image/jpg");
        echo $imgData['imagen'];

    }else{
        echo 'Image not found...';
    }

?>
