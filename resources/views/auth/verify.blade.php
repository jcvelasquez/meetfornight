<!doctype html>
<html lang="es">

  @include('header')

  <body class="bg-intranet">

    <div class="centrar-intranet">
      <div class="acceso-intranet">
        <div class="bg-img-acceso bg-persona"></div>
        <div class="espacio-acceso-intranet">
          <div class="accesos-derecha"><a href="index-free.php"><img src="../img/logo-blanco-intranet.png"></a></div>

          <form class="intranet-accesos" action="#" method="POST">
            @csrf

            <h2 style="text-align:center;"><strong>VERIFICA TU CUENTA</strong></h2>
          
   
            <div class="form-group" style="color:#fff;">

                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Un nuevo enlace de activación ha sido enviado a tu email.') }}
                    </div>
                @endif

                {{ __('Antes de ingresar a tu perfil, debes confirmar tu correo electrónico con el enlace de verificación que se envió a tu bandeja.') }}
                {{ __('Si no recibiste el email') }}, <a class="enlace_verificacion" href="{{ route('verification.reenviar') }}">{{ __('haz clic aquí para recibir un nuevo código') }}</a>.

            </div>
          </form>

        </div>
      </div>
    </div>

  </body>

</html>





