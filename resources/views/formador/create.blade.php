<h1>Create</h1>

<form action="{{url('/formador')}}"  class='form' method="post">
    @csrf
                <div class="formGroup">
                    <label for="labelFondoform">NOMBRE</label>
                    <input name="nombre" type="text" id="nombre" class="fondoForm" value="">
                </div>
                <div class="formGroup">
                    <label for="labelFondoForm">EMAIL</label>
                    <input name="email" type="text" id="email" class="fondoForm" value="">
                </div>
                <div class="formGroup">
                    <label for="labelFondoForm">CONTRASEÑA</label>
                    <input name="contraseña" type="text" id="contraseña" class="fondoForm" value="">
                </div>
                <div class="formGroup">
                    <label for="labelFondoForm">ROL</label>
                    <select name="role" id="role" class="fondoForm" > 
                        <option value="coder">Desarrollador</option>
                        <option value="trainer">Formador</option>
               
                    </select>
                </div>
             
                <input name="ENVIAR" id="enviar" type="submit" class="btnForm btn-primary" />
            </form>