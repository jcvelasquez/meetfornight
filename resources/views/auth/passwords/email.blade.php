<!doctype html>
<html lang="es">

  @include('header')

  <body class="bg-intranet">
    <div class="centrar-intranet">
      <div class="acceso-intranet">
        <div class="bg-img-acceso bg-persona"></div>
        <div class="espacio-acceso-intranet">
          <div class="accesos-derecha"><a href="{{ route('home', app()->getLocale()) }}"><img src="{{asset('img/logo-blanco-intranet.png')}}"></a></div>

          <form class="intranet-accesos" action="{{ route('password.email', app()->getLocale()) }}" method="POST">
            @csrf

            <h2><strong>{{ __('RESTABLECE TU CLAVE') }}</strong></h2>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <p style="color:white;text-align:left;">{{ __('Enviaremos un mensaje con un link de restablecimiento de clave al correo electronico que usaste para tu registro.') }}</p>

            <div class="form-group row">

                <div class="col-md-12">
                    <input placeholder="{{ __('Ingresa tu correo electronico') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-landing">{{ __('ENVIAR') }}</button>
          </form>

        </div>
      </div>
    </div>

  </body>

</html>
