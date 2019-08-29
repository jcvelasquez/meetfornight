
@extends('main')

@section('title', 'Alertas')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection

@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


@section('content')

<alerta-profesional></alerta-profesional>
          
@endsection