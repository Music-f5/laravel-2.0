<a href="{{url('/desarrollador/create')}}"> Nueva </a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">FECHA PLAYED</th>
            <th scope="col">TTITULO</th>
            <th scope="col">ARTISTA</th>
            <th scope="col">GENERO</th>
            <th scope="col">IMAGEN</th>
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
            <td>{{$song->image }}</td>
            <td>{{$song->idUser }}</td>
            <td>
                <form action="{{url('/desarrollador/'.$song->id)}}"  class='form' method="post">
                    <form action="{{url('/desarrollador/'.$song->id)}}"  class='form' method="post" >
                        @csrf
                        {{method_field('PATCH')}}      
                        <input value="Play" type="submit" class="btnForm btn-primary" />
                    </form>
                    <a href="{{url('/desarrollador/'.$song->id.'/edit')}}">
                        Editar
                    </a> | 
                    @csrf
                    {{method_field('DELETE')}}
                    <input value="Borrar" type="submit" onclick="return confirm('Borrar la cancion ????') " class="btnForm btn-primary" />
                </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>

