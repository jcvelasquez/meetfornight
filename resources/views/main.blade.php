<!doctype html>
<html lang="es">

  @include('header')

  <body class="flotando">


      <div class="msj-flotando">

        <div id="consultor">
            <button type="button" class="btn btn-flotando" onclick="mostrarFormulario();"><i class="icon-email"></i></button>
        </div>

        <div id="form-consultor">
           <form action="" method="post">
            <div class="header-form-flotante">
            <h2>Déjanos tu mensaje, sugerencias<br>y preguntas</h2>
            <button type="button" onclick="ocultarFormulario();" class="btn btn-cerrar-flotante"><i class="icon-x"></i></button>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombres *">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email *">
            </div>
            <div class="form-group">
              <textarea type="text" class="form-control" rows="5" id="exampleInputEmail1" placeholder="Mensaje *"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-busqueda-detallada">ENVIAR</button>
          </form>
        </div>

      </div>

      @yield('top')

      <div class="container espacio-perfil">

            <div class="col-lg-12 col-sm-12">
              <div class="navegacion-cabecera-chicas">
                <div class="botones-cabecera-chicas">
                  <a href="intranet.php">PANEL DE CONTROL</a>
                  <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                  <a href="perfil-creado.php" class="cabecera-chicas-active">
                  
                    @yield('title')

                  </a>
                </div>
                <div class="usuario-nombre">
                <h2>¡Hola  ! {{ Auth::user() }}  </h2>
                <span class="identificador">ID: 4789020</span>
                </div>
              </div>
            </div>

        <div class="row cuerpo-perfil">
          <div class="col-lg-3 col-sm-12">
              
          @yield('menu-lateral')

          </div>
          <div class="col-lg-9 col-sm-12">

              <div id="widget">
                  @yield('content')
              </div>
              
          </div>
        </div>
      </div>


      @include('footers.footer-perfil')

      <script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/meetfornight.js') }}"></script>

  </body>

</html>
