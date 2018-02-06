<div class="load-bar">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
<div class="container">
    <div class="row">
       <div class="panelWrapper">
           <div class="panel panel-default login-form">
               <img src="<?=$this->url->get('dash/img/logo.png')?>" class="center-block" alt="Logo">
               <h1>Inicio de sesión</h1>
               <h6>Favor de ingresar sus datos correctamente:</h6>

               <form id="inicioSesion">
                   <div class="form-group">
                       <input type="email" name="email" class="form-control" placeholder="Correo electronico">
                   </div>
                   <div class="form-group">
                       <input type="password" name="password" class="form-control" placeholder="Contraseña">
                   </div>
                   <div class="checkbox">
                       <label><input type="checkbox">Recordar cuenta</label>
                   </div>
                   <button type="submit" class="login-btn btn-block">Ingresar</button>
               </form>

               <div class="panel-help">
                   <p><a>¿Olvido su contraseña?</a></p>
               </div>

           </div>
       </div>
    </div>
</div>


