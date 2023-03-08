<h1>Editar</h1>

<form action="{{url('/formador/'.$usuario->id)}}"  class='form' method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('formador.form');           
</form>