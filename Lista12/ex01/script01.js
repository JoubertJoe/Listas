
function esconderMostrar(e){
    var status = document.getElementById(e).style.display;
    if(!status || status == "block"){
        document.getElementById(e).style.display = "none";
    }else{
        document.getElementById(e).style.display = "block";
    }
}
