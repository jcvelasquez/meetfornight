<!doctype html>
<html lang="es">

@include('header')

<body>

  <script type="text/javascript">
    function obtenerDisponibilidad(horas) {

      return (horas < 10) ? "0" + horas + ":00" : horas + ":00";

    }
  </script>

  <div id="widget">

    @include('tops.top-crear-perfil')


    <div class="container espacio-perfil">

      <div class="titulo-perfil">
        <i class="icon-user-woman"></i>
        <h2>CREA TU PERFIL EMPRESA</h2>
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

      <form method="post" action="{{ route('registrar-empresa', app()->getLocale()) }}" id="form-cuenta-empresa">
        @csrf

            <!-- SmartWizard html -->
            <div id="smartwizardEmpresa">
              <ul style="margin-bottom: 80px;">
                <li><a href="#planes"> 1 <span>PLANES</span> </a></li>
                <li><a href="#perfil"> 2 <span>PERFIL</span> </a></li>
                <li><a href="#fotos"> 2 <span>FOTOS</span> </a></li>
                <li><a href="#activar"> 7 <span>ACTIVAR</span></a></li>
              </ul>
              <div>
                <div id="planes" class="">
                  @include('forms-crear-cuenta-empresa.tab-empresa-planes')
                </div>
                <div id="perfil" class="">
                  @include('forms-crear-cuenta-empresa.tab-empresa-perfil')
                </div>
                <div id="fotos" class="">
                  @include('forms-crear-cuenta-empresa.tab-empresa-fotos')
                </div>
                <div id="activar" class="">
                  @include('forms-crear-cuenta-empresa.tab-empresa-activar')
                </div>
              </div>
            </div>
            <!-- END SmartWizard html -->

            <div class="row justify-content-center cuerpo-perfil">
              <div class="col-lg-4 col-sm-12 espacio-campos">
                <button class="btn btn-primary btn-busqueda-detallada" id="prev-btn" type="button">PASO ANTERIOR</button>
              </div>
              <div class="col-lg-4 col-sm-12 espacio-campos" id="button_siguiente">
                <button class="btn btn-primary btn-busqueda-detallada" id="next-btn" type="button">SIGUIENTE PASO</button>
              </div>

              <div class="col-lg-4 col-sm-12 espacio-campos hide" id="button_confirmar">
                <button type="submit" id="btn-enviar" class="btn btn-primary btn-busqueda-detallada" style="background-color:green;">CONFIRMAR REGISTRO</button>
                <input type="hidden" id="idempresa" name="idempresa" value="">
              </div>
            </div>

        </form>

    </div>


    @include('footers.footer-perfil')


  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/meetfornight.js') }}"></script>

  <script src="{{ asset('js/crear_empresa_footer.js') }}"></script>

</body>

</html>