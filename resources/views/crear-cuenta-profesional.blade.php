<!doctype html>
<html lang="es">

    @include('header')

  <body>

  <div id="widget">

    @include('tops.top-crear-perfil')


    <div class="container espacio-perfil">
    
        <div class="titulo-perfil">
          <i class="icon-user-woman"></i>
          <h2>CREA TU PERFIL</h2>
        </div>

        <form method="post" action="{{ route('registrar-profesional') }}" id="form-cuenta-profesional">
          @csrf

            <!-- SmartWizard html -->
            <div id="smartwizard">
    
                <ul>
                    <li><a href="#planes"> 1 <span>PLANES</span> </a></li>
                    <li><a href="#perfil"> 2 <span>PERFIL</span> </a></li>
                    <li><a href="#servicios"> 3 <span>SERVICIOS</span></a></li>
                    <li><a href="#contacto"> 4 <span>CONTACTO</span></a></li>
                    <li><a href="#tarifas"> 1 <span>TARIFAS</span> </a></li>
                    <li><a href="#fotos"> 2 <span>FOTOS</span> </a></li>
                    <li><a href="#pago"> 3 <span>PAGO</span></a></li>
                </ul>

                <div>
                    <div id="planes" class="">
                    
                      @include('forms-crear-cuenta-profesional.tab-planes')
                  
                    </div>
                    <div id="perfil" class="">

                      @include('forms-crear-cuenta-profesional.tab-perfil')

                    </div>

                    <div id="servicios" class="">

                      @include('forms-crear-cuenta-profesional.tab-servicios')
                    
                    </div>
                    <div id="contacto" class="">

                      @include('forms-crear-cuenta-profesional.tab-contacto')

                    </div>
                    <div id="tarifas" class="">

                      @include('forms-crear-cuenta-profesional.tab-tarifas')

                    </div>
                    <div id="fotos" class="">

                      @include('forms-crear-cuenta-profesional.tab-fotos')

                    </div>
                    <div id="pago" class="">

                      @include('forms-crear-cuenta-profesional.tab-pago')

                    </div>
                </div>

            </div>

        </form>

    </div>


  @include('footers.footer-perfil')


  </div>

  <script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/meetfornight.js') }}"></script>

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
            var btnFinish = $('<button></button>').text('Finish')
                                             .addClass('btn btn-info')
                                             .on('click', function(){ alert('Finish Clicked'); });

            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){ $('#smartwizard').smartWizard("reset"); });


            // Smart Wizard
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'circles',
                    transitionEffect:'fade',
                    showStepURLhash: true,
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarButtonPosition: 'end',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    }
            });


            // External Button Events
            /*$("#reset-btn").on("click", function() {
                // Reset wizard
                $('#smartwizard').smartWizard("reset");
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
            });*/


        });
    </script>



  </body>
</html>
