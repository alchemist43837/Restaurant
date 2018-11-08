window.onload=function(){

//1
  var pes = document.querySelectorAll('p');
    console.log(pes);
    pesArray=[];
    console.log(pes.length);;
    var mayor=0;
    var  indice ;
    for (var i = 0; i < pes.length; i++) {
        if (pes[i].textContent.length >mayor) {
          mayor = pes[i].textContent.length;
          indice = i;
        }
    }
     pes[indice].style.backgroundColor='red';
    // for (var i = 0; i < pes.length; i++) {
    //   if (pes[i].textContent.length == mayor) {
    //   pes[i].style.backgroundColor='red';
    //   }|
    // }
    // console.log( Math.max (pesArray))  ;
    console.log(mayor);

     var gugles=[];
    for (var i = 0; i < pes.length; i++) {
        buscar =pes[i].textContent
        if (buscar.match(/ECMA/g)) {
          gugles.push(buscar.match(/ECMA/g));
        }+
    }
        console.log(gugles);
        var a=0 ;
        for (var i = 0; i < gugles.length; i++) {
              a += gugles[i].length ;
        }
        console.log(a);
        var todo =document.querySelector('body')
          var todo1= todo.textContent
          var resultado= todo1.replace("ActionScript","PORQUERIASCRIPT");
          // todo.innerText.replace("ActionScript", "PORQUERIASCRIPT");
          todo.innerHTML = resultado ;
          console.log(resultado);
}
//2
