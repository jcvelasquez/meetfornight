@extends('admin.main')

@section('title', 'Dashboard > Usuarios')

@section('content_admin')

<usuarios-administrador v-bind:basepath="{{ json_encode(url('/')) }}"></usuarios-administrador>

@endsection