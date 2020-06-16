<!doctype html>
<html lang="es">

@include('admin.header')


<body style="background: url({{ asset('img/bg-intranet.jpg') }}) ">

<div id="widget">

  <div class="wrapper ">
    <div class="sidebar menu-admin" data-color="purple">

      <div class="logo">
        <a href="{{ url('/') }}" class="simple-text logo-normal">
          <img src="{{ asset('img/logo-blanco-intranet.png') }}" style="width: 80%;"/>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ request()->is( app()->getLocale().'admin/dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin/dashboard', app()->getLocale() ) }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is( app()->getLocale().'/admin/profesional') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin/profesionales', app()->getLocale() ) }}">
              <i class="material-icons">person</i>
              <p>Profesionales</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is( app()->getLocale().'/admin/usuarios') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin/usuarios', app()->getLocale() ) }}">
              <i class="material-icons">person</i>
              <p>Usuarios</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is( app()->getLocale().'/admin/idiomas') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin/idiomas', app()->getLocale() ) }}">
              <i class="material-icons">content_paste</i>
              <p>Idiomas</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is( app()->getLocale().'/admin/categorias') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin/categorias', app()->getLocale() ) }}">
              <i class="material-icons">content_paste</i>
              <p>Categorias</p>
            </a>
          </li>
      <!--     <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin/usuarios', app()->getLocale() ) }}">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin/usuarios', app()->getLocale() ) }}">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li> 
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin/usuarios', app()->getLocale() ) }}">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>-->
          <li class="nav-item {{ request()->is( app()->getLocale().'/admin/blog') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin/blog', app()->getLocale() ) }}">
              <i class="material-icons">notifications</i>
              <p>Blog</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is( app()->getLocale().'/admin/alertas') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin/alertas', app()->getLocale() ) }}">
              <i class="material-icons">notifications</i>
              <p>Alertas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin/usuarios', app()->getLocale() ) }}">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link" href="{{ route('admin/usuarios', app()->getLocale() ) }}">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"> @yield('title') </a>
          </div>
     <!--      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button> -->
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
             <!--  <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Mi Perfil</a>
                  <a class="dropdown-item" href="#">Configuraciones</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('cerrar-sesion', app()->getLocale()) }}">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">

          @yield('content_admin')

      </div>
     

         

      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
             Meetfornight 2020. Developed with <i class="material-icons">favorite</i> by
            <a href="https://www.piwichostudio.com" target="_blank">Piwicho Studio</a> .
          </div>
        </div>
      </footer>
    </div>
  </div>
 

  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  
  <!-- <script src="../assets/demo/demo.js"></script> -->  

  <script>

    /*$(document).ready(function() {

        //md.initDashboardPageCharts();

        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {

          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      

    });*/
  </script>
  


</body>
</html>