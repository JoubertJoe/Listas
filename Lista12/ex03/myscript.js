//myScript.js
aux = 0;
function inserirLista(){
    aux++;

    var conteudo = document.getElementById("inp1").value; // armazena o conteudo do input
    var texto = document.createTextNode(conteudo);//cria uma nota de texto

    var celula = document.createElement("td");//cria a celula
    var num = String(aux)//convertendo numero em string
    id = "celula" + num;//concatenando Strings
    celula.setAttribute("id", id);//redefini ID da celula

    var span = document.createElement("span");//cria o span
    var num = String(aux)//convertendo numero em string
    id = "span" + num;//concatenando Strings
    span.setAttribute("id", id);//redefini ID do span

    var i = document.createElement("i");//cria elemento i
    var num = String(aux)//convertendo numero em string
    id = "btn" + num;//concatenando Strings
    i.setAttribute("id", id);//redefini ID do elemento i
    i.setAttribute("class", "far fa-circle");//redefinindo classe do elemento i
    i.setAttribute("onclick", "marcarLista('"+num+"')");//redefini função do elemento i

    span.appendChild(i);//adiciona ao span um item com função

    espaço = document.createTextNode(" | "); //criando uma nota de texto com apenas um espaço
    span.appendChild(espaço);
    span.appendChild(texto);//adiciona ao span um texto
    espaço1 = document.createTextNode(" | ");
    span.appendChild(espaço1);

    var linha = document.createElement("tr");//cria a linha
    var num = String(aux)//convertendo numero em string
    id = "linha" + num;//concatenando Strings
    linha.setAttribute("id", id);//redefini ID da linha

    var i2 = document.createElement("i");//cria elemento i2
    var num = String(aux)//convertendo numero em string
    id = "trash" + num;//concatenando Strings
    i2.setAttribute("id", id);//redefini ID do elemento i2
    i2.setAttribute("class", "far fa-trash-alt");//redefinindo classe do elemento i2
    i2.setAttribute("onclick", "removerLista('linha"+num+"')");//redefini função do elemento i2

    span.appendChild(i2);//adiciona ao span um item com função
    celula.appendChild(span);//adiciona a celula um span

    linha.appendChild(celula);//insere a celula na linha

    var tabela = document.getElementById("tabela");
    tabela.appendChild(linha);
}

function marcarLista(e){

    var num = String(e)//convertendo numero em string

    document.getElementById("span"+num).remove();

    var span = document.createElement("span");//cria elemento i
    idSpan = "span" + num;//concatenando Strings
    span.setAttribute("id", idSpan);//redefini ID do elemento i

    var i = document.createElement("i");//cria elemento i
    id = "btn" + num;//concatenando Strings
    i.setAttribute("id", id);//redefini ID do elemento i
    i.setAttribute("class", "fas fa-check-circle");//redefinindo classe do elemento i

    span.appendChild(i);

    espaço = document.createTextNode(" - - - > "); //criando uma nota de texto com apenas um espaço
    span.appendChild(espaço);

    var s = document.createElement("s");//cria elemento i
    
    texto = document.createTextNode("FINALIZADO");//cria uma nota de texto

    s.appendChild(texto);

    span.appendChild(s);
    
    espaço1 = document.createTextNode(" < - - - ");
    span.appendChild(espaço1);
    
    var i2 = document.createElement("i");//cria elemento i2
    id = "trash" + num;//concatenando Strings
    i2.setAttribute("id", id);//redefini ID do elemento i2
    i2.setAttribute("class", "far fa-trash-alt");//redefinindo classe do elemento i2
    i2.setAttribute("onclick", "removerLista('linha"+num+"')");//redefini função do elemento i2

    span.appendChild(i2);

    var celula = document.getElementById("celula"+num)

    celula.appendChild(span)
}

function removerLista(e){
    aux--;

    /*var dados = document.getElementById("p1");//pegando um paragrafo para imprimir testes
    var num = String(aux+1)//convertendo numero em string
    linha = "linha" + num;//concatenando Strings
    dados.innerHTML = linha//imprimindo no paragrafo de testes*/

    document.getElementById(e).remove();
}