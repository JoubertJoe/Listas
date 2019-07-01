//myScript.js
var min=1; 
var max=100;
var random =Math.floor(Math.random() * (+max - +min)) + +min; 
document.write("Número sorteado: " + random );
var aux = 0;
function testeNum(){

    if(aux <= 4){
        aux = aux + 1;
        var conteudo = document.getElementById("inp1").value; 

        li = document.createElement("li");
        var num = String(aux)
        id = "li" + num;
        li.setAttribute("id", id);

        if(conteudo == random){
            var texto = document.createTextNode(conteudo + " é o número certo!");

            h3 = document.createElement("h3");
            var num = String(aux)
            id = "h3" + num;
            h3.setAttribute("id", id);

            h3.appendChild(texto);
            li.appendChild(h3);
        }else if(conteudo > random){
            var texto = document.createTextNode(conteudo + " é muito ALTO");
            li.appendChild(texto);
        }else{
            var texto = document.createTextNode(conteudo + " é muito BAIXO");
            li.appendChild(texto);
        }

        var ul = document.getElementById("ul1");

        ul.appendChild(li);
        
    }else{
        teste = document.getElementById("p1");
        teste.innerHTML = "Suas tentativas acabaram!";
    }
}