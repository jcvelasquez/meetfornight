@extends('admin.main')

@section('title', 'Dashboard > Categorias')

@section('content_admin')

<categorias-administrador v-bind:basepath="{{ json_encode(url('/')) }}"></categorias-administrador>

@endsection