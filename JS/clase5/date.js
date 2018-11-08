var fecha = new Date();
var meses=[ 'enero','febrero','marzo','abril','mayo','junio',     'julio','agosto','septiembre','octubre','nov.','diciembre']
var dias=['domingo','lunes','martes','miercoles','jueves','viernes','sabado']
var dia = fecha.getDay();
var diaN = fecha.getDate();
var mes = fecha.getMonth();
var anio = fecha.getFullYear();
var fullFecha= dias[dia]+' '+ diaN + ' de ' + meses[mes] + ' de ' + anio ;
console.log(fullFecha);

//

var mins = 1000*60;
var horas = mins *60;
var days = horas * 24;
var years = days*365 ;
var d = new Date(2018,11,25);
var t = d.getTime();
var d1 = new Date();
var t1 = d1.getTime();
var dif = Math.floor((t-t1 )/days);


//strings

//expresiones regulares
