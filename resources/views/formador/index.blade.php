@extends('formador.plantilla')
@section('content')
    
<a href="formador/create" class="btn btn-primary">Crear</a>

<table class="table table-dark" >
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">EMAIL</th>
            <th scope="col">ROL</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <th scope="row">{{$usuario->id }}</th>
            <td>{{$usuario->name }}</td>
            <td>{{$usuario->email }}</td>
            <td>{{$usuario->role }}</td>
            <td>
                <a href="{{url('/formador/'.$usuario->id.'/edit')}}">
                    Editar
                </a>
                 | 
                <form action="{{url('/formador/'.$usuario->id)}}"  class='form' method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input value="Borrar" type="submit" onclick="return confirm('Borrar el usuario ????') " class="btnForm btn-primary" />
                </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
@endsection
