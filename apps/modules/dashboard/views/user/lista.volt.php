<!--Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Formulario</h4>
                </div>
                <div class="modal-body">

                    <!--===================================Div principal del modal para hacer el formulario======================================-->
                    <div id="main" class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <label>ID: </label>
                                <input name="id" type="text" readonly class="form-control"/>
                            </div>
                            <div class="col-md-6">
                                <label>Primer nombre:</label>
                                <input name="primerNombre" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Segundo nombre:</label>
                                <input name="segundoNombre" type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Apellidos:</label>
                                <input name="apellidos" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Sexo:</label>
                                <input name="sex" type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Telefono:</label>
                                <input name="telefono" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Username:</label>
                                <input name="username" type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Correo electronico:</label>
                                <input name="email" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Rol:</label>
                                <input name="rol" type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Foto:</label>
                                <input name="foto" type="text" class="form-control">
                            </div>
                        </div>
                    </br>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Estatus:</label>
                                <select name="estatus">
                                    <option value="ACTIVE">Active</option>
                                    <option value="INACTIVE">Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Tipo de ejecutivo:</label>
                                <select name="ejecutivo">
                                    <option value="ALTA">Alta</option>
                                    <option value="SEGUIMIENTO">Serguimiento</option>
                                    <option value="CONTACTO">Contacto</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!--=========================================================================================================================-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="bActualizarDatos" class="btn btn-primary">Guardar</button>

                </div>

    </div>
</div>
</div>



<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header no-border-bottom card-header-descriptive">
                    <h4>Lista de usuarios</h4>
                </div>
                <div class="card-block">
                    <div class="float-xs-right input-with-icon mb-1">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" class="form-control" placeholder="Search" id="dataTableJobSearch" />
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="data-table-job">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Primer nombre</th>
                                <th>Segundo nombre</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>
                                <th>username</th>
                                <th>correo</th>
                                <th>fecha de creacion</th>
                                <th>Estado</th>
                            </tr>
                            </thead>
                            <?php  foreach ($consulta as $cnv):?>

                            <tbody>
                            <tr class="<?=$cnv->getUid()?>">
                                <td><?=$cnv->getUid()?></td>
                                <td class="primerNombre"><?=$cnv->getName()?></td>
                                <td class="segundoNombre"><?=$cnv->getSecondName()?></td>
                                <td class="apellidos"><?=$cnv->getLastName()?></td>
                                <td class="phone"><?=$cnv->getPhone()?></td>
                                <td class="username"><?=$cnv->getUserName()?></td>
                                <td class="correo"><?=$cnv->getEmail()?></td>
                                <td class="date_creation"><?=$cnv->getDateCreation()?></td>
                                <td class="estado"><?=$cnv->getStatus()?></td>
                                <td><button type="button" id="btnActualizar" class="btn btn-sm btn-default" data-ids="<?=$cnv->getUid()?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-sm btn-danger" id="btnEliminar" data-eliminar="<?=$cnv->getUid()?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                            </tr>
                            </tbody>

                           <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
