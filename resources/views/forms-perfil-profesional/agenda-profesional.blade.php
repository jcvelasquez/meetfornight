@extends('main')

@section('title', 'Agenda')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection

@section('content')

<agenda-profesional></agenda-profesional>
          
@endsection