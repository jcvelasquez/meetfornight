@extends('main')

@section('title', 'Valoración')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection

@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


@section('content')

<valoracion-profesional></valoracion-profesional>

          
@endsection