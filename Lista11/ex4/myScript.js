//myScript.js
function zebra(){
    for ($i = 1; $i <= 10; $i++) {
        if($i % 2 ==0){
            document.getElementById($i).style.backgroundColor = "lightblue";
        }
    }
}

function dezebra(){
    for ($i = 1; $i <= 10; $i++) {
        if($i % 2 ==0){
            document.getElementById($i).style.backgroundColor = "";
        }
    }
}