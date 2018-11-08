// var string="abc";
// var array=['abc','bcd',''];
// var trufalse= false;
//
// console.log(string);
// console.log(array);
// console.log(trufalse);

var IronMan ={
    nombre:"Iron Man",
    equipo :'Avengers',
    poderes : [
      'volar','lanzar misiles','disparar laser'
    ],
    energia : 100,
    getPoder: function(poder){
      if (this.poderes[poder]=='volar'){
        return this.energia -=20;
      }
      else if (this.poderes[poder]=='lanzar misiles'){
        return this.energia -= 45;
      }
      else if (this.poderes[poder]=='disparar laser'){
        return this.energia -= 75;
      };
      return this.energia;
      }
    };

var Hulk ={
    nombre:"Hulk",
    equipo :'Avengers',
    poderes : [
      'aplastar','gritar','golpear'
    ],
    energia : 100,
    getPoder: function(poder){
      if (this.poderes[poder]=='aplastar'){
        return this.energia -=45;
      }
      else if (this.poderes[poder]=='gritar'){
        return this.energia -= 15;
      }
      else if (this.poderes[poder]=='golpear'){
        return this.energia -= 25;
      };
      return this.energia;
    }
};

var poder = Math.floor(Math.random()*3);

function jugar(jugador) {
    while (jugador.energia > 0) {
       jugador.getPoder(poder)
       if (jugador.energia<=0) {
         console.log('Estas Muerto');
       }
       else console.log (jugador.energia);
    }
}

jugar(Hulk);
jugar(IronMan);

//otra solucion :
// while (Hulk.energia > 0) {
//    Hulk.getPoder(poder)
//    if (Hulk.energia<=0) {
//      console.log('Estas Muerto');
//    }
//    else console.log (Hulk.energia);
// }
var botonDePrueba= document.querySelector( "#miBoton");
botonDePrueba.onclick=function(){alert("testeandoClick")}

var MisDatos ={
  nombre :'',
  apellido :'',

}
