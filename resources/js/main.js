




/******RANGE******/

$(document).ready(function($) {


      $("#horario_lunes, #horario_martes, #horario_miercoles, #horario_jueves, #horario_viernes, #horario_sabado, #horario_domingo").asRange({
        range: true,
        limit: false
      });


      $(".rango-perfil").asRange({
        range: false,
        limit: false
      });

      $('#sexo').on('change', function(){

        console.log("test")

      })

});





/******TOOLTIPS*****/
/*
$(function () {

  $('[data-toggle="tooltip"]').tooltip()

})
*/


/*****GALERÍA IMAGENES PEQUEÑAS*****/

function showImage(imgName) {

   var curImage = document.getElementById('currentImg');

   var thePath = 'img/galeria/';

   var theSource = thePath + imgName;

   curImage.src = theSource;

}

function nombre(imgName2){

  var curImage = document.getElementById('currentImg2');

   var thePath = 'img/galeria/';

   var theSource = thePath + imgName2;

   curImage.href = theSource;

}



/*****FORMULARIO ANIMADO OCULTAR Y MOSTRAR******/

function mostrarFormulario() {

      document.getElementById('form-consultor').style.display = 'block';

      document.getElementById('consultor').style.display = 'none';

}



function ocultarFormulario() {

      document.getElementById('form-consultor').style.display = 'none';

      document.getElementById('consultor').style.display = 'block';

}



/******MODAL******/

//$('#aviso-importante').modal('show')



/****Dropdown****/

//$('.dropdown-toggle').dropdown()

