@extends('plantilla')
@section('content')
    <a href="desarrollador/create" class="btn btn-outline-danger">Crear</a>


{{-- <a href="{{url('/desarrollador/create')}}"> Nueva </a> --}}
<table class="table table-responsive table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">FECHA PLAYED</th>
            <th scope="col">TTITULO</th>
            <th scope="col">ARTISTA</th>
            <th scope="col">GENERO</th>
            <th scope="col">IMAGEN</th>
            <th scope="col">CANCION</th>
            <th scope="col">CODER</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($songs as $song)
        <tr>
            <th scope="row">{{$song->id }}</th>
            <td>{{$song->date }}</td>
            <td>{{$song->title }}</td>
            <td>{{$song->artist }}</td>
            <td>{{$song->idGender }}</td>
            {{-- <td>{{$song->gender->name }}</td> --}}
            <td> <img src="{{$song->image }}" alt="Imagen Canción" width="100"> </td>
            {{-- <td> <img src="{{'../../storage/app/public/'.$song->image }}" alt="Imagen Canción" width="100"> </td> --}}
            <td> <a class=""  href="{{$song->url }}" target="_blank">{{$song->url }}</a></td>
            <td>{{$song->idUser }}</td>
            {{-- <td>{{$song->user->name }}</td> --}}
            <td>
                
                <form action="{{url('/desarrollador/'.$song->id)}}"  class='form' method="post" >
                    @csrf
                    {{method_field('PATCH')}}      
                    {{-- <input value="Play" type="submit" class="btn btn-success" /> --}}
                    <button class="btn btn-success" type="submit" ><i class="bi bi-check-lg"></i></button>
                </form>
                
                <a href="/desarrollador/{{$song->id}}/edit" class="btn btn-info"><i class="bi bi-gear-fill"></i></a> 

                <form action="{{url('/desarrollador/'.$song->id)}}"  class='form' method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    {{-- <input value="Borrar" type="submit" onclick="return confirm('Borrar la cancion ????') " class="btn btn-danger" /> --}}
                    {{-- <button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#modal-content"><i class="bi bi-x-lg"></i></button> --}}
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Borrar la cancion ????') "  data-bs-toggle="modal" data-bs-target="#modal-content"><i class="bi bi-x-lg"></i></button>
                </form>

            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>

@endsection