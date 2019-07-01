
function atualizaTopLeft() {
  var valor = document.getElementById("slider1").value;
  document.getElementById("TopLeft").innerHTML = valor;

  document.getElementById("layoutCima").style.borderTopLeftRadius = valor + "px";
  var area = document.getElementById("area").value ="border-top-left-radius:" + valor + "px;";
}

function atualizaTopRight() {
  var valor = document.getElementById("slider2").value;
  document.getElementById("TopRight").innerHTML = valor;

  document.getElementById("layoutCima").style.borderTopRightRadius =valor + "px";
  document.getElementById("area").value ="border-top-right-radius:" + valor + "px;";
}
function atualizaBotRight() {
  var valor = document.getElementById("slider3").value;
  document.getElementById("BotRight").innerHTML = valor;

  document.getElementById("layoutCima").style.borderBottomRightRadius =valor + "px";
  document.getElementById("area").value ="border-bottom-right-radius:" + valor + "px;";
}
function atualizaBotLeft() {
  var valor = document.getElementById("slider4").value;
  document.getElementById("BotLeft").innerHTML = valor;

  document.getElementById("layoutCima").style.borderBottomLeftRadius =valor + "px";
  document.getElementById("area").value ="border-bottom-left-radius:" + valor + "px;";
}
