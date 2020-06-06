<!doctype html>
<html lang="es">

  @include('header')

  <body>
    
  @include('cookieConsent::index')

  <div id="widget">

      @include('tops.top-free')

      <banner-superior></banner-superior> 

      <listado-home></listado-home> 
          
      <banner-inferior></banner-inferior>

      @include('footers.footer-free')

  </div>
  
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/meetfornight.js') }}"></script>

  </body>
</html>
