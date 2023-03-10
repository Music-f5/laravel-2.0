@extends('formador.plantilla')
@section('content')
    <a href="formador/create" class="btn btn-outline-danger">Crear</a>

    <table class="table table-dark">
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
                    <th scope="row">{{ $usuario->id }}</th>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->role }}</td>
                    <td>
                       

                        <form action="{{ url('/formador/' . $usuario->id) }}" class='form' method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <a href="{{ url('/formador/' . $usuario->id . '/edit') }}"class="btn btn-info">
                                Editar
                            </a>
                            <input value="Borrar" type="submit" onclick="return confirm('Borrar el usuario ????') "
                                class="btn btn-danger" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
