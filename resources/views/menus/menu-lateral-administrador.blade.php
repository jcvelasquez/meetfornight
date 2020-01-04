<div class="menu-lateral-usuario">
    <ul>
        <li class="especial-interna-usuario"><a hre="#"><span>DASHBOARD</span></a></li>
        
        <li><a href="{{ url('admin/usuarios') }}" class="{{ request()->is('admin/usuarios') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-user-woman esp-icono-bio"></i>USUARIOS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
        
        <li><a href="{{ url('admin/alertas') }}" class="{{ request()->is('admin/alertas') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-paper-plane esp-icono-bio"></i>ALERTAS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ url('admin/mensajes') }}" class="{{ request()->is('admin/mensajes') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-locked-padlock esp-icono-bio"></i>MENSAJES</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ url('admin/reportes') }}" class="{{ request()->is('admin/reportes') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-paper-plane esp-icono-bio"></i>REPORTES</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
        
        <li><a href="{{ url('admin/banners') }}" class="{{ request()->is('admin/banners') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-calendar esp-icono-bio"></i>BANNERS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
        
        <li><a href="{{ url('admin/ingresos') }}" class="{{ request()->is('admin/ingresos') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-heart-all esp-icono-bio"></i>INGRESOS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>       
        

    </ul>
</div>

<div class="menu-lateral-usuario">
    <ul>
        <li class="especial-interna-usuario"><a hre="#"><span>ADMINISTRACION</span></a></li>
        
        <li><a href="{{ url('admin/categorias') }}" class="{{ request()->is('admin/categorias') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-user-woman esp-icono-bio"></i>CATEGORIAS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
        
        <li><a href="{{ url('admin/idiomas') }}" class="{{ request()->is('admin/idiomas') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-paper-plane esp-icono-bio"></i>IDIOMAS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ url('admin/roles') }}" class="{{ request()->is('admin/roles') ? 'menu-lateral-usuario-active' : '' }}"><span><i class="icon-locked-padlock esp-icono-bio"></i>ROLES</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>        

    </ul>
</div>