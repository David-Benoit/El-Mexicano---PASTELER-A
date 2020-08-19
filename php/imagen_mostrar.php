<?php
include_once 'conexión.php';

$result=$mysqli->query("SELECT imagen FROM producto WHERE idProducto=".$_GET["idProducto"]);
if($result){
    $imgData = $result->fetch_assoc();

    //Render image
    header ("Content-type: image/jpg");
    echo $imgData['imagen'];

}else{
    echo 'Image not found...';
}

?>
