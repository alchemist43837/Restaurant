fetch("http://localhost:8080/workstation/JS/Clase7/materiales_ejercitacion/get.php")
.then(function (response) {
return response.json();
})
.then(function (data) {
  movies = JSON.stringify(data);
  console.log(movies);
})
.catch(function (error) {
console.log("The error was: " + error);
});

// console.log(movies);




// var campos = {
// Title: "Ada",
// Rating: "Lovelace",
// Awards:
// }
var datosDelFormulario = new FormData();
datosDelFormulario.append('datos', JSON.stringify(datosDelFormulario));
fetch("http://localhost:8080/workstation/JS/Clase7/materiales_ejercitacion/post.php", {
 method: 'POST',
 body: datosDelFormulario
)
.then(function (response) {
return response.text();
})
.then(function (data) {
// do stuff with data;
})
