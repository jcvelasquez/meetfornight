@extends('main')

@section('title', 'Fotos')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection

@section('content')


<fotos-profesional></fotos-profesional>
                
@endsection