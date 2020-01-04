<!doctype html>
<html lang="es">

    @include('header')

  <body>

  <div id="widget">

          @include('tops.top-free')

          <banner-superior></banner-superior>

          <section id="cuerpo">
            
              <listado-profesionales :categoria-data="{{json_encode('all')}}"></listado-profesionales>
              
              <banner-inferior></banner-inferior>

          </section>

          @include('footers.footer-free')

          <modal-denuncia></modal-denuncia>

  </div>

  
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/meetfornight.js') }}"></script>

  </body>
</html>
