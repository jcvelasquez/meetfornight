<div class="menu-lateral-usuario">
<ul>
    <li class="especial-interna-usuario"><a href="#"><span>PANEL DE CONTROL</span></a></li>

<!--     <li><a href="{{ url('planes-profesional') }}" class="{{ request()->is('planes-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-people esp-icono-bio"></i>PLANES</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
 -->
    <li><a href="{{ route('perfil-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/perfil-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-user-woman esp-icono-bio"></i>MI PERFIL</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

    <li><a href="{{ route('servicios-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/servicios-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-massage esp-icono-bio"></i>SERVICIOS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

    <li><a href="{{ route('contacto-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/contacto-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-diary esp-icono-bio"></i>CONTACTO</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

    <li><a href="{{ route('agenda-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/agenda-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-calendar esp-icono-bio"></i>AGENDA</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

    <li><a href="{{ route('reservas-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/reservas-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-reserved esp-icono-bio"></i>RESERVAS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

    <li><a href="{{ route('tarifas-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/tarifas-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-money esp-icono-bio"></i>TARIFAS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

    <li><a href="{{ route('fotos-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/fotos-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-video esp-icono-bio"></i>FOTOS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

<!--     <li><a href="{{ route('creditos-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/creditos-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span class="resaltar"><i class="icon-moneda-nuevo-sol esp-icono-bio"></i>CRÉDITOS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
 -->
    <li><a href="{{ route('booster-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/booster-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span class="resaltar"><i class="icon-podium esp-icono-bio"></i>BOOSTER</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

    <li><a href="{{ route('estadisticas-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/estadisticas-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-estadisticas esp-icono-bio"></i>ESTADÍSTICAS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

    <li><a href="{{ route('mensajes-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/mensajes-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-paper-plane esp-icono-bio"></i>MENSAJES</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

    <li><a href="{{ route('alerta-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/alerta-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-danger esp-icono-bio"></i>ALERTA</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

    <li><a href="{{ route('valoracion-profesional', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/valoracion-profesional') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-star esp-icono-bio"></i>VALORACIÓN</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

</ul>
</div>

