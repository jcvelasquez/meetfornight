  <!--TOP-->
  <header>
    <div class="header-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="{{ route('home', app()->getLocale()) }}">
            <img src="{{ asset('img/logo-top.png') }}" class="logo-responsive-top">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto-der">
              <!--
              <li class="nav-item espaciado-btn-header-top active">
                <a class="nav-link rojo" href="acceder-free.php"><span class="icon-header"><i class="color-header-top icon-locked-padlock rojo"></i></span>Acceder</a>
              </li>
              
              <li class="nav-item espaciado-btn-header-top dropdown">
                <a class="nav-link dropdown-toggle rojo" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-header"><i class="color-header-top icon-locked-padlock rojo"></i></span>Acceder</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('iniciar-sesion')}}">Iniciar Sesión</a>
                  <a class="dropdown-item" href="{{url('crear-cuenta')}}">Crear Cuenta</a>
                </div>
              </li>
              -->
              @if(Auth::check())
                <li class="nav-item espaciado-btn-header-top">                
                  <a class="nav-link" href="{{ route('iniciar-sesion', app()->getLocale()) }}"> <span class="icon-header"><i class="color-header-top icon-user-woman"></i></span>Mi Cuenta</a>
                </li>
              @else
                <li class="nav-item espaciado-btn-header-top">
                  <a class="nav-link" href="{{ route('iniciar-sesion', app()->getLocale()) }}"><span class="icon-header"><i class="color-header-top icon-locked-padlock"></i></span>Iniciar Sesión</a>
                </li>
                <li class="nav-item espaciado-btn-header-top">
                  <a class="nav-link" href="{{ route('crear-cuenta', app()->getLocale()) }}"><span class="icon-header"><i class="color-header-top icon-diary"></i></span>Crear Cuenta</a>
                </li>
              @endif

            <!--   
              <li class="nav-item espaciado-btn-header-top">
                <a class="nav-link" href="#"><span class="icon-header"><i class="color-header-top icon-webcam"></i></span>Web Cam</a>
              </li> -->
              
              <li class="nav-item espaciado-btn-header-top">
                <a class="nav-link" href="#"><span class="icon-header"><i class="color-header-top icon-email"></i></span>Contáctanos</a>
              </li>
              
              <li class="nav-item espaciado-btn-header-top dropdown">
                
                    @foreach (config('app.available_locales') as $locale)
                  
                      @if (app()->getLocale() == $locale)

                        <a class="nav-link dropdown-toggle" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), array_merge(\Illuminate\Support\Facades\Route::current()->parameters(), ['locale' => $locale]) ) }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="icon-header icon-{{$locale}}"><i class="path1"></i><i class="path2"></i><i class="path3"></i></span>
                        </a>

                      @endif
                    
                    @endforeach

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @foreach (config('app.available_locales') as $locale)
                          
                            @if (app()->getLocale() != $locale)
                                <a class="dropdown-item" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), array_merge(\Illuminate\Support\Facades\Route::current()->parameters(), ['locale' => $locale]) ) }}">
                                  <span class="icon-header icon-{{$locale}}"><i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i></span> 
                                  @if($locale == "es") España 
                                  @elseif($locale == "pe") Perú
                                  @else Panamá
                                  @endif
                                </a>

                            @endif
                          
                        @endforeach
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
                <a class="dropdown-item sub-menu-top" href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'mujeres' ] ) }}"><span class="color-header-bottom">MUJERES</span></a>
                <a class="dropdown-item sub-menu-top" href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'gigolos' ] ) }}"><span class="color-header-bottom">GIGOLÓS</span></a>
                <a class="dropdown-item sub-menu-top" href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'gays' ] ) }}"><span class="color-header-bottom">GAYS</span></a>
                <a class="dropdown-item sub-menu-top" href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'trans' ] ) }}"><span class="color-header-bottom">TRANS</span></a>
                <a class="dropdown-item sub-menu-top" href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'travestis' ] ) }}"><span class="color-header-bottom">TRAVESTIS</span></a>
                <a class="dropdown-item sub-menu-top" href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'fetiches' ] ) }}"><span class="color-header-bottom">FETICHES</span></a>
                <a class="dropdown-item sub-menu-top" href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'masajes' ] ) }}"><span class="color-header-bottom">MASAJES</span></a>
                <a class="dropdown-item sub-menu-top" href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'parejas' ] ) }}"><span class="color-header-bottom">PAREJAS</span></a>
                </div>
              </li>
              <li class="nav-item espaciado-btn-header-bottom dropdown">
                <a class="nav-link dropdown-toggle color-header-bottom-flechita active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="color-header-bottom">F.A.Q.</span>
                </a>
                <div class="dropdown-menu bg-drop-header-bottom" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item sub-menu-top" href="{{ route('faq-perfil-profesional', app()->getLocale()) }}"><span class="color-header-bottom">PERFIL PROFESIONAL</span></a>
                  <a class="dropdown-item sub-menu-top" href="{{ route('faq-perfil-usuario', app()->getLocale()) }}"><span class="color-header-bottom">PERFIL USUARIO</span></a>
                  <a class="dropdown-item sub-menu-top" href="{{ route('faq-perfil-empresa', app()->getLocale()) }}"><span class="color-header-bottom">PERFIL EMPRESA</span></a>
                </div>
              </li>
              <li class="nav-item espaciado-btn-header-bottom">
                <a class="nav-link" href="{{ route('blog', app()->getLocale()) }}"><span class="color-header-bottom">BLOG</span></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
