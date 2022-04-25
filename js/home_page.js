// JS

var content = 'Francisco Chaves. Tecnologia com bits codificados.';
var text = document.getElementById('text');

var speed = 190;
var cont = 0;

function typeWriter () {
  if(cont < content.length){
    text.textContent += content.charAt(cont);
    cont++;
    setTimeout(typeWriter, speed);
  }else{
    text.textContent = '';
    cont = 0;
    typeWriter();
  }
}

typeWriter();