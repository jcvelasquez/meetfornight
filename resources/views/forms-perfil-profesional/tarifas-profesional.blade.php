@extends('main')

@section('title', 'Tarifas')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


@section('content')

<tarifas-profesional></tarifas-profesional>

 @endsection