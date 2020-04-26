  <!--TOP-->
  <header class="header-perfil">
  	<div class="container header-perfil-creado">
  		<a href="{{ url('/') }}"><img src="{{ asset('img/logo-blanco-intranet.png') }}"></a>
      <!--<span class="quedan-tiempo">30 días | 24 hrs | 60 min</span>
      <a href="" class="reactivar">RENOVAR</a>-->
  		<div class="usuario-creado">
  			<span><i class="icon-user-woman esp-icon-usuario-creado"></i> {{ Auth::user()->nombre }} </span>
  			<span><i class="icon-locked-padlock esp-icon-usuario-creado"></i><a href="{{ route('cerrar-sesion') }}" >Cerrar Sesión</a></span>
        <div class="dropdown show eliminar-usuario">
          <a class="btn x-circulo2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-x"></i>
          </a>
        </div>
  		</div>
  	</div>
  </header>