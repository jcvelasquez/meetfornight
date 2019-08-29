
@extends('main')

@section('title', 'Booster')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection

@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


@section('content')

<booster-profesional></booster-profesional>

@endsection