  <!--FOOTER-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 footer-logo">
          <a href="{{ route('home', app()->getLocale() ) }}">
            <img src="{{ asset('img/logo-bottom.png') }}">
          </a>
        </div>
        <div class="col-lg-8">
          <ul>
            <li>
              <a href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'mujeres' ]  ) }}">ANUNCIOS</a>
            </li>
            <li>
              <a href="{{ route('faq-perfil-profesional', app()->getLocale() ) }}">F.A.Q.</a>
            </li>
            <li>
              <a href="{{ route('blog', app()->getLocale() ) }}">BLOG</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <div class="footer-copy">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
          <span>Copyright ©  - Meetfornight - Todos lo derechos reservados - <a href="politica-de-privacidad.php" class="politica-de-privacidad">Política de privacidad</a></span>
        </div>
      </div>
  </div>
  </div>
