@extends('main')

@section('title', 'Mi Perfil')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection

@section('content')

    <perfil-profesional></perfil-profesional>
          
@endsection