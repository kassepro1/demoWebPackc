import greet from './greating';
import getProByCat from './kprod';
import $ from 'jquery';
console.log("hello word ");

console.log(greet("Bineta")); 
getProByCat(onDataReiceved);
$( document ).ready(function() {
   
    console.log('Hello World from JQuery');
});
function onDataReiceved(result){
    $('#tbProd').empty();
    $.each(result, function(key, value){
        $('#tbProd').append('<tr><td>'+value.designation +'</td></tr>');
         });
}