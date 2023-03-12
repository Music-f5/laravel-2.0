<h1>Editar</h1>

<form action="{{url('/desarrollador/'.$song->id)}}"  class='form' method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('desarrollador.form');           
</form>