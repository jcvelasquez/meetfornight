//TEST

$(document).ready(function(){



                      

      // validate signup form on keyup and submit
      $("#form-cuenta-empresa").validate({
        ignore: ":hidden :not('inp-cbx.always-validate') ",
        debug: false,
        rules: {
          //PESTAÑA PLANES
          radioPlan: {
            required : true
          },
          //PESTAÑA PERFIL
          nombre: {
            required : true
          },
          empresa: {
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
            required: true,
            remote: {
              url: "email/check",
              type: "POST",
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            }
          },
          confirmar_email: {
            email: true,
            required: true,
            equalTo: '#email'
          },
          idcountry:  {
            required : true
          },
          idstate:  {
            required : true
          },
          idcity:  {
            required : true
          }
        },
        messages: {
          //PESTAÑA PLAN
          radioPlan: "Selecciona un plan para su cuenta",
          //PESTAÑA PERFIL
          nombre: "El nombre es obligatorio",
          empresa: "El apodo es obligatorio",
          email: {
              email: "Ingrese un email válido",
              required: "El email es obligatorio",
              remote: jQuery.validator.format("El correo {0} ya está en uso.")
          },
          confirmar_email: {
              required: "Ingrese un email",
              equalTo: "Debe confirmar su email"
          },
          confirmar_clave: {
              required: "Ingrese una clave",
              equalTo: "Debe confirmar su contraseña"
          },
          password: "La clave es obligatoria",
          idcountry : "Selecciona una opcion",
          idstate : "Selecciona una opcion",
          idcity : "Selecciona una opcion"
          
        },
        //errorLabelContainer: ".js-errors",
        errorElement: "label",
        errorPlacement: function(error, element) {

            if ( element.is(":radio") ) {

              error.insertAfter( element.parents('.section_planes') );
              error.insertAfter( element.parents('.campo_tipo_contacto') );
              error.insertAfter( element.parents('.obligando-columna') );
              error.insertAfter( element.parents('.radio-tatuaje') );
              error.insertAfter( element.parents('.radio-piercing') );
              error.insertAfter( element.parents('.radio-fumador') );
              
            }else  if ( element.is(":checkbox") ) {

              error.insertAfter( element.parents('.form-row') );
            }else{ // This is the default behavior 
                error.insertAfter( element );
            }
          
        },
        doNotHideMessage: false,  
        errorClass: "error",
        submitHandler: function(form, e) {

            e.preventDefault();

            //DESACTIVO LOS BOTONES
            $("#prev-btn").attr('disabled', true);
            $("#next-btn").attr('disabled', true);
            //$("#btn-enviar").attr('disabled', true);
            

            axios.post('registrar-profesional', {
                //PLANES
                'radioPlan' : $('input[name="radioPlan"]:checked').val(),
                //PERFIL
                'nombre' : $('input[name="nombre"]').val(),
                'apodo' : $('input[name="apodo"]').val(),
                'password' : $('input[name="password"]').val(),
                'email' : $('input[name="email"]').val(),
                'fecha_nacimiento' : $('input[name="fecha_nacimiento"]').val(),
                'apodo' : $("input[name='apodo']").val(),
                'orientacion' : $("input[name='orientacion']:checked").val(),
                'sexo' : $('select[name="sexo"]').val(),
                'categorias' : JSON.stringify( arCategorias ), //array
                'idiomas' : JSON.stringify( arIdiomas ), //array
                'idcountry' :  $('select[name="idcountry"]').val(),
                'idstate' :  $('select[name="idstate"]').val(),
                'idcity' :  $('select[name="idcity"]').val(),
                'tatuaje' :  ($('input[name="tatuaje"]').is(":checked"))? "1" : "0",
                'piercing' :  ($('input[name="piercing"]').is(":checked"))? "1" : "0",
                'fumador' :  ($('input[name="fumador"]').is(":checked"))? "1" : "0",
                'pene' : $('select[name="pene"]').val(),
                'pecho' : $('select[name="pecho"]').val(),
                'color_cabello' : $('select[name="color_cabello"]').val(),
                'corte_intimo' : $('select[name="corte_intimo"]').val(),
                'color_ojos' : $('select[name="color_ojos"]').val(),
                'estatura' : $('input[name="estatura"]').val(),
                'peso' : $('input[name="peso"]').val(),
                'descripcion' : $("textarea[name='descripcion']").val(),
                'frase' : $("input[name='frase']").val(),
                'seguridad' : ($('input[name="seguridad"]').is(":checked"))? "1" : "0",
                //SERVICIOS
                'servicios' : JSON.stringify( arServicios ), //array
                //CONTACTO
                'celular' : $('input[name="celular"]').val(), 
                'tipo_celular' : ($("input[name='tipo_celular']").is(":checked"))? "WHATSAPP" : "CELULAR",
                'tipo_contacto' : $('input[name="tipo_contacto"]:checked').val(),
                'pagina_web' : $("input[name='pagina_web']").val(),
                'agenda' : ($("input[name='agenda']").is(":checked"))? "1" : "0",
                //TARIFAS
                'tarifas' : JSON.stringify( arTarifas )
              }, 
              { headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
              })
              .then(function (response) {

                  Swal.fire('CONFIRMACIÓN', response.data.mensaje , response.data.status );


              })
              .catch(function (error) {
                  // handle error
                  console.log(error);
              });
            

          }
      });


      $("#fecha_nacimiento").datepicker({
          dateFormat : "dd/mm/yyyy",
          clearBtn: true,
          language: "es"
      });
                  

      // Step show event
      $("#smartwizardEmpresa").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
         //alert("You are on step "+stepNumber+" now");
         if(stepPosition === 'first'){
             $("#prev-btn").addClass('disabled');
         }else if(stepPosition === 'final'){
             $("#next-btn").addClass('disabled');
         }else{
             $("#prev-btn").removeClass('disabled');
             $("#next-btn").removeClass('disabled');
         }
      });

      // Smart Wizard
      $('#smartwizardEmpresa').smartWizard({
              selected: 0,
              theme: 'circles',
              transitionEffect:'fade',
              autoAdjustHeight: false,
              keyNavigation:false,
              showStepURLhash: true,
              toolbarSettings: {toolbarPosition: 'bottom',
                                toolbarButtonPosition: 'end',
                                showNextButton: false,
                                showPreviousButton: false
                              }
      });


      $('#smartwizardEmpresa').smartWizard("reset"); 

      $("#prev-btn").on("click", function() {
          $('#smartwizardEmpresa').smartWizard("prev");
          return true;
      });
      
      $("#next-btn").on("click", function() {
          if ( $("#form-cuenta-empresa").valid() ){        
            $('#smartwizardEmpresa').smartWizard("next");
            return true;
          }
      });

      //SLIDERS PERFIL

      $("input[name='radioPlan']").on("change", function() {

          $("#plan_label").html( "Cuenta: " + $(this).parent(".container-radio").find("input[name='plan_seleccionado']").val() );

          //SI EL PRECIO DEL PLAN SELECCIONADO ES MAS DE CERO MOSTRAR PERIODOS
          if(parseFloat($(this).parent(".container-radio").find("input[name='precio_seleccionado']").val()) > 0) {
              $("#periodos_planes").slideDown();
          }else{
            $("#periodos_planes").slideUp();
          }

      });

      $("#idcountry").on("change", function() {

          var idcountry = $(this).val();

          $('#idstate').find('option').remove().end().append(new Option("Seleccione un departamento", ""));

          axios.post('seleccionar-states', {
                'idcountry' : idcountry
              },{ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
              })
              .then(function (response) {

                  var states = [];    

                  states = response.data.states;   
                  
                  $.each( states, function( key, value ) {

                    $('#idstate').append(new Option(value.name, value.id));

                  });

              })
              .catch(function (error) {
                  console.log(error);
              });

      });

      $("#idstate").on("change", function() {

          var idstate = $(this).val();

          $('#idcity').find('option').remove().end().append(new Option("Seleccione un distrito", ""));

          axios.post('seleccionar-cities', {
                'idstate' : idstate
              },{ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
              })
              .then(function (response) {

                  var cities = [];    

                  cities = response.data.cities;   
                  
                  $.each( cities, function( key, value ) {

                    $('#idcity').append(new Option(value.name, value.id));

                  });

              })
              .catch(function (error) {
                  console.log(error);
              });

          });


        var DropPerfil = new Dropzone("#dropzone_subir_perfil", { 
                  url: "/fotos-profesional/subir", 
                  acceptedFiles: ".jpeg,.jpg,.png,.gif",
                  clickable: "#dropzone_subir_perfil button", 
                  maxFiles: 1, 
                  autoProcessQueue : false,
                  addRemoveLinks:true,
                  headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
                  },
                  //data: {idusuario: me.$idprofesional },
                  error: function(file, response){
                      return false;
                  },
                  success: function (file, done) {


                    
                  }
                  
                  });


        var DropAdicionales = new Dropzone("#dropzone_subir_adicionales", { 
                  url: "/fotos-profesional/subir", 
                  acceptedFiles: ".jpeg,.jpg,.png,.gif",
                  clickable: "#dropzone_subir_adicionales button", 
                  maxFiles: 4, 
                  autoProcessQueue : false,
                  addRemoveLinks:true,
                  headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
                  },
                  //data: {idusuario: me.$idprofesional },
                  error: function(file, response){
                      return false;
                  },
                  success: function (file, done) {


                    
                  }
                  
                  });

      //MOSTRAR LOS VALORES EN LA PANTALLA DE ACTIVAR
      $("input[name='nombre']").on("blur", function() {
          $("#label_nombre").html( $(this).val() );
      });

      $("input[name='apodo']").on("blur", function() {
        $("#label_apodo").html( $(this).val() );
      });

      $("input[name='email']").on("blur", function() {
        $("#label_email").html( $(this).val() );
      });

      $("input[name='fecha_nacimiento']").on("blur", function() {
        $("#label_nacimiento").html( $(this).val() );
      });

      $("select[name='sexo']").on("change", function() {

          if($(this).val() == "M"){
            $("#label_sexo").html( "MASCULINO" );
          }else if($(this).val() == "F"){
            $("#label_sexo").html( "FEMENINO" );
          }else{
            $("#label_sexo").html( "TRANSEXUAL" );
          }
        
      });

      $("input[name='orientacion']").on("change", function() {
        $("#label_orientacion").html( $(this).val() );
      });

      $("select[name='idcountry']").on("change", function() {
        $("#label_nacionalidad").html( $("select[name='idcountry'] option:selected").text() );
      });

      $("select[name='idstate']").on("change", function() {
        $("#label_provincia").html( $("select[name='idstate'] option:selected").text() );
      });

      $("select[name='idcity']").on("change", function() {
        $("#label_distrito").html( $("select[name='idcity'] option:selected").text() );
      });

      $("select[name='idcity']").on("change", function() {
        $("#label_distrito").html( $("select[name='idcity'] option:selected").text() );
      });

      $('input[name="categorias[]"]').click(function(){
          $("#lista-categorias").empty();
          $('input[name="categorias[]"]:checked').each(function(index, elem) {
              $("#lista-categorias").append('<li>' + $(this).data("dia") + '</li>');
          });
     });

     $('input[name="idiomas[]"]').click(function(){
          $("#lista-idiomas").empty();
          $('input[name="idiomas[]"]:checked').each(function(index, elem) {
              $("#lista-idiomas").append('<li>' + $(this).data("idioma") + '</li>');
          });
     });

     $("input[name='tatuaje']").on("change", function() {
          $("#tatuaje_label").html( ( $("input[name='tatuaje']:checked").val() == 1)? "SI" : "NO" );
     });

     $("input[name='piercing']").on("change", function() {
          $("#piercing_label").html( ( $("input[name='piercing']:checked").val() == 1)? "SI" : "NO" );
     });

    $("input[name='fumador']").on("change", function() {
      $("#fumador_label").html( ( $("input[name='fumador']:checked").val() == 1)? "SI" : "NO" );
    });

    $("select[name='pecho']").on("change", function() {
      $("#pecho_label").html( $("select[name='pecho'] option:selected").text() );
    });

    $("select[name='pene']").on("change", function() {
      $("#pene_label").html( $("select[name='pene'] option:selected").text() );
    });

    $("select[name='corte_intimo']").on("change", function() {
      $("#corte_label").html( $("select[name='corte_intimo'] option:selected").text() );
    });

    $("select[name='color_ojos']").on("change", function() {
      $("#ojos_label").html( $("select[name='color_ojos'] option:selected").text() );
    });

    $("select[name='color_cabello']").on("change", function() {
      $("#cabello_label").html( $("select[name='color_cabello'] option:selected").text() );
    });

    $("textarea[name='descripcion']").on("blur", function() {
        $("#label_descripcion").html( $(this).val() );
    });

    $('input[name="seguridad"]').click(function(){
        $("#seguridad_label").html( ( $("input[name='seguridad']").is(":checked"))? "SI" : "NO" );
    });

    $("input[name='frase']").on("blur", function() {
      $("#label_frase").html( $(this).val() );
    });

    $("input[name='pagina_web']").on("blur", function() {
      $("#label_web").html( $(this).val() );
    });

    $("input[name='celular']").on("blur", function() {
      $("#label_celular").html( $(this).val() );
    });

    $("input[name='tipo_contacto']").on("change", function() {
      $("#label_tipo_contacto").html( "(Contacto vía <strong>" +  $(this).val() + "</strong>)" );
    });   
    
    $("input[name='agenda']").click(function() {
      $("#agenda_label").html( ( $(this).is(":checked")? "SI" : "NO" ) );
    });   

    $("input[name='tipo_celular']").click(function() {
        
       if( $(this).is(":checked") ) {
          $("#icon_celular").removeClass().addClass("icon-whatsapp-green esp-icono-bio");
       }else{
          $("#icon_celular").removeClass().addClass("fa fa-mobile esp-icono-bio");
       }
        
    }); 

    

});