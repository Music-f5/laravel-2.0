

<div class="card">
    <div class="card-header"></div>
    <div class="card-body">

        <div class="formGroup">
            <label for="labelFondoform">NOMBRE</label>
            <input name="name" type="text" id="name" class="form-control" value="@if(!empty($usuario->name)) {{$usuario->name}} @endif"> 
        </div>

        <div class="formGroup">
            <label for="labelFondoForm">EMAIL</label>
            <input name="email" type="text" id="email" class="form-control" value="@if(!empty($usuario->email)) {{$usuario->email}} @endif">
        </div>

        <div class="formGroup">
            <label for="labelFondoForm">CONTRASEÑA</label>
            <input name="password" type="text" id="password" class="form-control" value="@if(!empty($usuario->password)) {{$usuario->password}} @endif">
        </div>

        <div class="formGroup">
            <label for="labelFondoForm">ROL</label>
            <select name="role" id="role" class="form-control">
                <option value="coder">Desarrollador</option>
                <option value="trainer">Formador</option>
            </select>
        </div>

        <input value="Enviar Datos" type="submit" class="btnForm btn-primary" />
    </div>
</div>
