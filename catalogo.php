<?php
include_once 'php/conexión.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/EstiloCatalogo.css" rel="stylesheet" href="/css/master.css">
    <link rel="shortcut icon" type="Images/logo_patisseria.png" href="Images/logo_patisseria.png">
    <link  rel="stylesheet" href="css/bootstrap.min.css">
    <title> Catálogo</title>
  </head>
  <body>
    <header>
        <div class="container">
      <h1>
        <section class="main row">
          <nav class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="Logo"><a href="pagina_principal.html"><input type="image", img src="Images/logo_patisseria.png" class="d-block w-100"></a></div>
          </nav>
          <nav class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="3500">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="Images/1-1.jpg" class="d-block w-100" alt="Primera">
                  <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                  <img src="Images/2-2.jpg" class="d-block w-100" alt="Segunda">
                  <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                  <img src="Images/3-3.jpg" class="d-block w-100" alt="Tercera">
                  <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </nav>
          </section>
          </h1>
        </div>
      </header>
      <div class="container">
        <section class="main row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand">Menú</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="pagina_principal.html">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="catalogo.php">Catálogo<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="crea_tu_pastel.html">Crea tu Pastel</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="ven_conocenos.html">Conócenos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="contactanos.html">Contáctanos</a>
            </li>


            </ul>
            </div>
            </nav>

          </div>
          </section>
        </div>
        <!--inicion de catalogo y carrito-->

        <div class="container">
          <div class="container">
            <hr>
            <div class="row">
              <div class="col-sm-11 row">
                <main class="col-sm-12 row" >
                  <h5 class="col-sm-12 alert alert-custom text-center">Básicos</h5>
                  <?php
                  $sql="SELECT * from producto WHERE categoria ='Basico'";
                  $result=mysqli_query($mysqli,$sql);
                  while($mostrar=mysqli_fetch_array($result)){
                   ?>
                     <div class="card-img-top col-sm-3 bg-transparent text-center">
                       <div class="card-body" >
                         <?php echo "<img class='img-fluid rounded' src='php/mirar.php?idProducto=".$mostrar["idProducto"]."' alt='imagenpaste' width=200px height=150px >"; ?>
                         <h5 class="alert alert-custom" name="<?php $nombrep ?>"><?php echo $mostrar['nombre'] ?></h5>
                         <p class="alert alert-custom" name="<?php $preciop ?>">$<?php echo $mostrar['precio'] ?></p>
                         <button class='btn btn-primary' id='<?php echo $mostrar['idProducto'] ?>' onclick='agregarCarro(this)' >+</button>
                       </div>
                       </div>
                  <?php
                  }
                  ?>
                </main>
                <main class="col-sm-12 row">
                  <h5 class="col-sm-12 alert alert-custom text-center">Especial</h5>
                  <?php
                  $sql="SELECT * from producto WHERE categoria ='Especial'";
                  $result=mysqli_query($mysqli,$sql);
                  while($mostrar=mysqli_fetch_array($result)){
                   ?>
                     <div class="card-img-top col-sm-3 bg-transparent text-center">
                       <div class="card-body" >
                         <?php echo "<img class='img-fluid rounded' src='php/mirar.php?idProducto=".$mostrar["idProducto"]."' alt='imagenpaste' width=200px height=150px >"; ?>
                         <h5 class="alert alert-custom" name="<?php $nombrep ?>"><?php echo $mostrar['nombre'] ?></h5>
                         <p class="alert alert-custom" name="<?php $preciop ?>">$<?php echo $mostrar['precio'] ?></p>
                         <button class='btn btn-primary' id='<?php echo $mostrar['idProducto'] ?>' onclick='agregarCarro(this)' >+</button>
                       </div>
                       </div>
                  <?php
                  }
                  ?>
                </main>
                <main class="col-sm-12 row">
                  <h5 class="col-sm-12 alert alert-custom text-center">Expresarte</h5>
                  <?php
                  $sql="SELECT * from producto WHERE categoria ='Expresarte'";
                  $result=mysqli_query($mysqli,$sql);
                  while($mostrar=mysqli_fetch_array($result)){
                   ?>
                     <div class="card-img-top col-sm-3 bg-transparent text-center">
                       <div class="card-body" >
                         <?php echo "<img class='img-fluid rounded' src='php/mirar.php?idProducto=".$mostrar["idProducto"]."' alt='imagenpaste' width=200px height=150px >"; ?>
                         <h5 class="alert alert-custom" name="<?php $nombrep ?>"><?php echo $mostrar['nombre'] ?></h5>
                         <p class="alert alert-custom" name="<?php $preciop ?>">$<?php echo $mostrar['precio'] ?></p>
                         <button class='btn btn-primary' id='<?php echo $mostrar['idProducto'] ?>' onclick='agregarCarro(this)' >+</button>
                       </div>
                       </div>
                  <?php
                  }
                  ?>
                </main>
              </div>
              <!--Bloque Modal para el carrito de compras-->

              <div class=" col-sm-1">

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Ver Carrito
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <!--Carrito de compras-->
                  <div class="col-sm-12">
                    <aside class="row">
                      <div class="alert alert-customC col-sm-12 text-center" role="alert">Carrito</div>

                      <ul id="carrito" class="list-group"></ul>

                      <hr>
                      <div class="alert alert-customC col-sm-12 text-right" role="alert">Total: $<span id="total"></span></div>
                    </aside>
                  </div>
                  <!--fin del carrito-->
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Seguir Comprando</button>
                    <button type="submit" class="btn btn-primary">Pagar</button>
                  </div>
                  </div>
                  </div>
                  </div>
              </div>
            </div>

      </div>
        </div>

        <!--fin de ocupacion-->
        <footer>
          <div class="container">
        <section class="main row">
          <nav class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="Face"><img src="Images/logo_face.png" class="d-block w-100" ></div>
            <div class="Insta"><img src="Images/Insta.png" class="d-block w-100" ></div>
            <div class="Tweet"><img src="Images/tweet.png" class="d-block w-100" ></div>
          </nav>
          <div class="col-sm-12 text-right">
            <a type="button" class="btn btn-secondary" name="button" href="php/index.php">Admin</A>
          </div>
        </section>
      </div>
      </footer>
      <script type="text/javascript">
      //generar un json a partir de una consulta
      <?php
      //generamos la consulta
      $sql="SELECT * from producto WHERE categoria ='Basico'";
      $sqle="SELECT * from producto WHERE categoria ='Especial'";
      $sqls="SELECT * from producto WHERE categoria ='Expresarte'";
      mysqli_set_charset($mysqli, "utf8"); //formato de datos utf8

      if(!$result = mysqli_query($mysqli, $sql )) die();

      $productos = array(); //creamos un array

      while($row = mysqli_fetch_array($result))
      {
          $id=$row['idProducto'];
          $nombre=$row['nombre'];
          $precio=$row['precio'];

          $productos[] = array('id'=> $id, 'nombre'=> $nombre, 'precio'=> $precio, 'cantidad'=>0);

      }
      if(!$resulte = mysqli_query($mysqli, $sqle )) die();

      $productose = array(); //creamos un array

      while($row = mysqli_fetch_array($resulte))
      {
          $id=$row['idProducto'];
          $nombre=$row['nombre'];
          $precio=$row['precio'];

          $productose[] = array('id'=> $id, 'nombre'=> $nombre, 'precio'=> $precio, 'cantidad'=>0);

      }
      if(!$results = mysqli_query($mysqli, $sqls )) die();

      $productoss = array(); //creamos un array

      while($row = mysqli_fetch_array($results))
      {
          $id=$row['idProducto'];
          $nombre=$row['nombre'];
          $precio=$row['precio'];

          $productoss[] = array('id'=> $id, 'nombre'=> $nombre, 'precio'=> $precio, 'cantidad'=>0);

      }
      /*
      //desconectamos la base de datos
      $close = mysqli_close($mysqli)
      or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
      //Creamos el JSON
      $json_string = json_encode($productos);
      //Si queremos crear un archivo json, sería de esta forma:
      $file = '../js/Prod_Basico.json';
      file_put_contents($file, $json_string);
      */
      ?>
    </script>
      <script type="text/javascript">

      //almacenar consulta anterior en caché
      var carroSinRepetidosb = eval(<?php echo json_encode($productos); ?>);
      var carroSinRepetidose = eval(<?php echo json_encode($productose); ?>);
      var carroSinRepetidoss = eval(<?php echo json_encode($productoss); ?>);
      //alert(carroSinRepetidosb[4].cantidad);
      var listaCarro=document.getElementById("carrito");
      var spTotal=document.getElementById("total");

      function agregarCarro(tmp_this) {
        //alert("id "+tmp_this.id);
        if(tmp_this.id>=1 && tmp_this.id<=6){
          carroSinRepetidosb[(tmp_this.id-1)].cantidad++;
            }
        if(tmp_this.id>=7 && tmp_this.id<=12){
          carroSinRepetidose[(tmp_this.id-7)].cantidad++;}
        if(tmp_this.id>=13 && tmp_this.id<=20){
          carroSinRepetidoss[(tmp_this.id-13)].cantidad++;}

        calcularTotal();
        mostrarEnCarro();
      }
      //calcular total
      function calcularTotal(){
        var elTotal = 0;
        for(var p of carroSinRepetidosb){
          elTotal += (p.precio * p.cantidad);
        }
        for(var p of carroSinRepetidose){
          elTotal += (p.precio * p.cantidad);
        }
        for(var p of carroSinRepetidoss){
          elTotal += (p.precio * p.cantidad);
        }
        //alert("el total es " + elTotal);
        spTotal.textContent = elTotal;
      }
      //función de texto en Aside
      function mostrarEnCarro(){
        listaCarro.textContent="";
        listaCarro.name="lista"
        for(var objP of carroSinRepetidosb){
          if(objP.cantidad > 0){
            var nodoProductoEnCarro = document.createElement("li");
            nodoProductoEnCarro.classList.add("list-group-item","text-right","mx-2");
            nodoProductoEnCarro.textContent =objP.cantidad + "-" + objP.nombre + "- $" + objP.precio;
            nodoProductoEnCarro.name="lista";

            var elBoton = document.createElement("button");
            elBoton.classList.add("btn","btn-danger", "mx-5");
            elBoton.textContent = "X";
            elBoton.setAttribute("item", objP.id);
            elBoton.addEventListener("click", borrarcroductoencarro);
            nodoProductoEnCarro.appendChild(elBoton);

            listaCarro.appendChild(nodoProductoEnCarro);
          }
        }
        for(var objP of carroSinRepetidose){
          if(objP.cantidad > 0){
            var nodoProductoEnCarro = document.createElement("li");
            nodoProductoEnCarro.classList.add("list-group-item","text-right","mx-2");
            nodoProductoEnCarro.textContent = objP.cantidad + "-" + objP.nombre + "- $" + objP.precio;

            var elBoton = document.createElement("button");
            elBoton.classList.add("btn","btn-danger", "mx-5");
            elBoton.textContent = "X";
            elBoton.setAttribute("item", objP.id);
            elBoton.addEventListener("click", borrarcroductoencarro);
            nodoProductoEnCarro.appendChild(elBoton)

            listaCarro.appendChild(nodoProductoEnCarro);
          }
        }
        for(var objP of carroSinRepetidoss){
          if(objP.cantidad > 0){
            var nodoProductoEnCarro = document.createElement("li");
            nodoProductoEnCarro.classList.add("list-group-item","text-right","mx-2");
            nodoProductoEnCarro.textContent = objP.cantidad + "-" + objP.nombre + "- $" + objP.precio;

            var elBoton = document.createElement("button");
            elBoton.classList.add("btn","btn-danger", "mx-5");
            elBoton.textContent = "X";
            elBoton.setAttribute("item", objP.id);
            elBoton.addEventListener("click", borrarcroductoencarro);
            nodoProductoEnCarro.appendChild(elBoton)

            listaCarro.appendChild(nodoProductoEnCarro);
          }
        }
      }
      function borrarcroductoencarro(tmp_this) {
        if(tmp_this.item>=1 && tmp_this.item<=6){
          carroSinRepetidosb[(tmp_this.item-1)].cantidad--;
            }
        if(this.getAttribute("item")>=1 && this.getAttribute("item")<=6){
          carroSinRepetidosb[(this.getAttribute("item")-1)].cantidad--;}
        if(this.getAttribute("item")>=7 && this.getAttribute("item")<=13){
          carroSinRepetidose[(this.getAttribute("item")-7)].cantidad--;}
        if(this.getAttribute("item")>=14 && this.getAttribute("item")<=20){
          carroSinRepetidoss[(this.getAttribute("item")-14)].cantidad--;}
        calcularTotal();
        mostrarEnCarro();
      }
      </script>
      <script src="js/Jquery.js" type="text/javascript">
      </script>
      <script src="js/bootstrap.min.js" type="text/javascript">
      </script>
      <script src="js/Prod_Basico.json" type="text/javascript"></script>
      <!--<script src="js/conductacarrito.js" type="text/javascript"></script>-->
  </body>
</html>
