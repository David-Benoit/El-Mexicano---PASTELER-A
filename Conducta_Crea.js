alert("hula guapos");
//Objetos a Variable
var p = document.getElementById("diezp");
var pp = document.getElementById("trep");
var ppp = document.getElementById("cinp");
var rf = document.getElementById("frutas");
var rc = document.getElementById("choco");
var rl = document.getElementById("leche");
var ds = document.getElementById("sencillo");
var dmd = document.getElementById("decorado");
var de = document.getElementById("especial");
var tot=document.getElementById("total");
//Variables de almacenamiento
var personas; //monetaria
var txpersonas;//texto o descripción
var relleno;
var txrelleno;
var decorado;
var txdecorado;
var total;
var txtotal;
//Opciones de personas
p.addEventListener("click", calcper10);
pp.addEventListener("click", calcper30);
ppp.addEventListener("click", calcper50);

//Funciones por Opción de Personas
function calcper10(){
  personas=60;
  txpersonas="10";
  alert("10per");
}
function calcper30(){
  personas=180;
  txpersonas="30";
  alert("30per");
}
function calcper50(){
  personas=300;
  txpersonas="50";
  alert("50per");
}
//Opciones de Relleno
rf.addEventListener("click", calcrf);
rc.addEventListener("click", calcrc);
rl.addEventListener("click", calcrl);

//Funciones por Opción de relleno
function calcrf(){
  relleno=10;
  txrelleno="10";
  alert("r frutas");
}
function calcrc(){
  relleno=20;
  txrelleno="30";
  alert("r choco");
}
function calcrl(){
  relleno=30;
  txrelleno="50";
  alert("r leche");
}

//Opciones de Decorado
ds.addEventListener("click", calcds);
dmd.addEventListener("click", calcdmd);
de.addEventListener("click", calcde);

//Funciones por Opción de decorado
function calcds(){
  decorado=20;
  txdecorado="10";
  alert("Sencillo");
}
function calcdmd(){
  decorado=40;
  txdecorado="30";
  alert("Muy decorado");
}
function calcde(){
  decorado=60;
  txdecorado="50";
  alert("Especial");
}
