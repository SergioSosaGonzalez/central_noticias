<div class="row">
    <h1>Registro de usuario</h1>
</div>

<form id="form">
<div class="container">
    <div class="row">
        <div class="col-md-6">
<div  class="card">
    <div class="row">
        <h1>Datos personales</h1>
    </div>
</br>
   <div class="row">
       <div class="col-md-6">
           <label>Primer nombre: </label>
           <input type="text" name ="PrimerNombre" class="form-control" />
       </div>
       <div class="col-md-6">
           <label>Segundo nombre:</label>
           <input type="text" name ="SegundoNombre" class="form-control" />
       </div>
    </div>
</br>
</br>
    <div>
       <label>Apellidos:</label>
        <input type="text" name="apellidos" class="form-control"/>
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
              <input type="text" id="tel" name="telefono" class="form-control"/>
        </div>
    </div>

</div>
        </div>
<div class="col-md-6">
<div class="card">
<div class="row">
    <h1>Datos para nombre de usuario</h1>
</div>
    </br>
    <div class="row">
        <div class="col-md-6">
            <label>Nombre de usuario:</label>
            <input text="text" name="username" class="form-control"/>
        </div>
        <div class="col-md-6">
            <label>Contraseña:</label>
            <input type="password" name="contrasenia" class="form-control"/>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-md-6">
            <label>Correo electronico:</label>
            <input type="email" name="correo" class="form-control"/>
        </div>
        <div class="col-md-6">
            <label>Rol:</label>
            <select name="rol">
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
            <input type="text" name="foto" class="form-control"/>
</br>
            <button class="btn btn-xs btn-info">buscar</button>
        </div>
        <div class="col-md-6">
            <label>Fecha de creacion:</label>
            <input type="date" name="fechaCreacion" class="form-control"/>
        </div>
    </div>
</br>
    <div class="row">
        <div class="col-md-6">
            <label>Cargo</label>
            <input type="text" name="cargo" class="form-control"/>

        </div>
        <div class="col-md-6">
            <label>Estado:</label>
            <select name="estatus">
                <option value="ACTIVE">Active</option>
                <option value="INACTIVE">Inactive</option>
            </select>
        </div>
    </div>
</br>
    <div class="row">
            <label>Tipo de ejecutivo:</label>
            <select name="ejecutivo">
                <option value="ALTA">Alta</option>
                <option value="SEGUIMIENTO">Serguimiento</option>
                <option value="CONTACTO">Contacto</option>
            </select>
    </div>
</div>
</div>

    </div>
    <button id="btnGuardar" type="submit" class="btn btn-lg btn-success">Guardar</button>
</div>
</form>
