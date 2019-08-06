@extends('main')

@section('title', 'Reservas')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


@section('content')

        <form action="#" method="post">
              <div class="bloques-de-perfil">
                <h5 class="formulario-titulos">RESERVAS:</h5>
                <p><strong class="precio-morado">La Reserva</strong> te permite propulsar tu anuncio nuevamente a las primeras posiciones y multiplicar de esta manera la visibilidad de tu anuncio y aumentar el número de contactos.</p>
                <p>Recuerda que cuando publicas un anuncio este va perdiendo posiciones en función de las nuevas inscripciones y/o de los <strong class="precio-morado">BOOSTERS</strong> utilizados por las demás personas de la comunidad Meet For Night.</p>
                <p>Si estas interesado sigue estos pasos:</p>
              </div>
        </form>
  
@endsection