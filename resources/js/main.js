



/******RANGE******/

$(document).ready(function($) {




      $(".range-example").asRange({
        range: true,
        limit: false

      });

      // setup the repeater
      $('.repeater').repeater({
        show: function () {
          $(this).slideDown();
        },
        hide: function (deleteElement) {
          if(confirm('Are you sure you want to delete this element?')) {
              $(this).slideUp(deleteElement);
          }
        },
        isFirstItemUndeletable: true
      });

      $(".rango-perfil").asRange({
        range: false,
        limit: false
      });


      // validate signup form on keyup and submit
      $("#form-cuenta-usuario").validate({
        ignore: ":hidden",
        debug: true,
        rules: {
          nombre: {
            required : true
          },
          apodo: {
            required : true
          },
          password: {
            required : true
          },
          confirmar_clave: {
            required : true,
            equalTo: '#password'
          },
          email: {
            email: true,
            required: true
          },
          confirmar_email: {
            email: true,
            required: true,
            equalTo: '#email'
          },
          fecha_nacimiento: {
            required : true
          },
          sexo: {
            required : true
          },
          nacionalidad: {
            required : true
          },
          idioma: {
            required : true
          },
          celular: {
            required : true
          }
        },
        errorPlacement: function(error, element) {
          //error.appendTo(element.parent("div").next("td"));
          error.insertAfter(element); 
        },
        doNotHideMessage: false, 
        //errorClass: "invalid",
        messages: {
          nombre: "El nombre es obligatorio",
          apodo: "El apodo es obligatorio",
          email: "El email es obligatorio",
          confirmar_email: "Debe confirmar su email",
          password: "La clave es obligatoria",
          fecha_nacimiento: "La fecha de nacimiento es obligatoria",
          sexo: "El sexo es obligatorio",
          nacionalidad: "La nacionalidad es obligatoria",
          idioma: "El idioma es obligatorio"
        }/*,
        highlight: function (element) { // hightlight error inputs
          $(element).closest('.col-lg-12').addClass('has-error'); 
        },
        unhighlight: function (element) { // revert the change done by hightlight
          $(element).closest('.col-lg-12').removeClass('has-error'); 
        }*/
      });

      // validate signup form on keyup and submit
      /*$("form").validate({
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
      });*/

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

