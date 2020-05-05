<div class="menu-lateral-usuario">
    <ul>
        <li class="especial-interna-usuario"><a hre="#"><span>PANEL DE CONTROL</span></a></li>

        <li><a href="{{ url('favoritos-usuario') }}" class="{{ request()->is('favoritos-usuario') ? 'menu-lateral-empresa-active' : '' }}"><span><i class="icon-heart-all esp-icono-bio"></i>PLANES</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ url('perfil-empresa') }}" class="{{ request()->is('perfil-empresa') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-user-woman esp-icono-bio"></i>MI PERFIL</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ url('banners-empresa') }}" class="{{ request()->is('banners-empresa') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-paper-plane esp-icono-bio"></i>BANNERS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
 
        <li><a href="{{ url('reservas-usuario') }}" class="{{ request()->is('reservas-usuario') ? 'menu-lateral-empresa-active' : '' }}"><span><i class="icon-calendar esp-icono-bio"></i>ESTADISTICAS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

       
<!-- 
        <li><a href="{{ url('seguridad-usuario') }}" class="{{ request()->is('seguridad-usuario') ? 'menu-lateral-empresa-active' : '' }}"><span><i class="icon-locked-padlock esp-icono-bio"></i>SEGURIDAD</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li> -->
         
    </ul>
</div>