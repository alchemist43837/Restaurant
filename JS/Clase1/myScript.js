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
      return this.poderes[poder];
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

while (Hulk.energia > 0) {
   Hulk.getPoder(poder)
   if (Hulk.energia<=0) {
     console.log('Estas Muerto');
   }
   else console.log (Hulk.energia);

}

var botonDePrueba= document.querySelector( "#miBoton");

botonDePrueba.onclick=function(){alert("testeandoClick")}







// console.log (Hulk.getPoder(poder));
// console.log (Hulk.getPoder(poder));
// console.log (Hulk.getPoder(poder));
// console.log (Hulk.getPoder(poder));
// console.log (Hulk.getPoder(poder));
// console.log (Hulk.getPoder(poder));
// console.log (Hulk.getPoder(poder));
// var funtion elegirPoder() {
//
// }
//
//
//
//
