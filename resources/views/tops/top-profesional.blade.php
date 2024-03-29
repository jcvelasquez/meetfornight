  <!--TOP-->
  <header class="header-perfil">
  	<div class="container header-perfil-creado">
  		<a href="{{ route('home', app()->getLocale()) }}"><img src="{{ asset('img/logo-blanco-intranet.png') }}"></a>
      <span class="quedan-tiempo">30 días | 24 hrs | 40 min</span>
      <a href="" class="reactivar">RENOVAR</a>
  		<div class="usuario-creado">
  			<span><i class="icon-user-woman esp-icon-usuario-creado"></i> {{ Auth::user()->nombre }}</span>
        <span><i class="icon-locked-padlock esp-icon-usuario-creado"></i><a href="{{ route('cerrar-sesion', app()->getLocale()) }}">Cerrar Sesión</a></span>
        
        <!-- BOTON ROJO -->
        <div class="dropdown show eliminar-usuario">
          <a class="btn x-circulo2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-trash"></i>
          </a>
          <form class="dropdown-menu dropdown-menu-right eliminar-opciones p-4">
            <div class="form-group custom-radio">
              <input type="radio" id="suspender" name="opciones" class="custom-control-input">
              <label class="custom-control-label custom-control-label-espacio" for="suspender">Suspender publicación</label>
            </div>
            <div class="dropdown-divider eliminar-borde"></div>
            <div class="form-group custom-radio">
              <input type="radio" id="eliminar" name="opciones" class="custom-control-input">
              <label class="custom-control-label custom-control-label-espacio" for="eliminar">Eliminar cuenta por completo</label>
            </div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
          </form>
        </div>
        <!-- FIN BOTON ROJO -->

  		</div>
  	</div>
  </header>
