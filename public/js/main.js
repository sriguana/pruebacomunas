/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

$('.js-data-example-ajax').select2({
  ajax: {
    url: 'http://127.0.0.1:8000/api/localidad?names=Tarapacá,Copiapó,Ñuñoa,Lampa,Cauquenes',
    dataType: 'json'
    // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
  }
});