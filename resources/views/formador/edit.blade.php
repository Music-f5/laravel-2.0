@extends('formador.plantilla')
@section('content')
  
{{-- @section('app')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection
<link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet"> --}}

    <h1>Editar</h1>

    <form action="{{ url('/formador/'. $usuario->id) }}" class='form' method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        @include('formador.form')
    </form>
@endsection
