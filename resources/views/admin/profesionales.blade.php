@extends('admin.main')

@section('title', 'Dashboard > Profesionales')

@section('content_admin')

<profesionales-administrador v-bind:basepath="{{ json_encode(url('/')) }}"></profesionales-administrador>

@endsection