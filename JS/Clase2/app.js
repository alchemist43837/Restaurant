window.onload= function(){
//   //
//   //2
//     contador=135;
//     for (var i = 1; i < contador; i++) {
//       if (i*3 <  contador){
//         console.log(i +' x  3 = '+ i*3 );
//       }
//     }
//     //3
//       dado=Math.floor(Math.random()*6);
//     // switch (dado) {
//     //   case (dado%2==0):
//     //     console.log('el numero '+ dado + ' es par');
//     //     break;
//     //   case (dado%2!=0):
//     //     console.log('el numero '+ dado + ' es impar');
//     //     break;
//     //   // default:
//     // }
//      // (dado%2==0)?console.log('el numero '+ dado + ' es par'):console.log('el numero '+ dado + ' es impar ');,
//      dado=Math.floor(Math.random()*6);
//      res = (dado%2==0)? ' es par':' es impar '
//      console.log(dado +' '+res);
//      //4a
//      aleatorio =1;
//      i=0
//      while (true) {
//        aleatorio =Math.floor(Math.random()*37);
//         if(aleatorio==19) {
//          break;
//        }z|
//         i++;
//      }
//       console.log('Salio el 19 se usaron '+ i + ' intentos para ello' );
//       //4b
//       aleatorio =1;
//       i=0
//       while (true) {
//         aleatorio =Math.floor(Math.random()*37);
//          if(aleatorio==19) {
//           break;
//         }
//          i++;
//       }
//        console.log('Salio el 19 se usaron '+ i + ' intentos para ello' );
//        //5
//        arraypares=[];
//        for (var i = 1; i <= 100; i++) {
//           if (i%2===0) {
//             arraypares.push(i);
//           }
//        }
//          console.log(arraypares)
//        // console.log(arraypares);
//
//
//
//
//
//           //funciones 1
//          var Estudiante ={
//            nombre :'IronMan',
//            curso : 'TN5Noche',
//            dni: '99.999.999',
//            email : 'abc@abc.com',
//          }
//          function fromObjetctToArray(object){
//               array=[];
//            for (var est in object) {
//              // console.log(est +' : ' +object[est]);
//              array.push(est+' : '+object[est]);
//            }
//          }
//          fromObjetctToArray(Estudiante);
//          console.log(array);

         //funciones 2
         var changes = document.querySelector('body');
         function cambiarColorDeFondoDelBody(color){
             if (color=='green'||color=='#0F0'||color=='#00FF00') {
                   return  false;
             }else{
                 changes.style.background = 'yellow' ;
                 return true;
             }
         }
         cambiarColorDeFondoDelBody('red');

         //funciones 3
           var changes = document.querySelectorAll('p');
           var numero = changes.length;
           console.log(numero);
           for (i=0 ; i< changes.length ; i++) {
             var a=0;
             if ((i+1)%2 ==0) {

               changes[i].style.backgroundColor = "red";
               changes[i].style.fontWeight='bold';
               changes[i].style.textAlignment='center';
               // console.log(changes[i]);
             }

            else {
              a++;
            }
           }
            console.log(a + ' parrafos estan sin afectar');



            // Metodos Arrays

          arraypares

         // var miArray =[1,2,3,4];
         // miArray.forEach(function(numero){
         //   console.log(numero);
         // });
         //
         // //Fucniones 3
         // function cambiarColor(core){
         //   var changes = document.querySelectorAll('p');
         //   // changes.style.background = core ;
         //   return changes
         // }
         // cambiarColor('red');


}
