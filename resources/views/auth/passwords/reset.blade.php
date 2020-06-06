<!doctype html>
<html lang="es">

  @include('header')

  <body class="bg-intranet">
    <div class="centrar-intranet">
      <div class="acceso-intranet">
        <div class="bg-img-acceso bg-persona"></div>
        <div class="espacio-acceso-intranet">
          <div class="accesos-derecha"><a href="{{ route('home', app()->getLocale()) }}"><img src="{{asset('img/logo-blanco-intranet.png')}}"></a></div>

                <form class="intranet-accesos" method="POST" action="{{ route('password.update', app()->getLocale() ) }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <h2><strong>{{ __('RESTABLECE TU CLAVE') }}</strong></h2>

                    <div class="form-group row">

                        <div class="col-md-12">
                            <input id="email" placeholder="{{ __('Ingresa tu correo electrónico') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="password" placeholder="{{ __('Ingresa tu nueva clave') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="password-confirm" placeholder="{{ __('Confirma tu nueva clave') }}" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-landing">
                                {{ __('GUARDAR') }}
                            </button>
                        </div>
                    </div>
                </form>

        </div>
      </div>
    </div>

  </body>

</html>
