function addElement(){
    var texto = document.getElementById("inp1").value;
    var u = document.getElementById('ul1');
    var li = document.createElement('li');
    li.innerHTML = texto;
    u.appendChild(li);    
}
