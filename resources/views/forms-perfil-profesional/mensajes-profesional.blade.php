@extends('main')

@section('title', 'Mensajes')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection

@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection

@section('content')

<mensajes-profesionales></mensajes-profesionales>

@endsection