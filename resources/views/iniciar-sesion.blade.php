<!doctype html>
<html lang="es">

  @include('header')

  <body class="bg-intranet">
    <div class="centrar-intranet">
      <div class="acceso-intranet">
        <div class="bg-img-acceso bg-persona"></div>
        <div class="espacio-acceso-intranet">
          <div class="accesos-derecha"><a href="/"><img src="img/logo-blanco-intranet.png"></a></div>

          <form class="intranet-accesos" action="{{ route('comprobar-credenciales') }}" method="POST">
            @csrf

            <h2>MI CUENTA</h2>
            <div class="form-group">
             
              <input id="email" type="email" placeholder="Correo electronico" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              {!!$errors->first('email','<span class="invalid-feedback">:message</span>')!!}

            </div>
            <div class="form-group">

              <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
              {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}

            </div>
            <div class="form-group">

              <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember" style="color:#fff;">
                      {{ __('Recordarme') }}
                  </label>
              </div>

            </div>
            <button type="submit" class="btn btn-primary btn-landing">INGRESAR</button>
          </form>

          <div class="accesos-derecha">

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña') }}
                </a>
            @endif
          
            
          </div>
        </div>
      </div>
    </div>

  </body>

</html>
