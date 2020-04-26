<!doctype html>
<html lang="es">
  
    @include('header')

  <body>
  
    @include('tops.top-free')

  <!--BANNER-->
  <div id="banner-internas">
    <div class="container-fluid no-container-fluid-esp">
      <img src="img/banner-internas/banner-internas-1.jpg" class="img-responsive">
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
            <a href="privado-free.php" class="cabecera-chicas-active">Anuncios</a>
          </div>
          <a class="cabecera-chicas-busqueda-detallada" data-toggle="modal" data-target="#exampleModal">BÚSQUEDA DETALLADA <i class="icon-search espacio-busqueda"></i></a>
        </div>
        <div class="titulo-cabecera-chicas">
          <h2>ANUNCIOS</h2>
          <h3>Anuncios de mujeres que están en casa o en una casa privada.</h3>
        </div>
        <div class="linea-morada-delgada">
          <div class="linea-morada-gruesa"></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-3">

            @include('menus.menu-lateral-categoria')

        </div>
        <div class="col-lg-9">
            <div class="slider-inferior">
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators circulos-slider-banner-inferior">
                  <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/slider/slider-inferior-1.jpg" alt="Slider inferior 1">
                    <div class="carousel-caption d-none d-md-block banner-inferior-texto-internas">
                      <h2>FRANCESKA</h2>
                      <h3>Masajista - Servicios completos</h3>
                      <h4>$ 150</h4>
                      <a href="no-reindex-free.php">VER PERFIL</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/slider/slider-inferior-1.jpg" alt="Slider inferior 1">
                    <div class="carousel-caption d-none d-md-block banner-inferior-texto-internas">
                      <h2>FRANCESKA</h2>
                      <h3>Masajista - Servicios completos</h3>
                      <h4>$ 150</h4>
                      <a href="no-reserva-free.php">VER PERFIL</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/slider/slider-inferior-1.jpg" alt="Slider inferior 1">
                    <div class="carousel-caption d-none d-md-block banner-inferior-texto-internas">
                      <h2>FRANCESKA</h2>
                      <h3>Masajista - Servicios completos</h3>
                      <h4>$ 150</h4>
                      <a href="no-reserva-free.php">VER PERFIL</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">

            @include('loop.content-profesional')

          </div>
        </div>
      </div>
    </div>

  </section>

  @include('footers.footer-free')

  @include('modal')

  </body>
</html>