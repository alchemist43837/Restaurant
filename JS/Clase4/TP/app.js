window.onload = function(){

  var qtareas ='';
  // var confirmado= false;
  var confirma=false;


        do {
          qtareas = prompt('Ingrese cantidad de Tareas a realizar');
          if (qtareas <= 3) {
            alert('cantidad inferior a lo requerido')
          }
          if (isNaN(qtareas )) {
            alert('ingrese numeros')
          }

        } while ( qtareas <= 3 || isNaN(qtareas) )
  }








    //
    //
    // if (!confirmado) {
    //   qtareas=0;
    //
    // }






//
// integrantes='';
// while (isNaN(integrantes) || integrantes<3 ) {
//   integrantes = prompt('ingrese cantidad de familiares')
//   if (isNaN(integrantes)) {
//     alert('La Cantidad debe expresarse en numeros');
//   }
//   else if (integrantes<3) {
//     alert('la cantidad de familiares minima es 3');
//   }
//   return arrayInts();
// }
