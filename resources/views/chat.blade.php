<!doctype html>
<html lang="es">

  @include('header')

  <body>

  <div id="widget">

      @include('tops.top-free')

      <!--BANNER-->
      <div id="banner-chat">
        <div class="container-fluid no-container-fluid-esp" style="background:url({{ asset('img/bg_chat.jpg') }}) no-repeat; ">
        
            <div class="container">
              <div class="row padding-chat">

                <div class="col-lg-8">
                  <h2>CHAT MEET FOR NIGHT</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum condimentum imperdiet. Nullam urna mauris, auctor quis elit fringilla, gravida lacinia ipsum. Ut egestas vitae dui at laoreet. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                  <ul class="lista_chat">
                    <li>Chat coquin
                      <li>Discuter en groupe</li>
                      <li>Chat privee</li>
                      <li>Webcam</li>
                      <li>Envoyer des photos</li>
                      <li>100% gratuit</li>
                      <li>Passez line bon moment</li>
                      <li>Ensemble</li>
                  </ul>
                </div>

                <div class="col-lg-4 text-left">

                @if(Auth::check())
                    
                    <form class="logueado" action="#">
                      <h3> <span class="icon-webcam"></span> ACCESO AL CHAT</h3>
                      <div class="form-row">  
                          <div class="col-lg-12 col-sm-12">
                            <strong> Bienvenid@,<br/> {{ Auth::user()->nombre }}</strong>
                          </div>
                      </div>
                      <div class="form-row">  
                          <div class="col-lg-12 col-sm-12">
                            <button type="button" class="btn btn-primary mas-cuadrado">ACCEDER</button>
                          </div>
                      </div>
                    </form>

                @else

                  <form action="">
                    <h3> <span class="icon-webcam"></span> ACCESO AL CHAT</h3>
                    <div class="form-row">  
                        <div class="col-lg-12 col-sm-12">
                          <input type="text" name="nombre" placeholder="Correo electrónico *" class="form-control espacio-campos">
                        </div>
                    </div>
                    <div class="form-row">  
                        <div class="col-lg-12 col-sm-12">
                          <input type="password" name="nombre" placeholder="Clave *" class="form-control espacio-campos">
                        </div>
                    </div>
                    <div class="form-row">  
                        <div class="col-lg-12 col-sm-12">
                          <button type="button" class="btn btn-primary mas-cuadrado">INICIAR SESION</button>
                        </div>
                    </div>
                    <div class="form-row">  
                        <div class="col-lg-12 col-sm-12">
                             <a href="#">Olvidaste tu contraseña</a> <span>|</span> <a href="#">Crear tu Cuenta</a>
                        </div>
                    </div>
                  </form>

                @endif

 
                </div>

              </div>
            </div>
            


        </div>
      </div>
    
      @include('footers.footer-free')

  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/meetfornight.js') }}"></script>

  </body>
</html>
