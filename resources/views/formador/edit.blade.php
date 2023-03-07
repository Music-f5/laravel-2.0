<h1>Editar</h1>
<form action="{{url('/formador')}}"  class='form' method="post">
    @csrf
    @include('formador.form');           
</form>