//myScript.js
function alterar_nome(){
  var p1 = document.getElementById("p1");
  p1.innerHTML = "Selecionando Nome";

  document.getElementById("inp_nome").style.display = "block";
  document.getElementById("btn_nome").style.display = "block";
  document.getElementById("nome").style.display = "none";
}
function alterar_nome1(){
  var conteudo = document.getElementById("inp_nome").value;
  var nome = document.getElementById("nome");
  nome.innerHTML = conteudo;
  
  document.getElementById("inp_nome").style.display = "none";
  document.getElementById("btn_nome").style.display = "none";
  document.getElementById("nome").style.display = "block";
}
function alterar_cargo(){
  var p1 = document.getElementById("p1");
  p1.innerHTML = "Selecionando Função";

  document.getElementById("inp_funcao").style.display = "block";
  document.getElementById("btn_funcao").style.display = "block";
  document.getElementById("funcao").style.display = "none";
}
function alterar_cargo1(){
  var conteudo = document.getElementById("inp_funcao").value;
  var funcao = document.getElementById("funcao");
  funcao.innerHTML = conteudo;
  
  document.getElementById("inp_funcao").style.display = "none";
  document.getElementById("btn_funcao").style.display = "none";
  document.getElementById("funcao").style.display = "block";
}
function alterar_empresa(){
  var p1 = document.getElementById("p1");
  p1.innerHTML = "Selecionando Empresa";

  document.getElementById("inp_empresa").style.display = "block";
  document.getElementById("btn_empresa").style.display = "block";
  document.getElementById("empresa").style.display = "none";
}
function alterar_empresa1(){
  /*var p1 = document.getElementById("p1");
  p1.innerHTML = "...";*/
  var conteudo = document.getElementById("inp_empresa").value;
  var empresa = document.getElementById("empresa");
  empresa.innerHTML = conteudo;
  
  document.getElementById("inp_empresa").style.display = "none";
  document.getElementById("btn_empresa").style.display = "none";
  document.getElementById("empresa").style.display = "block";
}
function alterar_foto(){
  var p1 = document.getElementById("p1");
  p1.innerHTML = "Selecionando foto";

  document.getElementById("inp_foto").style.display = "block";
  document.getElementById("btn_foto").style.display = "block";
  //document.getElementById("foto").style.display = "none";
  //p1.innerHTML = "...";
}
function alterar_foto1(){
  var p1 = document.getElementById("p1");
  p1.innerHTML = "...";
  

function alterar_logo(){
  var p1 = document.getElementById("p1");
  p1.innerHTML = "Selecionando Logo";

  document.getElementById("inp_logo").style.display = "block";
  document.getElementById("btn_logo").style.display = "block";
  document.getElementById("logo").style.display = "none";
}
function alterar_logo1(){
  var p1 = document.getElementById("p1");
  var conteudo = document.getElementById("inp_logo").value;
  

  document.getElementById("fundoLogo").style.background = "url("+conteudo+") no-repeat";
  //document.getElementById("fundoLogo").style.background = "red";
  //url("cracha1.png") no-repeat;
  p1.innerHTML = conteudo;

  document.getElementById("inp_logo").style.display = "none";
  document.getElementById("btn_logo").style.display = "none";
}