<div class="menu-lateral-usuario">
    <ul>
        <li class="especial-interna-usuario"><a hre="#"><span>PANEL DE CONTROL</span></a></li>

<!--         <li><a href="{{ url('planes-empresa') }}" class="{{ request()->is('planes-empresa') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-people esp-icono-bio"></i>PLANES</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
 -->
        <li><a href="{{ route('perfil-empresa', app()->getLocale()) }}" class="{{ request()->is(app()->getLocale().'/perfil-empresa') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-user-woman esp-icono-bio"></i>MI PERFIL</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ route('banners-empresa', app()->getLocale()) }}" class="{{ request()->is(app()->getLocale().'/banners-empresa') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-video esp-icono-bio"></i>BANNERS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
 
        <li><a href="{{ route('estadisticas-empresa', app()->getLocale()) }}" class="{{ request()->is(app()->getLocale().'/estadisticas-empresa') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-estadisticas esp-icono-bio"></i>ESTADISTICAS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

       
<!-- 
        <li><a href="{{ url('seguridad-usuario') }}" class="{{ request()->is('seguridad-usuario') ? 'menu-lateral-empresa-active' : '' }}"><span><i class="icon-locked-padlock esp-icono-bio"></i>SEGURIDAD</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li> -->
         
    </ul>
</div>