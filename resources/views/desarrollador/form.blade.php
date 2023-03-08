<div class="formGroup">
    <label for="labelFondoform">NOMBRE</label>
    <input name="name" type="text" id="name" class="fondoForm" value="{{$usuario->name}}">
</div>

<div class="formGroup">
    <label for="labelFondoForm">EMAIL</label>
    <input name="email" type="text" id="email" class="fondoForm" value="{{$usuario->email}}">
</div>

<div class="formGroup">
    <label for="labelFondoForm">CONTRASEÑA</label>
    <input name="password" type="text" id="password" class="fondoForm" value="{{$usuario->password}}">
</div>

<div class="formGroup">
    <label for="labelFondoForm">ROL</label>
    <select name="role" id="role" class="fondoForm" > 
        <option value="coder">Desarrollador</option>
        <option value="trainer">Formador</option>

    </select>
</div>

<input value="Enviar Datos" type="submit" class="btnForm btn-primary" />