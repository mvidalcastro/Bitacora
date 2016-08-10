@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')

{{ dd($users) }}

@endsection
