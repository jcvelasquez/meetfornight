@extends('main')

@section('title', 'Mensajes')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection

@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection

@section('content')

<form action="#" method="post">
              <div class="bloques-de-perfil">
                <h5 class="formulario-titulos">MENSAJES:</h5>
                <p></p>
                <img src="img/mensajes.jpg" class="img-responsive">
              </div>

             

          </form>

@endsection