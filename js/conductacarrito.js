//declaración de variables
var spTotal=document.getElementById("total");
var listaCarro=document.getElementById("carrito");
var carroSinRepetidosb=JSON.parse(Prod_Basico);
var carroSinRepetidose = JSON.parse(especiales);
var carroSinRepetidoss = JSON.parse(expresarte);
var productosXMLB = document.getElementById("productosb")
var productosXMLE = document.getElementById("productose" )
var productosXMLS = document.getElementById("productoss" )
//mostrarProductosb();
mostrarProductose();
mostrarProductoss();
function hula(){
  alert("hula");
}
function Datos(tmp_id, tmp_nombre,tmp_precio,tmp_cantidad){
  var obj={
    id:tmp_id,
    nombre:tmp_nombre,
    precio:tmp_precio,
    cantidad:tmp_cantidad
  }
  carroSinRepetidosb.push(obj);
  alert("hula");
}
//Funcions mostrar productos
function mostrarProductosb(){
  var unNodoTitle = document.createElement('h5');
  unNodoTitle.classList.add('col-sm-12', 'alert', 'alert-custom', 'text-center');
  unNodoTitle.textContent = "Básicos";
  productosXMLB.appendChild(unNodoTitle);

  for (var pro of carroSinRepetidosb){
    var unNodo = document.createElement('div');
    unNodo.classList.add('card-img-top', 'col-sm-3', 'bg-transparent', 'text-center');

    var unNodoCardBody = document.createElement('div');
    unNodoCardBody.classList.add('card-body');

    var unNodoTitle = document.createElement('h5');
    unNodoTitle.classList.add('alert', 'alert-custom');
    unNodoTitle.textContent = pro.nombre;
    unNodoTitle.name=pro.nombre;

    var unNodoImagen = document.createElement('img');
    unNodoImagen.classList.add('img-fluid', 'rounded');
    unNodoImagen.setAttribute('src', pro.imagen,);
    unNodoImagen.style.width='200px';
    unNodoImagen.style.height='150px';

    var unNodoPrecio = document.createElement('p');
    unNodoPrecio.classList.add('alert', 'alert-custom');
    unNodoPrecio.textContent = '$' + pro.precio;

    var unNodoBoton = document.createElement('button');
    unNodoBoton.classList.add('btn', 'btn-primary');
    unNodoBoton.textContent = '+';
    unNodoBoton.setAttribute('marcador', pro.id);
    unNodoBoton.addEventListener('click', agregarCarro);


    unNodoCardBody.appendChild(unNodoImagen);
    unNodoCardBody.appendChild(unNodoTitle);
    unNodoCardBody.appendChild(unNodoPrecio);
    unNodoCardBody.appendChild(unNodoBoton);
    unNodo.appendChild(unNodoCardBody);
    productosXMLB.appendChild(unNodo);

  }
}
function mostrarProductose(){
  var unNodoTitle = document.createElement('h5');
  unNodoTitle.classList.add('col-sm-12', 'alert', 'alert-custome', 'text-center');
  unNodoTitle.textContent = "Especiales";
  productosXMLE.appendChild(unNodoTitle);

  for (var pro of carroSinRepetidose){
    var unNodo = document.createElement('div');
    unNodo.classList.add('card-img-top', 'col-sm-3', 'bg-transparent', 'text-center');

    var unNodoCardBody = document.createElement('div');
    unNodoCardBody.classList.add('card-body');

    var unNodoTitle = document.createElement('h5');
    unNodoTitle.classList.add('alert', 'alert-custome');
    unNodoTitle.textContent = pro.nombre;

    var unNodoImagen = document.createElement('img');
    unNodoImagen.classList.add('img-fluid', 'rounded');
    unNodoImagen.setAttribute('src', pro.imagen);
    unNodoImagen.style.width='200px';
    unNodoImagen.style.height='150px';

    var unNodoPrecio = document.createElement('p');
    unNodoPrecio.classList.add('alert', 'alert-custome');
    unNodoPrecio.textContent = '$' + pro.precio;

    var unNodoBoton = document.createElement('button');
    unNodoBoton.classList.add('btn', 'btn-primary');
    unNodoBoton.textContent = '+';
    unNodoBoton.setAttribute('marcador', pro.id);
    unNodoBoton.addEventListener('click', agregarCarro);


    unNodoCardBody.appendChild(unNodoImagen);
    unNodoCardBody.appendChild(unNodoTitle);
    unNodoCardBody.appendChild(unNodoPrecio);
    unNodoCardBody.appendChild(unNodoBoton);
    unNodo.appendChild(unNodoCardBody);
    productosXMLE.appendChild(unNodo);

  }
}
function mostrarProductoss(){
  var unNodoTitle = document.createElement('h5');
  unNodoTitle.classList.add('col-sm-12', 'alert', 'alert-customs', 'text-center');
  unNodoTitle.textContent = "Expresarte";
  productosXMLS.appendChild(unNodoTitle);

  for (var pro of carroSinRepetidoss){
    var unNodo = document.createElement('div');
    unNodo.classList.add('card-img-top', 'col-sm-3', 'bg-transparent', 'text-center');

    var unNodoCardBody = document.createElement('div');
    unNodoCardBody.classList.add('card-body');

    var unNodoTitle = document.createElement('h5');
    unNodoTitle.classList.add('alert', 'alert-customs');
    unNodoTitle.textContent = pro.nombre;

    var unNodoImagen = document.createElement('img');
    unNodoImagen.classList.add('img-fluid', 'rounded');
    unNodoImagen.setAttribute('src', pro.imagen);
    unNodoImagen.style.width='200px';
    unNodoImagen.style.height='150px';

    var unNodoPrecio = document.createElement('p');
    unNodoPrecio.classList.add('alert', 'alert-customs');
    unNodoPrecio.textContent = '$' + pro.precio;

    var unNodoBoton = document.createElement('button');
    unNodoBoton.classList.add('btn', 'btn-primary');
    unNodoBoton.textContent = '+';
    unNodoBoton.setAttribute('marcador', pro.id);
    unNodoBoton.addEventListener('click', agregarCarro);


    unNodoCardBody.appendChild(unNodoImagen);
    unNodoCardBody.appendChild(unNodoTitle);
    unNodoCardBody.appendChild(unNodoPrecio);
    unNodoCardBody.appendChild(unNodoBoton);
    unNodo.appendChild(unNodoCardBody);
    productosXMLS.appendChild(unNodo);

  }
}
//Funcion Agregar carro
function agregarCarro(tmp_this) {
  alert(tmp_this.id);
  if(this.getAttribute("id")>=1 && this.getAttribute("id")<=6){
    carroSinRepetidosb[(this.getAttribute("id")-1)].cantidad++;}
  //if(this.getAttribute("marcador")>=7 && this.getAttribute("marcador")<=12){
    //carroSinRepetidose[(this.getAttribute("marcador")-7)].cantidad++;}
  //if(this.getAttribute("marcador")>=13 && this.getAttribute("marcador")<=20){
    //carroSinRepetidoss[(this.getAttribute("marcador")-13)].cantidad++;}

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
      nodoProductoEnCarro.textContent ="Id:" + objP.id+ "Cantidad:" +objP.cantidad + "Nombre:" + objP.nombre + "$" + objP.precio;
      nodoProductoEnCarro.name="lista";

      var elBoton = document.createElement("button");
      elBoton.classList.add("btn","btn-danger", "mx-5");
      elBoton.textContent = "X";
      elBoton.setAttribute("item", objP.id);
      elBoton.addEventListener("click", borrarcroductoencarro);
      nodoProductoEnCarro.appendChild(elBoton)

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
function borrarcroductoencarro() {
  if(this.getAttribute("item")>=1 && this.getAttribute("item")<=6){
    carroSinRepetidosb[(this.getAttribute("item")-1)].cantidad--;}
  if(this.getAttribute("item")>=7 && this.getAttribute("item")<=13){
    carroSinRepetidose[(this.getAttribute("item")-7)].cantidad--;}
  if(this.getAttribute("item")>=14 && this.getAttribute("item")<=20){
    carroSinRepetidoss[(this.getAttribute("item")-14)].cantidad--;}

  calcularTotal();
  mostrarEnCarro();
}
