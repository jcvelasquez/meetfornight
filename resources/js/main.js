/******RANGE******/

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


$(document).ready(function(){

      $('#perfilesRelacionados').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
      });


      if( $('ul.lista-preliminares').children().length < 1 ){ $('#nav-preliminares').hide(); }

      if( $('ul.lista-intimos').children().length < 1 ){ $('#nav-intimo').hide(); }

      if( $('ul.lista-masajes').children().length < 1 ){ $('#nav-masajes').hide(); }

      if( $('ul.lista-fetiches').children().length < 1 ){ $('#nav-fetiches').hide(); }

      if( $('ul.lista-otros').children().length < 1 ){ $('#nav-otros').hide(); }

      if( $('ul.lista-discapacitados').children().length < 1 ){ $('#nav-discapacitados').hide(); }

});