@extends('admin.main')

@section('title', 'Dashboard > Blog')

@section('content_admin')

<blog-administrador v-bind:basepath="{{ json_encode(url('/')) }}"></blog-administrador>

@endsection