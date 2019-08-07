<!doctype html>
<html lang="es">

  @include('header')

  <body class="bg-intranet">
    <div class="centrar-intranet">
      <div class="acceso-intranet">
        <div class="bg-img-acceso bg-persona"></div>
        <div class="espacio-acceso-intranet">
          <div class="accesos-derecha"><a href="index-free.php"><img src="img/logo-blanco-intranet.png"></a></div>

          <form class="intranet-accesos" action="{{ route('iniciar-sesion') }}" method="POST">
            @csrf

            <h2>MI CUENTA</h2>
            <div class="form-group">

<!--               <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Usuario">
 -->              
              <input id="email" type="email" placeholder="Correo electronico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>
            <div class="form-group">

              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

<!--               <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
 -->            
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
