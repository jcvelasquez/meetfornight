<!doctype html>
<html lang="es">

    @include('header')

  <body>

    @include('tops.top-crear-perfil')


    <div class="container espacio-perfil">
    
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

        <form method="post" action="{{ route('perfil_usuario.store') }}">
          @csrf
            <!-- SmartWizard html -->
            <div id="smartwizard">
    
                <ul>
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

  <script type="text/javascript">
        $(document).ready(function(){
          
            


            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
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

            // Toolbar extra buttons
            /*var btnFinish = $('<button></button>').text('EMPEZAR')
                                             .addClass('btn btn-primary btn-busqueda-detallada')
                                             .on('click', function(){ alert('Finish Clicked'); });

            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){ $('#smartwizard').smartWizard("reset"); });*/


            // Smart Wizard
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'circles',
                    transitionEffect:'fade',
                    keyNavigation:false,
                    showStepURLhash: true,
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarButtonPosition: 'end',
                                      showNextButton: false,
                                      showPreviousButton: false
                                    }
            });


            // External Button Events
            $("#finish-btn").on("click", function() {
                // Reset wizard
                //$('#smartwizard').smartWizard("reset");
                alert('Finish Clicked');
                return true;
            });

            $("#prev-btn").on("click", function() {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            });

            $("#next-btn").on("click", function() {
                // Navigate next
                $('#smartwizard').smartWizard("next");
                return true;
            });

            $("#dropzone_perfil").dropzone({ url: "/file/post", clickable: "#dropzone_perfil button", maxFiles: 1, addRemoveLinks:true });
            $("#dropzone_identidad").dropzone({ url: "/file/post", clickable: "#dropzone_identidad button", maxFiles: 1, addRemoveLinks:true });


        });
    </script>

  </body>
</html>