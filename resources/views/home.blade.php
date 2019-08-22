<!doctype html>
<html lang="es">

    @include('header')

  <body>

  <div id="widget">

  @include('tops.top-free')

  <!--BANNER-->
  <div id="banner">
    <div class="container-fluid no-container-fluid-esp">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>

        <div class="bg-morado"></div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/slider/slider.jpg" alt="slider1">
            <div class="carousel-caption d-none d-md-block banner-texto">
              <h2>MÉLANY</h2>
              <h3>Una experiencia inolvidable</h3>
              <a href="no-reserva-free.php">VER PERFIL</a>
            </div>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="img/slider/slider-2.jpg" alt="slider2">
            <div class="carousel-caption d-none d-md-block banner-texto">
              <h2>MÉLANY</h2>
              <h3>Una experiencia inolvidable</h3>
              <a href="no-reserva-free.php">VER PERFIL</a>
            </div>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="img/slider/slider-3.jpg" alt="slider3">
            <div class="carousel-caption d-none d-md-block banner-texto">
              <h2>MÉLANY</h2>
              <h3>Una experiencia inolvidable</h3>
              <a href="no-reserva-free.php">VER PERFIL</a>
            </div>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="img/slider/slider-4.jpg" alt="slider4">
            <div class="carousel-caption d-none d-md-block banner-texto">
              <h2>MÉLANY</h2>
              <h3>Una experiencia inolvidable</h3>
              <a href="no-reserva-free.php">VER PERFIL</a>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <!--CHICAS-->
  <section id="cuerpo">

    <div class="bg-chicas">
      <div class="container">
        <h1 class="titulo-chicas">¿QUÉ EXPERIENCIA TE GUSTARÍA TENER?</h1>
        <form>
          <div class="row">
            <div class="col-lg-3 col-sm-12 extendido">
              <button type="button" class="form-control filtros-chicas pointer especial-filtros-chicas" data-toggle="modal" data-target="#exampleModal">BÚSQUEDA DETALLADA<i class="icon-search espacio-busqueda"></i></button>
            </div>
          </div>
          <div class="row">
            <ul class="nav nav-pills mb-3 total-100" id="pills-tab" role="tablist">
              <li class="nav-item col-lg-3 col-sm-12">
                <button class="form-control filtros-chicas pointer nav-link" id="pills-privado-tab" data-toggle="pill" href="#pills-privado" role="tab" aria-controls="pills-privado" aria-selected="true"><i class="icon-massage esp-icono-privado-index"></i>ANUNCIOS</button>
              </li>
              <li class="nav-item col-lg-3 col-sm-12">
                  <button class="form-control filtros-chicas pointer nav-link" id="pills-edad-tab" data-toggle="pill" href="#pills-edad" role="tab" aria-controls="pills-edad" aria-selected="false"><i class="icon-user-woman esp-icono-privado-index tam-index"></i>EDAD</button>
              </li>
              <li class="nav-item col-lg-3 col-sm-12">
                <input type="text" class="form-control filtros-chicas icono-mapa" placeholder="ELIGE PROVINCIA">
              </li>
              <li class="nav-item col-lg-3 col-sm-12">
                <input type="text" class="form-control filtros-chicas icono-mapa" placeholder="ELIGE POBLACIÓN">
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="tab-content col-lg-12" id="pills-tabContent">
              <div class="tab-pane fade" id="pills-privado" role="tabpanel" aria-labelledby="pills-privado-tab">
                <div class="contenido-collapse">
                  <a class="boton-contenido-collapse" href="{{ url('mujeres') }}">
                    <i class="icon-c-mujer"></i>
                    <span>MUJERES</span>
                  </a>
                  <a class="boton-contenido-collapse" href="{{ url('gigolos') }}">
                    <i class="icon-c-gigolo"></i>
                    <span>GIGOLÓS</span>
                  </a>
                  <a class="boton-contenido-collapse" href="{{ url('gays') }}">
                    <i class="icon-c-homo"></i>
                    <span>GAYS</span>
                  </a>
                  <a class="boton-contenido-collapse" href="{{ url('habitaciones') }}">
                    <i class="icon-habitaciones"></i>
                    <span>HABITACIONES</span>
                  </a>
                  <a class="boton-contenido-collapse" href="{{ url('trans') }}">
                    <i class="icon-c-trans"></i>
                    <span>TRANS / TRAVESTIS</span>
                  </a>
                  <a class="boton-contenido-collapse" href="{{ url('fetiches') }}">
                    <i class="icon-c-fetiche"></i>
                    <span>FETICHES</span>
                  </a>
                  <a class="boton-contenido-collapse" href="{{ url('masajes') }}">
                    <i class="icon-c-masaje"></i>
                    <span>MASAJES</span>
                  </a>
                  <a class="boton-contenido-collapse" href="{{ url('parejas') }}">
                    <i class="icon-c-parejas"></i>
                    <span>PAREJAS</span>
                  </a>

                </div>
              </div>
              <div class="tab-pane fade" id="pills-presupuesto" role="tabpanel" aria-labelledby="pills-presupuesto-tab">
                <div class="contenido-collapse radio-presupuesto">
                  <label class="contenido-white">Presupuesto</label>
                  <!--<div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1">
                    <input type="radio" id="tatuaje(s)-si" name="tatuaje(s)" class="custom-control-input">
                    <label class="custom-control-label custom-control-label-espacio contenido-white" for="tatuaje(s)-si">/S.</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline no-margin-right-check col-lg-1">
                    <input type="radio" id="tatuaje(s)-no" name="tatuaje(s)" class="custom-control-input">
                    <label class="custom-control-label custom-control-label-espacio contenido-white" for="tatuaje(s)-no">$</label>
                  </div>-->
                  <div class="busqueda-detallada-range col-lg-5 no-espacio-range">
                    <span class="esp-i contenido-white">100</span>
                    <input class="range-example" type="text" min="100" max="500" value="100,200" name="points" step="1" />
                    <span class="esp-d contenido-white">500</span>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-edad" role="tabpanel" aria-labelledby="pills-edad-tab">
                <div class="contenido-collapse busqueda-detallada-range">
                  <label class="contenido-white">Edad</label>
                  <span class="esp-i contenido-white">18 años</span>
                  <input class="range-example" type="text" min="18" max="30" value="18,25" name="points" step="1" />
                  <span class="esp-d contenido-white">30 años</span>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


    <listado-profesionales></listado-profesionales>

    <div class="slider-inferior">
      <div class="container">
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators circulos-slider-banner-inferior">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
          </ol>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/slider/slider-inferior-1.jpg" alt="Slider inferior 1">
              <div class="carousel-caption d-none d-md-block banner-inferior-texto">
                <h2>FRANCESKA</h2>
                <h3>Masajista - Servicios completos</h3>
                <h4>$ 150</h4>
                <a href="no-reserva-free.php">VER PERFIL</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slider/slider-inferior-1.jpg" alt="Slider inferior 1">
              <div class="carousel-caption d-none d-md-block banner-inferior-texto">
                <h2>FRANCESKA</h2>
                <h3>Masajista - Servicios completos</h3>
                <h4>$ 150</h4>
                <a href="no-reserva-free.php">VER PERFIL</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slider/slider-inferior-1.jpg" alt="Slider inferior 1">
              <div class="carousel-caption d-none d-md-block banner-inferior-texto">
                <h2>FRANCESKA</h2>
                <h3>Masajista - Servicios completos</h3>
                <h4>$ 150</h4>
                <a href="no-reserva-free.php">VER PERFIL</a>
              </div>
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/slider/slider-inferior-1.jpg" alt="Slider inferior 1">
              <div class="carousel-caption d-none d-md-block banner-inferior-texto">
                <h2>FRANCESKA</h2>
                <h3>Masajista - Servicios completos</h3>
                <h4>$ 150</h4>
                <a href="no-reserva-free.php">VER PERFIL</a>
              </div>
            </div>

          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <nav aria-label="Page navigation example">
                <ul class="pagination ir-derecha paginador-meet">
                  <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                </ul>
              </nav>
            </div>
        </div>
    </div>

  </section>

  @include('footers.footer-free')

  @include('modal')
  </div>

  
  <script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/meetfornight.js') }}"></script>

  </body>
</html>
