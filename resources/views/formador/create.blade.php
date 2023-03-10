@extends('formador.plantilla')
@section('content')
<h1>Create</h1>

<form action="{{url('/formador')}}"  class='form' method="post" enctype="multipart/form-data">
    @csrf
    @include('formador.form');           
</form>
@endsection