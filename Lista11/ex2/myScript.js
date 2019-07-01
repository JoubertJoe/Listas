//myScript.js
function trocaP(){
    var aux = document.getElementById("p1").innerHTML;
    document.getElementById("p1").innerHTML = document.getElementById("p2").innerHTML;
    document.getElementById("p2").innerHTML = aux;
}