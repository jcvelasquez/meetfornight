@extends('main')

@section('title', 'Planes')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


  @section('content')

        <planes-profesional></planes-profesional>

  @endsection