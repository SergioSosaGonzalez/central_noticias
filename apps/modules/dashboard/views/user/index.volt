<div class="row">
    <h1>Registro de usuario</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
<div id="datosPersonales">
    <div class="row">
        <h1>Datos personales</h1>
    </div>

</br>
   <div class="row">
       <div class="col-md-6">
           <label>Primer nombre: </label>
           <input type="text" class="form-control" />
       </div>
       <div class="col-md-6">
           <label>Segundo nombre:</label>
           <input type="text" class="form-control" />
       </div>
    </div>
</br>
    </br>

    <div>
       <label>Apellidos:</label>
        <input type="text" class="form-control"/>
    </div>
</br>
    <div class="row">
        <div class="col-md-5">
           <label>Sexo:</label>
           <input type="radio" name="sexo" value="M"/>M
           <input type="radio" name="sexo" value="F"/>F
        </div>
        <div class="col-md-7">
              <label>Telefono:</label>
              <input type="text" class="form-control"/>
        </div>
    </div>

</div>
        </div>
<div class="col-md-6">
<div id="datosUsuario">
<div class="row">
    <h1>Datos para nombre de usuario</h1>
</div>
    </br>
    <div class="row">
        <div class="col-md-6">
            <label>Nombre de usuario:</label>
            <input text="text" class="form-control"/>
        </div>
        <div class="col-md-6">
            <label>Contraseña:</label>
            <input type="password" class="form-control"/>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-md-6">
            <label>Correo electronico:</label>
            <input type="email" class="form-control"/>
        </div>
        <div class="col-md-6">
            <label>Rol:</label>
            <select>
                <option value="ADMIN">ADMIN</option>
                <option value="GUEST">GUEST</option>
                <option value="COORDINATIOR">COORDINATIOR</option>
                <option value="USER">USER</option>
                <option value="CONTACT">CONTACT</option>
            </select>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-md-6">
            <label>Foto:</label>
            <input type="text" class="form-control"/>
</br>
            <button class="btn btn-xs btn-info">buscar</button>
        </div>
        <div class="col-md-6">
            <label>Fecha de creacion:</label>
            <input type="date" class="form-control"/>
        </div>
    </div>
</br>
    <div class="row">
        <div class="col-md-6">
            <label>Cargo</label>
            <input type="text" class="form-control"/>

        </div>
        <div class="col-md-6">
            <label>Estado:</label>
            <select>
                <option value="ACTIVE">Active</option>
                <option value="INACTIVE">Inactive</option>
            </select>
        </div>
    </div>
</br>
    <div class="row">
            <label>Tipo de ejecutivo:</label>
            <select>
                <option value="ALTA">Alta</option>
                <option value="SEGUIMIENTO">Serguimiento</option>
                <option value="CONTACTO">Contacto</option>
            </select>
    </div>
</div>
</div>

    </div>
    <button id="btnGuardar" class="btn btn-lg btn-success">Guardar</button>
</div>
