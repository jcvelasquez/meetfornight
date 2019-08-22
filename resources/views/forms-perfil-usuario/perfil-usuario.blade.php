@extends('main')

@section('title', 'Perfil de Usuario')

@section('top')

    @include('tops.top-usuario-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-usuario')
    
@endsection

@section('content')

<perfil-usuario></perfil-usuario>

@endsection