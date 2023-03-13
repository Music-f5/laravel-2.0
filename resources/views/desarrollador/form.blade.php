<div class="card bg-light">
    <div class="card-body">
        {{-- {{ auth()->user()->name }} --}}

        <div class="formGroup">
            <label for="labelFondoform">TTITULO</label>
            <input name="title" type="text" id="title" class="form-control" value="@if(!empty($song->title)) {{$song->title}} @endif">
        </div>

        <div class="formGroup">
            <label for="labelFondoForm">ARTISTA</label>
            <input name="artist" type="text" id="artist" class="form-control" value="@if(!empty($song->artist)) {{$song->artist}} @endif">
        </div>

        <div class="formGroup">
            <label for="labelFondoForm">URL</label>
            <input name="url" type="text" id="url" class="form-control" value="@if(!empty($song->url)) {{$song->url}} @endif">
        </div>

        <div class="formGroup">
            <label for="labelFondoForm">GENERO</label>
            <select name="idGender" id="idGender" class="form-control" > 
                <option value="1"
                {{-- @if ($song->idGender == $song->idGender)
                    {{'selected="selected"'}}
                @endif  --}}
                >Rock</option>
                
            </select>
        </div>

        <div class="formGroup">
            <label for="labelFondoForm">IMAGEN</label>
            @if(!empty($song->image)) {{$song->image}} @endif
            <input name="image" type="file" id="image" class="form-control" value="">
        </div>


        <input value="Enviar Datos" type="submit" class="btn btn-outline-danger" />
    </div>
</div>