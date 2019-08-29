@extends('main')

@section('title', 'Reservas')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


@section('content')

      <reservas-profesional></reservas-profesional>
  
@endsection