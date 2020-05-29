<div class="menu-lateral-usuario">
    <ul>
        <li class="especial-interna-usuario"><a hre="#"><span>PANEL DE CONTROL</span></a></li>
        <li><a href="{{ route('perfil-usuario', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/perfil-usuario') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-user-woman esp-icono-bio"></i>MI PERFIL</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
        <li><a href="{{ route('mensajes-usuario', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/mensajes-usuario') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-paper-plane esp-icono-bio"></i>MENSAJES</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
        <li><a href="{{ route('reservas-usuario', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/reservas-usuario') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-calendar esp-icono-bio"></i>RESERVAS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
        <li><a href="{{ route('favoritos-usuario', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/favoritos-usuario') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-heart-all esp-icono-bio"></i>FAVORITOS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
        <li><a href="{{ route('seguridad-usuario', app()->getLocale()) }}" class="{{ request()->is( app()->getLocale().'/seguridad-usuario') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-locked-padlock esp-icono-bio"></i>SEGURIDAD</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
    </ul>
</div>