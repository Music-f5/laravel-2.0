<table class="table">
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
                Update | Delete
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>

