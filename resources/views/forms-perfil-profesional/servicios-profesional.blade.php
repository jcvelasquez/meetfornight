@extends('main')

@section('title', 'Servicios')

@section('top')

    @include('tops.top-perfil-creado-free')

@endsection


@section('menu-lateral')
  
    @include('menus.menu-lateral-profesional')
    
@endsection


  @section('content')


          <servicios-profesional></servicios-profesional>

      @endsection