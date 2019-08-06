
@extends('main')

@section('title', 'Estadísticas')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection

@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


@section('content')

<form action="#" method="post">

          <div class="bloques-de-perfil">
            <h5 class="formulario-titulos">ESTADÍSTICA:</h5>
            <p>Con las Estadisticas podrás hacer que tu anuncio sea lo más eficiente posible y podrás controlar a su vez el exito que estás teniendo en nuestra plataforma. </p>

<p>Queremos que tengas en todo momento el control de tu anuncio y de tu presupuesto.</p>
          </div>

          <div class="bloques-de-perfil">
            <div class="bloque-estadistica">
              <div class="estadistica-datos">
                <i class="icon-user-woman tam-icon-grande"></i>
                <div class="info-estadistica">
                  <span class="inf-estadistica-num">400</span>
                  <span class="inf-estadistica">VISITAS<br>OBTENIDAS</span>
                </div>
              </div>
              <a href="#" class="tam-abajo-flecha">
                <i class="icon-down-arrow"></i>
              </a>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <img src="img/estadisticas.jpg" class="img-responsive">
          </div>

          <div class="bloques-de-perfil">
            <div class="bloque-estadistica-2">
              <div class="estadistica-datos-2">
                <i class="icon-podium tam-icon-grande-2"></i>
                <div class="info-estadistica-2">
                  <span class="inf-estadistica-num-2">15</span>
                  <span class="inf-estadistica-2">BOOSTERS<br>UTILIZADOS</span>
                </div>
              </div>
              <a href="#" class="tam-abajo-flecha-2">
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="bloques-de-perfil">
            <div class="bloque-estadistica-2">
              <div class="estadistica-datos-2">
                <i class="icon-heart-all tam-icon-grande-2"></i>
                <div class="info-estadistica-2">
                  <span class="inf-estadistica-num-2">100</span>
                  <span class="inf-estadistica-2">USUARIOS TE TIENEN<br>EN SUS FAVORITOS</span>
                </div>
              </div>
            </div>
          </div>

          </form>

@endsection