// https://repl.it/repls/CuddlyHumiliatingFormat
let hola = nombre =>console.log('hola '+nombre);
hola('fulanito');

let arrayuno= ['ada','grace'];
let arraydos = ['tim','vin'];

arrayuno=[...arrayuno,...arraydos];

// ----/

const persona ={
  nombre: 'ale',
  edad :32
}
const {nombre,edad}=persona;
console.log(persona);
console.log(nombre);


//default Parameters

let sayHello = (name = "Stranger") => `Hello ${name}`;
sayHello("Ada"); // Hello Ada
sayHello(); // Hello Stranger

// https://chrome.google.com/webstore/detail/react-developer-tools/fmkadmapgofadopljbjfkapdkoienihi
