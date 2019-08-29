@extends('main')

@section('title', 'Créditos')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection

@section('content')

<creditos-profesional></creditos-profesional>

@endsection