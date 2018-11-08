var formulario = document.querySelector(".contact-form")
var elementsForm = formulario.elements;
var elFormArray=Array.from(elementsForm);
// elFormArray.pop();
    elFormArray.forEach(function(element){
        element.addEventListener('blur',function(){
            if (this.value=='') {
              this.classList.add('is-invalid');
              console.log('Error blur');
            }
            else{
              this.classList. remove('is-invalid');
            }
      });
    });


    formulario.addEventListener("submit",function(event){
      if
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
