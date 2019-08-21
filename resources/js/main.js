



/******RANGE******/

$(document).ready(function() {

      $(".range-example").asRange({

        range: true,

        limit: false

      });

      $(".range-example-bol").asRange({

        range: false,
     
        limit: false
     
      });

      // validate signup form on keyup and submit
      $("form").validate({
        rules: {
          nombreD: "required",
          apellidoD: "required",
          dniD: "required",
          celularD: "required",
          direccionD: "required",
          apellidoD: "required"
        },
        messages: {
          nombreD: "El nombre es obligatorio",
          apellidoD: "El apellido es obligatorio",
          dniD: "El dni es obligatorio",
          celularD: "El celular es obligatorio",
          direccionD: "La direccion es obligatoria",
          apellidoD: "El Apellido es obligatorio"
        }
      });

});





/******TOOLTIPS*****/

$(function () {

  $('[data-toggle="tooltip"]').tooltip()

})



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

$('.dropdown-toggle').dropdown()

