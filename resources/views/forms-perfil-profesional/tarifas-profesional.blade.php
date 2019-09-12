@extends('main')

@section('title', 'Tarifas del Profesional')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


@section('content')

<tarifas-profesional></tarifas-profesional>

 @endsection