window.onload= function(){
  var btnStart=document.querySelector('.start');
  var btnPause=document.querySelector('.pause');
  var btnReset=document.querySelector('.reset');
  var cont=document.querySelector('.numeros');
  var contador=0;
  var intervalo;

  function comenzar(){
    intervalo= setInterval(function(){
      contador++ ;
      cont.innerHTML="<h1>" +contador + "</h1>"
    },1000);
    btnStart.removeEventListener('click',comenzar);
  }
  function  pausar(){
    clearInterval(intervalo);
    btnStart.addEventListener('click',comenzar);
  }
  function reset(){
    contador=0;
    cont.innerHTML="<h1> 0 </h1>"
  }

  btnStart.addEventListener('click',comenzar);
  btnPause.addEventListener('click',pausar);
  btnReset.addEventListener('click',reset);
}
