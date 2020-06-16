@extends('admin.main')

@section('title', 'Dashboard > Idiomas')

@section('content_admin')

<idiomas-administrador v-bind:basepath="{{ json_encode(url('/')) }}"></idiomas-administrador>

@endsection