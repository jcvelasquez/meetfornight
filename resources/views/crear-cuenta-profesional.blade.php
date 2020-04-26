<!doctype html>
<html lang="es">

    @include('header')

  <body>

  <script type="text/javascript">
  
   
    var dtTarifas;
    var dtEscort;
    var dtExtras;

    function limpiarTarifas(){

        //LIMPIAR SERVICIOS
        $("#servicio_opcion").val("");
        $("#servicio_tarifa").val("");

        //LIMPIAR ESCORT
        $("#escort_opcion").val("");
        $("#escort_tarifa").val("");

        //LIMPIAR EXTRAS
        $("#extra_opcion").val("");
        $("#extra_tarifa").val("");

    }

    function llenarTarifas(){

          $("#tarifario-servicio").empty();

          dtTarifas.rows().data().each(function(currentValue, index, array) {

              $("#tarifario-servicio").append('<li class="tarifario-horizontal"><div class="tarifario-morado">'+ array[index].opcion_tarifa + '</div><div class="tarifario-rojo">'+ array[index].costo_tarifa +'</div></li>');

          });


    }
  
    function agregarTarifa(){

          var servicio_opcion = $("#servicio_opcion").val();
          var servicio_tarifa = $("#servicio_tarifa").val();

          if( servicio_opcion != "" && servicio_tarifa > 0){
            var counter = dtTarifas.data().count() + 1;
            dtTarifas.row.add({ id: counter, opcion_tarifa : servicio_opcion, costo_tarifa: servicio_tarifa, categoria_tarifa: "SERVICIO" }).draw( false );
            limpiarTarifas();
          }else{
            Swal.fire('ERROR','Complete la informacion para poder agregar','error')
          }

          llenarTarifas();

    }

    function llenarTarifasEscort(){

      $("#tarifario-escort").empty();

      dtEscort.rows().data().each(function(currentValue, index, array) {

          $("#tarifario-escort").append('<li class="tarifario-horizontal"><div class="tarifario-morado">'+ array[index].opcion_tarifa + '</div><div class="tarifario-rojo">'+ array[index].costo_tarifa +'</div></li>');

      });

    }

    function agregarEscort(){

        var escort_opcion = $("#escort_opcion").val();
        var escort_tarifa = $("#escort_tarifa").val();

        if( escort_opcion != "" && escort_tarifa > 0){
          var counter = dtEscort.data().count() + 1;
          dtEscort.row.add({ id: counter, opcion_tarifa : escort_opcion, costo_tarifa: escort_tarifa, categoria_tarifa: "ESCORT" }).draw( false );
          limpiarTarifas();
        }else{
          Swal.fire('ERROR','Complete la informacion para poder agregar','error')
        }

        
        llenarTarifasEscort();   

    }

    function llenarTarifasExtras(){

        $("#tarifario-extras").empty();

        dtExtras.rows().data().each(function(currentValue, index, array) {

            $("#tarifario-extras").append('<li class="tarifario-horizontal"><div class="tarifario-morado">'+ array[index].opcion_tarifa + '</div><div class="tarifario-rojo">'+ array[index].costo_tarifa +'</div></li>');

        });


    }

    function agregarExtras(){

        var extra_opcion = $("#extra_opcion").val();
        var extra_tarifa = $("#extra_tarifa").val();

        if( extra_opcion != "" && extra_tarifa > 0){
          var counter = dtExtras.data().count() + 1;
          dtExtras.row.add({ id: counter, opcion_tarifa : extra_opcion, costo_tarifa: extra_tarifa, categoria_tarifa: "EXTRAS" }).draw( false );
          limpiarTarifas();
        }else{
          Swal.fire('ERROR','Complete la informacion para poder agregar','error')
        }

        llenarTarifasExtras();

    }


    function obtenerDisponibilidad(horas){

        return ( horas < 10 )?  "0" + horas + ":00" : horas + ":00";     

    }

  
  </script>

  <div id="widget">

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

        <form method="post" action="{{ route('registrar-profesional') }}" id="form-cuenta-profesional">
          @csrf

            <!-- SmartWizard html -->
            <div id="smartwizard">
                <ul style="margin-bottom: 80px;">
                    <li><a href="#planes"> 1 <span>PLANES</span> </a></li>
                    <li><a href="#perfil"> 2 <span>PERFIL</span> </a></li>
                    <li><a href="#servicios"> 3 <span>SERVICIOS</span></a></li>
                    <li><a href="#contacto"> 4 <span>CONTACTO</span></a></li>
                    <li><a href="#tarifas"> 5 <span>TARIFAS</span> </a></li>
                    <li><a href="#fotos"> 6 <span>FOTOS</span> </a></li>
                    <li><a href="#activar"> 7 <span>ACTIVAR</span></a></li>
                </ul>
                <div>
                    <div id="planes" class=""> 
                        @include('forms-crear-cuenta-profesional.tab-profesional-planes')
                    </div>
                    <div id="perfil" class="">
                        @include('forms-crear-cuenta-profesional.tab-profesional-perfil')
                    </div>
                    <div id="servicios" class="">  
                        @include('forms-crear-cuenta-profesional.tab-profesional-servicios')
                    </div>
                    <div id="contacto" class="">
                        @include('forms-crear-cuenta-profesional.tab-profesional-contacto') 
                    </div>
                    <div id="tarifas" class="">
                        @include('forms-crear-cuenta-profesional.tab-profesional-tarifas') 
                    </div>
                    <div id="fotos" class="">  
                        @include('forms-crear-cuenta-profesional.tab-profesional-fotos')
                    </div>
                    <div id="activar" class="">
                        @include('forms-crear-cuenta-profesional.tab-profesional-activar')
                    </div>
                </div>
            </div>
             <!-- END SmartWizard html -->    
            
        </form>

        <div class="row">
              <div class="col-lg-2">  </div> 
              <div class="col-lg-4 col-sm-12 espacio-campos">
                <button class="btn btn-primary btn-busqueda-detallada" id="prev-btn" type="button">PASO ANTERIOR</button>
              </div>
              <div class="col-lg-4 col-sm-12 espacio-campos">
                <button class="btn btn-primary btn-busqueda-detallada" id="next-btn" type="button">SIGUIENTE PASO</button>
              </div>
              <div class="col-lg-2">  </div> 
              <!-- <div class="col-lg-4">
                <button type="button" class="btn btn-primary btn-busqueda-detallada" style="background-color:green;">CONFIRMAR REGISTRO</button>
              </div> -->
            </div>

    </div>


  @include('footers.footer-perfil')


  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/meetfornight.js') }}"></script>

  <script src="{{ asset('js/crear_profesional_footer.js') }}"></script>

  </body>
</html>
