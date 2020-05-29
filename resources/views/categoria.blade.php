<!doctype html>
<html lang="es">

  @include('header')

  <body>

  <div id="widget">

      @include('tops.top-free')

      <!--BANNER-->
      <div id="banner-internas">
        <div class="container-fluid no-container-fluid-esp">
          <img src="{{ asset('img/banner-internas/banner-internas-1.jpg') }}" class="img-responsive">
        </div>
      </div>

      <!--CHICAS-->
      <section>

        <div class="container">
          <div class="cabecera-chicas">
            <div class="navegacion-cabecera-chicas">
              <div class="botones-cabecera-chicas">
                <a href="index-free.php">Inicio</a>
                <span><i class="fa fa-angle-right"></i></span>
                <a href="privado-free.php">Anuncios</a>
                <span><i class="fa fa-angle-right"></i></span>
                <a href="mujeres-free.php" class="cabecera-chicas-active">Mujeres</a>
              </div>
              <a class="cabecera-chicas-busqueda-detallada" data-toggle="modal" data-target="#exampleModal">BÚSQUEDA DETALLADA <i class="icon-search espacio-busqueda"></i></a>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-3">
            
                @include('menus.menu-lateral-categoria')

            </div>
            <div class="col-lg-9">
              <div class="titulo-cabecera-chicas-sub">
                <h2 style="text-transform:uppercase;">{!! $title !!}</h2>
                <h3>Anuncios de {!! $title !!} que están en casa o en una casa privada.</h3>
              </div>
              <div class="linea-morada-delgada-sub">
                <div class="linea-morada-gruesa-sub"></div>
              </div>
              <div class="row"> 

                <listado-profesionales :categoria-data="{{json_encode($title)}}"></listado-profesionales>

              </div>

            </div>
          </div>
        </div>

      </section>

      @include('footers.footer-free')

<!--       @include('modal')
 -->
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/meetfornight.js') }}"></script>

  </body>
</html>
