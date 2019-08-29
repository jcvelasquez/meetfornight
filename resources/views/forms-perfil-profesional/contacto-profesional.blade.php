@extends('main')

@section('title', 'Contacto')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


@section('content')

  <contacto-profesional></contacto-profesional>

@endsection