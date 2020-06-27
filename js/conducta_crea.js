var imgbase = document.getElementById("base")
var nuperson = 0;
var valper =0;
var relleno = "";
var pf =0;
var decorado = "";
var pd=0;

//variables mostrar productos
  var unNodoTitle = document.createElement('h5');
  unNodoTitle.classList.add('col-sm-12', 'alert', 'alert-custom', 'text-center');
  unNodoTitle.textContent = "Base";
  imgbase.appendChild(unNodoTitle);
  var unNodo = document.createElement('div');
  unNodo.classList.add('div','col-sm-12', 'text-center');

  var unNodoCardBody = document.createElement('div');
  unNodoCardBody.classList.add('div');

  var unNodoImagen = document.createElement('img');
  unNodoImagen.classList.add('img-fluid');
  unNodoImagen.setAttribute('src', 'Images/crea/crea1.png',);
  unNodoImagen.style.width='400px';
  unNodoImagen.style.height='400px';

  unNodoCardBody.appendChild(unNodoImagen);
  unNodo.appendChild(unNodoCardBody);
  imgbase.appendChild(unNodo);

//precios - personas
function agregar10(){
  nuperson=10;
  valper=60;
}
function agregar30(){
  nuperson=30;
  valper=180;
}
function agregar50(){
  nuperson=50;
  valper=300;
}

//rellenos
function ref(){
  relleno="Frutas";
  pf=20;
unNodoTitle.textContent = "Frutas";
unNodoImagen.setAttribute('src', 'Images/crea/crea4.png',);
}
function rec(){
  relleno="Chocolate";
  pf=40;
unNodoTitle.textContent = "Chocolate";
unNodoImagen.setAttribute('src', 'Images/crea/crea3.png',);
}
function ret(){
  relleno="Tres Leches";
  pf=50;
unNodoTitle.textContent = "Tres Leches";
unNodoImagen.setAttribute('src', 'Images/crea/crea2.png',);
}

//Decorados
function des(){
  decorado="Sencillo";
  pd=80;
  switch (relleno) {
    case "Frutas":
      unNodoTitle.textContent = "Frutas - Sencillo";
      unNodoImagen.setAttribute('src', 'Images/crea/crea4_1.png',);
      break;
    case "Chocolate":
      unNodoTitle.textContent = "Chocolate - Sencillo";
      unNodoImagen.setAttribute('src', 'Images/crea/crea3_1.png',);
      break;
    case "Tres Leches":
      unNodoTitle.textContent = "Tres Leches - Sencillo";
      unNodoImagen.setAttribute('src', 'Images/crea/crea2_1.png',);
      break;
    default:

  }
}
function dem(){
  decorado="Muy Decorado";
  pd=160;
  switch (relleno) {
    case "Frutas":
      unNodoTitle.textContent = "Frutas - Muy Decorado";
      unNodoImagen.setAttribute('src', 'Images/crea/crea4_2.png',);
      break;
    case "Chocolate":
      unNodoTitle.textContent = "Chocolate - Muy Decorado";
      unNodoImagen.setAttribute('src', 'Images/crea/crea3_2.png',);
      break;
    case "Tres Leches":
      unNodoTitle.textContent = "Tres Leches - Muy Decorado";
      unNodoImagen.setAttribute('src', 'Images/crea/crea2_2.png',);
      break;
    default:

  }
}
function dee(){
  decorado="Especial";
  pd=200;
  switch (relleno) {
    case "Frutas":
      unNodoTitle.textContent = "Frutas - Especial";
      unNodoImagen.setAttribute('src', 'Images/crea/crea4_3.png',);
      break;
    case "Chocolate":
      unNodoTitle.textContent = "Chocolate - Especial";
      unNodoImagen.setAttribute('src', 'Images/crea/crea3_3.png',);
      break;
    case "Tres Leches":
      unNodoTitle.textContent = "Tres Leches - Especial";
      unNodoImagen.setAttribute('src', 'Images/crea/crea2_3.png',);
      break;
    default:

  }
}


//total - Limpiar
function calcularTotal(){
  var netv = valper+pf+pd;
  }
function lim(){
  alert('hula');
  nuperson = 0;
  valper =0;
  relleno = "";
  pf =0;
  decorado = "";
  pd=0;
  unNodoTitle.textContent = "Base";
  unNodoImagen.setAttribute('src', 'Images/crea/crea1.png');
}
