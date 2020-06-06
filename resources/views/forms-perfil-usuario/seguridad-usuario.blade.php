@extends('main')

@section('title', 'Seguridad del Usuario')

@section('content')

      <seguridad-usuario v-bind:basepath="{{ json_encode(url('/')) }}"></seguridad-usuario>
  
@endsection