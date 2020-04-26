<!doctype html>
<html lang="es">

    @include('header')

  <body>

  <div id="widget">

    @include('tops.top-crear-perfil')


    <div class="container espacio-perfil" style="margin-bottom:30px;">
    
        <div class="titulo-perfil">
          <i class="icon-user-woman"></i>
          <h2>CREA TU PERFIL</h2>
        </div>

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif

        @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
        @endif

        <form method="post" action="{{ route('registrar-usuario') }}" id="form-cuenta-usuario">
          @csrf
            <!-- SmartWizard html -->
            <div id="smartwizard">
    
                <ul style="margin-bottom:80px;">
                    <li><a href="#planes"> 1 <span>PLANES</span> </a></li>
                    <li><a href="#perfil"> 2 <span>PERFIL</span> </a></li>
                    <li><a href="#seguridad"> 3 <span>SEGURIDAD</span></a></li>
                    <li><a href="#activar"> 4 <span>ACTIVAR</span></a></li>
                </ul>
                <div>
                    <div id="planes" class="">
                      @include('forms-crear-cuenta-usuario.tab-usuario-planes')
                    </div>
                    <div id="perfil" class="">
                      @include('forms-crear-cuenta-usuario.tab-usuario-perfil')
                    </div>
                    <div id="seguridad" class="">
                      @include('forms-crear-cuenta-usuario.tab-usuario-seguridad')
                    </div>
                    <div id="activar" class="">
                      @include('forms-crear-cuenta-usuario.tab-usuario-activar')
                    </div>
                </div>
            </div>
            <!-- END SmartWizard html -->

        </form>

          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-sm-12 espacio-campos">
              <button class="btn btn-primary btn-busqueda-detallada" id="prev-btn" type="button">PASO ANTERIOR</button>
            </div>
            <div class="col-lg-4 col-sm-12 espacio-campos">
              <button class="btn btn-primary btn-busqueda-detallada" id="next-btn" type="button">SIGUIENTE PASO</button>
            </div>
            <div class="col-lg-2"></div>
          </div>

    </div>

  @include('footers.footer-perfil')

</div>


<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/meetfornight.js') }}"></script>

<script type="text/javascript">

        $(document).ready(function(){

          
            // validate signup form on keyup and submit
            $("#form-cuenta-usuario").validate({
              ignore: ":hidden",
              debug: true,
              rules: {
                radioPlan: {
                  required : true
                },
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

                  if ( element.is(":radio") ) {
                      error.insertAfter( element.parents('.section_planes') );
                  }else{ // This is the default behavior 
                      error.insertAfter( element );
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
                radioPlan: "Seleccione un plan para su cuenta"
              },
              submitHandler: function() {

                  //DESACTIVO LOS BOTONES
                  $("#prev-btn").attr('disabled', true);
                  $("#next-btn").attr('disabled', true);
                  $(".btn-primary").attr('disabled', true);
                  
                
                  axios.post('registrar-usuario', {
                      'nombre' : $('#nombre').val(),
                      'apodo' : $('#apodo').val(),
                      'email' : $('#email').val(),
                      'password' : $('#password').val(),
                      'fecha_nacimiento' : $('#fecha_nacimiento').val(),
                      'sexo' : $('#sexo').val(),
                      'nacionalidad' : $('#nacionalidad').val(),
                      'idioma' : $('#idioma').val(),
                      'celular' : $('#celular').val(),
                      'idplan' : $("input[name='radioPlan']").val(),
                      'meses' : 6
                    }, { headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                    })
                    .then(function (response) {

                        var _mensaje = response.data.mensaje;

                        Swal.fire({
                          title: 'CONFIRMACION',
                          icon: 'success',
                          text: _mensaje,
                          showCancelButton: false,
                          confirmButtonText: 'ACEPTAR'
                        }).then((result) => {
                          if (result.value) {
                            
                            window.location.href = '/iniciar-sesion';

                          }
                        })

                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    });

              }
            });
          

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");
               if(stepPosition === 'first'){
                   $("#prev-btn").addClass('disabled').attr('disabled', true);
               }else if(stepPosition === 'final'){
                   $("#next-btn").addClass('disabled').attr('disabled', true);
               }else{
                   $("#prev-btn").removeClass('disabled').attr('disabled', false);
                   $("#next-btn").removeClass('disabled').attr('disabled', false);
               }
            });

          
            // Smart Wizard
            $('#smartwizard').smartWizard({
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

            $('#smartwizard').smartWizard("reset"); 


            //MOSTRAR LOS VALORES EN LA PANTALLA DE ACTIVAR
            $("#nombre").on("blur", function() {
                $("#nombre_label").html( $(this).val() );
            });

            $("#email").on("blur", function() {
                $("#email_label").html( $(this).val() );
            });

            $("#celular").on("blur", function() {
                $("#movil_label").html( $(this).val() );
            });

            $("input[name='radioPlan']").on("change", function() {

                $("#plan_label").html( "Cuenta: " + $(this).parent(".container-radio").find("input[name='plan_seleccionado']").val() );

                //SI EL PRECIO DEL PLAN SELECCIONADO ES MAS DE CERO MOSTRAR PERIODOS
                if(parseFloat($(this).parent(".container-radio").find("input[name='precio_seleccionado']").val()) > 0) {
                    $("#periodos_planes").slideDown();
                }else{
                  $("#periodos_planes").slideUp();
                }
             
            });


            $("#prev-btn").on("click", function() {
                $('#smartwizard').smartWizard("prev");
                return true;
            });
            
            $("#next-btn").on("click", function() {
                if ( $("#form-cuenta-usuario").valid() ){        
                  $('#smartwizard').smartWizard("next");
                  return true;
                }
            });

            $("#dropzone_perfil").dropzone({ url: "/file/post", clickable: "#dropzone_perfil button", maxFiles: 1, addRemoveLinks:true });
            $("#dropzone_identidad").dropzone({ url: "/file/post", clickable: "#dropzone_identidad button", maxFiles: 1, addRemoveLinks:true });


        });
    </script>



  </body>
</html>
