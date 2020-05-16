$(document).ready(function () {

      var existePerfil = false;
      var existeIdentidad = false;

      // validate signup form on keyup and submit
      $("#form-cuenta-usuario").validate({
        ignore: ":hidden",
        debug: false,
        rules: {
          radioPlan: {
            required: true
          },
          nombre: {
            required: true
          },
          apodo: {
            required: true
          },
          password: {
            required: true
          },
          confirmar_clave: {
            required: true,
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
          idcountry: {
            required: true
          },
          idstate: {
            required: true
          },
          idcity: {
            required: true
          },
          fecha_nacimiento: {
            required: true
          },
          sexo: {
            required: true
          },
          nacionalidad: {
            required: true
          },
          idioma: {
            required: true
          },
          celular: {
            required: true
          },
        },
        errorPlacement: function (error, element) {
          //error.appendTo(element.parent("div").next("td"));
          error.insertAfter(element);

          if (element.is(":radio")) {
            error.insertAfter(element.parents('.section_planes'));
          } else { // This is the default behavior 
            error.insertAfter(element);
          }

        },
        doNotHideMessage: false,
        //errorClass: "invalid",
        messages: {
          nombre: "El nombre es obligatorio",
          apodo: "El apodo es obligatorio",
          email: {
            email: "Ingrese un email válido",
            required: "El email es obligatorio",
            remote: jQuery.validator.format("El correo {0} ya está en uso.")
          },
          confirmar_email: "Debe confirmar su email",
          confirmar_clave: "Debe confirmar su clave",
          password: "La clave es obligatoria",
          fecha_nacimiento: "La fecha de nacimiento es obligatoria",
          sexo: "El sexo es obligatorio",
          nacionalidad: "La nacionalidad es obligatoria",
          idioma: "El idioma es obligatorio",
          radioPlan: "Seleccione un plan para su cuenta",
          idcountry: "Selecciona una opcion",
          idstate: "Selecciona una opcion",
          idcity: "Selecciona una opcion",
          celular: "El celular es obligatorio"
        },
        submitHandler: function () {

          //DESACTIVO LOS BOTONES
          $("#prev-btn").attr('disabled', true);
          $("#next-btn").attr('disabled', true);
          $("#btn-enviar").attr('disabled', true);


          axios.post('registrar-usuario', {
            'nombre': $('#nombre').val(),
            'apodo': $('#apodo').val(),
            'email': $('#email').val(),
            'password': $('#password').val(),
            'fecha_nacimiento': $('#fecha_nacimiento').val(),
            'sexo': $('#sexo').val(),
            'idcountry': $('#idcountry').val(),
            'idcity': $('#idcity').val(),
            'idstate': $('#idstate').val(),
            'celular': $('#celular').val(),
            'idplan': $("input[name='radioPlan']:checked").val(),
            'meses': 0
          }, {
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
          })
            .then(function (response) {

              if(response.data.status == "success"){

                  $('#idusuario').val(response.data.idusuario);

                  if(DropIdentidad.getQueuedFiles().length > 0){
                    DropIdentidad.processQueue();
                    existeIdentidad = true;
                  }
                    
                  if(DropPerfil.getQueuedFiles().length > 0) {
                      DropPerfil.processQueue();
                      existePerfil = true;
                  }

                  if(!existeIdentidad && !existePerfil){
                    Swal.fire('CONFIRMACIÓN', "Se registró la cuenta usuario, deberá confirmar el correo electrónico registrado para poder iniciar sesión." , 'success' ).then(function() {  window.location = "/iniciar-sesion";  });
                  }

              }else{
                Swal.fire("ERROR", "Hubo un error en el registro de la cuenta. Comuniquese con el area de soporte." , "error" );
              }


            })
            .catch(function (error) {
              // handle error
              console.log(error);
            });

        }
      });



      var DropPerfil = new Dropzone("#dropzone_perfil", {
        url: "registrar-usuario-fotos",
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        clickable: "#dropzone_perfil button",
        maxFiles: 1,
        autoProcessQueue: false,
        addRemoveLinks: true,
        headers: {
          'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
        },
        error: function (file, response) {
          return false;
        },
        success: function (file, done) {

          setTimeout( checkUploads() , 1000);

        },
        init: function () {

          this.on("maxfilesreached", function (file) {
            $('#btn_subir_perfil').attr('disabled', true);
          });

          this.on("maxfilesexceeded", function (file) {
            this.removeFile(file);
          });

          this.on("sending", function (file, xhr, formData) {
            formData.append("idusuario", $("#idusuario").val());
          });

          this.on("removedfile", function (file) {
            if (this.files.length < 1) $('#btn_subir_perfil').attr('disabled', false);
          });

          this.on("removedfile", function (file) {
            $('#btn_subir_perfil').attr('disabled', false);
          });

          this.on("thumbnail", function (file, dataUrl) {

            $("#foto_banner").attr("src", dataUrl);

          });

        }

      });


      var DropIdentidad = new Dropzone("#dropzone_identidad", {
        url: "registrar-usuario-fotos",
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        clickable: "#dropzone_identidad button",
        maxFiles: 1,
        autoProcessQueue: false,
        addRemoveLinks: true,
        headers: {
          'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
        },
        error: function (file, response) {
          return false;
        },
        success: function (file, done) {

          setTimeout( checkUploads() , 1000);

        },
        init: function () {

          this.on("maxfilesreached", function (file) {
            $('#btn_subir_identidad').attr('disabled', true);
          });

          this.on("maxfilesexceeded", function (file) {
            this.removeFile(file);
          });

          this.on("sending", function (file, xhr, formData) {
            formData.append("idusuario", $("#idusuario").val());
          });

          this.on("removedfile", function (file) {
            if (this.files.length < 1) $('#btn_subir_identidad').attr('disabled', false);
          });

          this.on("removedfile", function (file) {
            $('#btn_subir_identidad').attr('disabled', false);
          });

          this.on("thumbnail", function (file, dataUrl) {

            $("#foto_banner").attr("src", dataUrl);

          });

        }

      });

      function checkUploads(){
          
          if (DropPerfil.getUploadingFiles().length === 0 && DropIdentidad.getQueuedFiles().length === 0) {

            Swal.fire('CONFIRMACIÓN', "Se registró la cuenta profesional, deberá confirmar el correo electrónico registrado para poder iniciar sesión." , 'success' ).then(function() {  window.location = "/iniciar-sesion";  });

          }

      }



      $("#idcountry").on("change", function () {

        var idcountry = $(this).val();

        if (idcountry == 169) { //PANAMA

          $("#moneda_pen").hide();
          $("#moneda_eur").hide();
          $("#moneda_usd").show();


        } else if (idcountry == 172) { //PERU

          $("#moneda_pen").show();
          $("#moneda_eur").hide();
          $("#moneda_usd").show();

        } else { //ESPAÑA

          $("#moneda_pen").hide();
          $("#moneda_eur").show();
          $("#moneda_usd").hide();

        }

        $('#idstate').find('option').remove().end().append(new Option("Seleccione un departamento", ""));

        axios.post('seleccionar-states', {
          'idcountry': idcountry
        }, {
          headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        })
          .then(function (response) {

            var states = [];

            states = response.data.states;

            $.each(states, function (key, value) {

              $('#idstate').append(new Option(value.name, value.id));

            });

          })
          .catch(function (error) {
            console.log(error);
          });

      });

      $("#fecha_nacimiento").datepicker({
        dateFormat: "dd/mm/yyyy",
        clearBtn: true
      });

      $("#idstate").on("change", function () {

        var idstate = $(this).val();

        $('#idcity').find('option').remove().end().append(new Option("Seleccione un distrito", ""));

        axios.post('seleccionar-cities', {
          'idstate': idstate
        }, {
          headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        })
          .then(function (response) {

            var cities = [];

            cities = response.data.cities;

            $.each(cities, function (key, value) {

              $('#idcity').append(new Option(value.name, value.id));

            });

          })
          .catch(function (error) {
            console.log(error);
          });

      });


      // Step show event
      $("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
        //alert("You are on step "+stepNumber+" now");
        if (stepPosition === 'first') {
          $("#prev-btn").attr('disabled', true);

          //OCULTAR BOTON CONFIRMAR
          $("#button_confirmar").hide();

          //MOSTRAR BOTON SIGUIENTE
          $("#button_siguiente").show();

        } else if (stepPosition === 'final') {

          $("#next-btn").attr('disabled', true);

          //MOSTRAR BOTON CONFIRMAR
          $("#button_confirmar").show();

          //OCULTAR BOTON SIGUIENTE
          $("#button_siguiente").hide();

        } else {

          $("#prev-btn").attr('disabled', false);
          $("#next-btn").attr('disabled', false);

          //MOSTRAR BOTON SIGUIENTE
          $("#button_siguiente").show();

          //OCULTAR BOTON CONFIRMAR
          $("#button_confirmar").hide();

        }
      });


      // Smart Wizard
      $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'circles',
        transitionEffect: 'fade',
        autoAdjustHeight: false,
        keyNavigation: false,
        showStepURLhash: true,
        toolbarSettings: {
          toolbarPosition: 'bottom',
          toolbarButtonPosition: 'end',
          showNextButton: false,
          showPreviousButton: false
        }
      });

      $('#smartwizard').smartWizard("reset");

      $("#prev-btn").on("click", function () {
        $('#smartwizard').smartWizard("prev");
        return true;
      });

      $("#next-btn").on("click", function () {
        if ($("#form-cuenta-usuario").valid()) {
          $('#smartwizard').smartWizard("next");
          return true;
        }
      });


      //MOSTRAR LOS VALORES EN LA PANTALLA DE ACTIVAR
      $("input[name='nombre']").on("blur", function() {
          $("#nombre_label").html( $(this).val() );
      });

      $("input[name='apodo']").on("blur", function() {
        $("#apodo_label").html( $(this).val() );
      });

      $("input[name='email']").on("blur", function() {
        $("#email_label").html( $(this).val() );
      });

      $("select[name='idcountry']").on("change", function() {
        $("#nacionalidad_label").html( $("select[name='idcountry'] option:selected").text() );
      });

      $("select[name='idstate']").on("change", function() {
        $("#provincia_label").html( $("select[name='idstate'] option:selected").text() );
      });

      $("select[name='idcity']").on("change", function() {
        $("#distrito_label").html( $("select[name='idcity'] option:selected").text() );
      });      

      $("input[name='celular']").on("blur", function() {
        $("#celular_label").html( $(this).val() );
      });

      $("input[name='plan_seleccionado']").on("change", function () {

        $("#plan_label").html( "Cuenta: " + $(this).parent(".container-radio").find("input[name='plan_seleccionado']:checked").val() );

        //SI EL PRECIO DEL PLAN SELECCIONADO ES MAS DE CERO MOSTRAR PERIODOS
        /*if (parseFloat($(this).parent(".container-radio").find("input[name='precio_seleccionado']").val()) > 0) {
          $("#periodos_planes").slideDown();
        } else {
          $("#periodos_planes").slideUp();
        }*/

      });


      $("select[name='sexo']").on("change", function() {

        if($(this).val() == "M"){
          $("#sexo_label").html( "MASCULINO" );
        }else if($(this).val() == "F"){
          $("#sexo_label").html( "FEMENINO" );
        }else{
          $("#sexo_label").html( "TRANSEXUAL" );
        }
      
    });

    $("input[name='fecha_nacimiento']").on("blur", function() {
      $("#nacimiento_label").html( $(this).val() );
    });




});