
@extends('main')

@section('title', 'Estadísticas')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection

@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


@section('content')

<estadisticas-profesional></estadisticas-profesional>

@endsection