@extends('main')

@section('title', 'Mensajes del Usuario')

@section('content')

<mensajes-usuario v-bind:basepath="{{ json_encode(url('/')) }}" ></mensajes-usuario>

@endsection