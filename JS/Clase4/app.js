var title =  document.querySelector('title');
var newh1= document.querySelector('h1');
var body=document.querySelector('div')
var boton = document.querySelector('button')
var div =document.querySelector('div')
//
  boton.onclick=function(){
    if (boton.innerText == 'IR AL 31') {
      boton.innerText= 'volver al 30/10';
      title.innerText='31/10';
      newh1.innerText= '31/10';
      div.append(a);
      var a = div.parentElement.innerHTML=' <div  display="float" > <img src="images.jpg"> </div>'
      body.style.background = 'orange';
    }
    else {
      boton.innerText= 'IR AL 31';
      title.innerText='30/10';
      newh1.innerText= '30/10';
      body.style.background = 'red';
    }

  }
