<h1>Create</h1>

<form action="{{url('/desarrollador')}}"  class='form' method="post" enctype="multipart/form-data">
    @csrf
    @include('desarrollador.form');           
</form>