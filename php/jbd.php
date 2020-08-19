<?php
include_once 'conexión.php';
//generamos la consulta
$sql="SELECT * from producto WHERE categoria ='Basico'";
mysqli_set_charset($mysqli, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($mysqli, $sql)) die();

$productos = array(); //creamos un array

while($row = mysqli_fetch_array($result))
{
    $id=$row['idProducto'];
    $nombre=$row['nombre'];
    $precio=$row['precio'];

    $productos[] = array('id'=> $id, 'nombre'=> $nombre, 'precio'=> $precio, 'cantidad'=>0);

}

$datos=array('basicos'=>$productos);

//desconectamos la base de datos
$close = mysqli_close($mysqli)
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


//Creamos el JSON
$json_string = json_encode($datos);

//Si queremos crear un archivo json, sería de esta forma:

$file = '../js/Prod_Basico.json';
file_put_contents($file, $json_string);
?>
