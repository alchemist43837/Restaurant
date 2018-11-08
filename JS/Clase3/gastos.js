window.onload= function(){

    // integrantes=[
    //   {nombre:'Ada', gastos:300},
    //   {nombre: 'Tim', gastos:570},
    //   {nombre:'Vincent',gastos:80}
    // ];
    var arrayIntegrantes=[];
    var familiares={ nombre:'' , gastos:'' }

    // var despedida =
    function ingresoEncuesta(){
      var bienvenida = confirm('Queres realizar una encuesta ');
      if (bienvenida) {
        // var integrantes = prompt('ingrese cantidad de familiares')
        integrantes='';
        while (isNaN(integrantes) || integrantes<3 ) {
          integrantes = prompt('ingrese cantidad de familiares')
          if (isNaN(integrantes)) {
            alert('La Cantidad debe expresarse en numeros');
          }
          else if (integrantes<3) {
            alert('la cantidad de familiares minima es 3');
          }
          return arrayInts();
        }
    } else {
      alert('Gracias  por haber venio');
      window.location.href='https://www.netflix.com';
      }
    }
    //agregar validaciones
      function arrayInts(){
        for (var i = 0; i < integrantes; i++) {
          familiares.nombre=prompt('ingrese nombre');
          familiares.gastos=prompt('Ingrese gasto');
          arrayIntegrantes.push(familiares);
        }
        return console.log(arrayIntegrantes);;
      }
      //EJECUCION:
      ingresoEncuesta();

      var gastoMas=0;
      var gastoMayor=0;

      for (var i = 0; i < arrayIntegrantes.length; i++) {
        if (arrayIntegrantes[i].gasto>gastoMas) {
          nombreMasGasto=arrayIntegrantes[i].nombre;
          nombreMasGasto=arrayIntegrantes[i].gasto;

        }
      }

      //console.log(integrantes);
      //  arrayInts()


}
// var integrantes = prompt('ingrese cantidad de familiares')
// if (!isNaN(integrantes) && integrantes>=3 ) {
//
// }else{
//   alert('La Cantidad debe expresarse en numeros')
//   var integrantes = prompt('ingrese cantidad de familiares')
// }
