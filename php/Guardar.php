<?php
//Conexión a nuestra BD
$mysqli = new mysqli ("MYSQL5021.site4now.net", "a53efa_lapatti", "patopatoso2", "db_a53efa_lapatti");
if ($mysqli -> connect_errno)  {
  echo "fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
}else{
  if (isset($_POST["ID"], $_POST["Nombre"], $_POST["Precio"], $_POST["Cantidad"], $_POST["Relleno"], $_POST["Adorno"], $_POST["Personas"], $_POST["categoria"]) and $_POST["ID"]!="" and $_POST["Nombre"]!="" and $_POST["Precio"]!="" and $_POST["Cantidad"]!="" and $_POST["Relleno"]!="" and $_POST["Adorno"]!="" and $_POST["Personas"]!=""and $_POST["categoria"]!=""){
    //Declaración de variables locales
    $ID = $_POST["ID"];
    $Nombre = $_POST["Nombre"];
    $Precio = $_POST["Precio"];
    $Adorno = $_POST["Adorno"];
    $Relleno = $_POST["Relleno"];
    $Personas = $_POST["Personas"];
    $Cantidad = $_POST["Cantidad"];
    $Categoria = $_POST["categoria"];

    //Inserttar Imagen
    if(isset($_POST["Guardar"])){
        $check = getimagesize($_FILES["Imagen"]["tmp_name"]);
        if($check !== false){
            $Imagen = $_FILES['Imagen']['tmp_name'];
            $imgContent = addslashes(file_get_contents($Imagen));

            //Variable para almacenar la inserción
            $Guardar = !$mysqli -> query("INSERT INTO producto (IdProducto, nombre, precio, tipoadorno, tipoRelleno, numPersonas, existencia, imagen, categoria) VALUES
            ('$ID','$Nombre','$Precio','$Adorno','$Relleno','$Personas','$Cantidad', '$imgContent', '$Categoria')");
            if($Guardar){
                echo "File uploaded successfully.";
                include_once '../form1.html';
            }else{
                echo "File upload failed, please try again.";
                include_once '../form1.html';
            }
        }else{
            echo "Please select an image file to upload.";
            include_once '../form1.html';
        }
    }

    }
    else {
    print '<p>Por favor, complete el <a href="../form1.html">formulario</a></p>';
    }
}
//Validar que las variables existan y contengan un valor

 ?>
