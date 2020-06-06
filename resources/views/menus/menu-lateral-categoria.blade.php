<div class="menu-lateral">
    <ul>
        <li class="especial-interna"><a href="#"><span>ANUNCIOS</span></a></li>

        <li><a href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'mujeres'] ) }}" class="{{ request()->is( app()->getLocale().'/anuncios/mujeres') ? 'menu-lateral-active' : '' }}"><span>MUJERES</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'gigolos'] ) }}" class="{{ request()->is( app()->getLocale().'/anuncios/gigolos') ? 'menu-lateral-active' : '' }}"><span>GIGOLÓS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'gays'] ) }}" class="{{ request()->is( app()->getLocale().'/anuncios/gays') ? 'menu-lateral-active' : '' }}"><span>GAYS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'trans'] ) }}" class="{{ request()->is( app()->getLocale().'/anuncios/trans') ? 'menu-lateral-active' : '' }}"><span>TRANS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'travestis'] ) }}" class="{{ request()->is( app()->getLocale().'/anuncios/travestis') ? 'menu-lateral-active' : '' }}"><span>TRAVESTIS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'fetiches'] ) }}" class="{{ request()->is( app()->getLocale().'/anuncios/fetiches') ? 'menu-lateral-active' : '' }}"><span>FETICHES</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'masajes'] ) }}" class="{{ request()->is( app()->getLocale().'/anuncios/masajes') ? 'menu-lateral-active' : '' }}"><span>MASAJES</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

        <li><a href="{{ route('anuncios', ['locale' => app()->getLocale(), 'categoria' => 'parejas'] ) }}" class="{{ request()->is( app()->getLocale().'/anuncios/parejas') ? 'menu-lateral-active' : '' }}"><span>PAREJAS</span><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li> 
    </ul>
</div>