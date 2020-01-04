  <!--TOP-->
  <header>
    <div class="header-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo-top.png') }}" class="logo-responsive-top"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto-der">
              <!--
              <li class="nav-item espaciado-btn-header-top active">
                <a class="nav-link rojo" href="acceder-free.php"><span class="icon-header"><i class="color-header-top icon-locked-padlock rojo"></i></span>Acceder</a>
              </li>
              -->
              <li class="nav-item espaciado-btn-header-top dropdown">
                <a class="nav-link dropdown-toggle rojo" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-header"><i class="color-header-top icon-locked-padlock rojo"></i></span>Acceder</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('iniciar-sesion')}}">Iniciar Sesión</a>
                  <a class="dropdown-item" href="{{url('crear-cuenta')}}">Crear Cuenta</a>
                </div>
              </li>

              <li class="nav-item espaciado-btn-header-top">

                <a class="nav-link" href="#"><span class="icon-header"><i class="color-header-top icon-webcam"></i></span>Web Cam</a>

              </li>
              
              <li class="nav-item espaciado-btn-header-top">
                <a class="nav-link" href="#"><span class="icon-header"><i class="color-header-top icon-email"></i></span>Contáctanos</a>
              </li>
              <li class="nav-item espaciado-btn-header-top dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="icon-header icon-peru"><i class="path1"></i><i class="path2"></i><i class="path3"></i></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#"><span class="icon-header icon-panama"><i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i></span>Panamá</a>
                  <a class="dropdown-item" href="#"><span class="icon-header icon-spain"><i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i></span>
                  España</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">

          <div class="collapse navbar-collapse flex-centrar-justificado" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item espaciado-btn-header-bottom dropdown">
                <a class="nav-link dropdown-toggle color-header-bottom-flechita active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="color-header-bottom">ANUNCIOS</span>
                </a>
                <div class="dropdown-menu bg-drop-header-bottom" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item sub-menu-top" href="{{ url('anuncios/mujeres') }}"><span class="color-header-bottom">MUJERES</span></a>
                  <a class="dropdown-item sub-menu-top" href="{{ url('anuncios/gigolos') }}"><span class="color-header-bottom">GIGOLÓS</span></a>
                  <a class="dropdown-item sub-menu-top" href="{{ url('anuncios/gays') }}"><span class="color-header-bottom">GAYS</span></a>
                  <a class="dropdown-item sub-menu-top" href="{{ url('anuncios/trans') }}"><span class="color-header-bottom">TRANS</span></a>
                  <a class="dropdown-item sub-menu-top" href="{{ url('anuncios/travestis') }}"><span class="color-header-bottom">TRAVESTIS</span></a>
                  <a class="dropdown-item sub-menu-top" href="{{ url('anuncios/fetiches') }}"><span class="color-header-bottom">FETICHES</span></a>
                  <a class="dropdown-item sub-menu-top" href="{{ url('anuncios/masajes') }}"><span class="color-header-bottom">MASAJES</span></a>
                  <a class="dropdown-item sub-menu-top" href="{{ url('anuncios/parejas') }}"><span class="color-header-bottom">PAREJAS</span></a>
                </div>
              </li>
              <li class="nav-item espaciado-btn-header-bottom dropdown">
                <a class="nav-link dropdown-toggle color-header-bottom-flechita active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="color-header-bottom">F.A.Q.</span>
                </a>
                <div class="dropdown-menu bg-drop-header-bottom" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item sub-menu-top" href="{{ url('/faq-perfil-profesional') }}"><span class="color-header-bottom">PERFIL PROFESIONAL</span></a>
                  <a class="dropdown-item sub-menu-top" href="{{ url('/faq-perfil-usuario') }}"><span class="color-header-bottom">PERFIL USUARIO</span></a>
                  <a class="dropdown-item sub-menu-top" href="{{ url('/faq-perfil-empresa') }}"><span class="color-header-bottom">PERFIL EMPRESA</span></a>
                </div>
              </li>
              <li class="nav-item espaciado-btn-header-bottom">
                <a class="nav-link" href="#"><span class="color-header-bottom">BLOG</span></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
