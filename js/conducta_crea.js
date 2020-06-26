var basep = JSON.parse(base);
var imgbase = document.getElementById("base")
var elTotal=document.getElementById("Total")
var diez =document.getElementById('diezp')
var treinta =document.getElementById('trep')
var cincuenta =document.getElementById('cinp')
var nuperson = 0;
mostrarProductosb();
//Funcions mostrar productos
function mostrarProductosb(){
  var unNodoTitle = document.createElement('h5');
  unNodoTitle.classList.add('col-sm-12', 'alert', 'alert-custom', 'text-center');
  unNodoTitle.textContent = "Base";
  imgbase.appendChild(unNodoTitle);

  for (var pro of basep){
    var unNodo = document.createElement('div');
    unNodo.classList.add('div','col-sm-12', 'text-center');

    var unNodoCardBody = document.createElement('div');
    unNodoCardBody.classList.add('div');

    var unNodoImagen = document.createElement('img');
    unNodoImagen.classList.add('img-fluid');
    unNodoImagen.setAttribute('src', pro.imagen,);
    unNodoImagen.style.width='400px';
    unNodoImagen.style.height='400px';

    unNodoCardBody.appendChild(unNodoImagen);
    unNodo.appendChild(unNodoCardBody);
    imgbase.appendChild(unNodo);

  }
}
//Funcion calcular numero de Personas
diez.addEventListener("onclick", nuperson=10);
treinta.addEventListener('click', nuperson=30);
cincuenta.addEventListener('click', nuperson=50);

elTotal.addEventListener("click", alert('hola'));
