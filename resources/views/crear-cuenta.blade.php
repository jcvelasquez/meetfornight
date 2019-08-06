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
            <a href="index.php">Inicio</a>
            <span><i class="fa fa-angle-right"></i></span>
            <a href="acceder.php" class="cabecera-chicas-active">Acceder</a>
          </div>
        </div>

        <div class="titulo-cabecera-chicas">
          <h2>CREAR CUENTA</h2>
          <h3>Elige el perfil que deseas crear y regístrate en nuestra plataforma Meet for Night</h3>
        </div>
        <div class="linea-morada-delgada-acceder">
          <div class="linea-morada-gruesa"></div>
        </div>
      </div>
    </div>

    <div class="container espacio-bottom-acceder">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="tipo-cuenta-acceder bg-tipo-plomo">
            <span class="subtitulo-acceder">Perfil</span>
            <span class="titulo-acceder">Empresa</span>
            <img src="img/acc-1.png" class="img-responsive">
            <div class="linea-acc"></div>
            <p class="text-acceder">Si eres una empresa, establecimiento o profesional del sector y deseas anunciarte.</p>
            <div class="centrar-btn-acceder"><a href="intranet-empresa.php" class="btn-acceder">INGRESAR</a></div>

            <div class="lateral-triangulo">
              <img src="img/triangulo-beta-free.png">
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="tipo-cuenta-acceder bg-tipo-cuenta">
            <span class="subtitulo-acceder precio-blanco">Perfil</span>
            <span class="titulo-acceder precio-blanco">Profesional</span>
            <img src="img/acc-2.png" class="img-responsive">
            <div class="linea-acc"></div>
            <p class="text-acceder precio-blanco">Si estás ofreciendo tus servicios sensuales o un alojamiento para ello y deseas anunciarlos.</p>
            <div class="centrar-btn-acceder"><a href="{{ url('crear-cuenta-profesional') }}" class="btn-acceder">INGRESAR</a></div>

  
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="tipo-cuenta-acceder bg-tipo-plomo">
            <span class="subtitulo-acceder">Perfil</span>
            <span class="titulo-acceder">Usuario</span>
            <img src="img/acc-3.png" class="img-responsive">
            <div class="linea-acc"></div>
            <p class="text-acceder">Sé un usuario exclusivo de Meet For Night y accede a más beneficios en nuestra comunidad.</p>
            <div class="centrar-btn-acceder"><a href="{{ url('crear-cuenta-usuario') }}" class="btn-acceder">INGRESAR</a></div>

  
          </div>
        </div>
      </div>
    </div>

  </section>

  @include('footers.footer-free')

  @include('modal')


  </body>
</html>