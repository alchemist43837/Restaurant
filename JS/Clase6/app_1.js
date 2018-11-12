var formulario = document.querySelector(".contact-form")
// var formulario = document.querySelector(".contact-form")
var elementsForm = formulario.elements;
var elFormArray=Array.from(elementsForm);
// elFormArray.pop();
    errores=[];
invfed= document.querySelectorAll(".invalid-feedback");
console.log(invfed);
    elFormArray.forEach(function(element){

        element.addEventListener('blur',function(){
            if (this.value=='') {
              this.classList.add('is-invalid');
              invfed.innerHTML='Error cargar datos en '+this.element;
              console.log('Error blur');
            }
            else{
              this.classList. remove('is-invalid');
            }
      });
    });

    // var invfed= document.querySelector(".invalid-feedback");
    // elFormArray.forEach(function(element){
    //     element.addEventListener('blur',function(){
    //       var invfed= document.querySelector(".invalid-feedback");
    //         if (this.value=='') {
    //           invfed.innerHTML='Error cargar datos en '+this.element;
    //           // this.classList.add('invalid-feedback');
    //           // console.log('Error onfocus');
    //         }
    //         else{
    //           this.classList. remove('invalid-feedback');
    //         }
    //   });
    // });





    formulario.addEventListener("submit",function(event){
      console.log('Error desde submit');
      event.preventDefault();
    });





//
//   elFormArray.forEach(function(element){
//   formulario.addEventListener("submit",function(){
//     if(element.value==''){
//     event.preventDefault();
//     console.log('Error desde submit');
//     // break;
//   }
//   });
// });


// for (var i = 0; i < elementsForm.length; i++) {
//   if (elementsForm.nodeName='IMPUT') {
//     if (elementsForm.textcontent='') {
//       console.log('ingresedatos al form');
//     }
//   }
//
// }
//
// console.log(elementsForm);
