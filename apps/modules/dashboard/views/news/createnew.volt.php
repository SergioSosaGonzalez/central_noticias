<div class="row">
    <h1>Creacion de noticias</h1>
</div>

<div class="card">
 </br>
    <form id="createNew">
        <div class="form-group">
            <div class="row">
                <label class="label col-md-2">Titulo:</label>
                <div class="col-md-3">
                    <input type="text" name="title" class="form-control cplCreateNew" placeholder="titulo">
                </div>
                <label class="label col-md-2">Permalink:</label>
                <div class="col-md-3">
                    <input type="text" name="permalink" id="permalinkCreateNew" class="form-control " placeholder="permalink" readonly>
                </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                <label class="label col-md-2">subtitle:</label>
                <div class="col-md-3">
                    <input type="text" name="subtitle" class="form-control" placeholder="subtitulo">
                </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                <label class="col-md-2 control-label">Imagen principal:</label>
                <div class="col-md-8 col-xs-12">
                    <div id="newsImage" class="dropzone">
                        <div class="dz-default dz-message">
                            <h2 style="text-align:center;position: relative;top:-30px;" id="content-image">
                                <i class="fa fa-cloud-upload" style="font-size: 88px;"></i><br>
                                Arrastra una imagen<br><i style="font-size: 14px">o haz click para seleccionar manualmente</i>
                            </h2>
                            <input type="hidden" value="" name="image-2" id="image-2">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                <label class="label col-md-2">Descripcion:</label>
                <div class="col-md-8">
                    <textarea id="descriptionCreateNew"></textarea>
                    <textarea name="description" style="display: none"></textarea>
                </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                <label class="label col-md-2">Contenido:</label>
                <div class="col-md-8">
                    <textarea id="contentCreateNew"></textarea>
                    <textarea name="content" style="display:none;"></textarea>
                </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                 <label class="col-md-2 control-label">Galeria:</label>
                 <div class="col-md-8 col-xs-12">
                     <div id="newsGallery" class="dropzone">
                         <div class="dz-default dz-message" id="content-image">
                             <h2 style="text-align:center;position: relative;top:-30px;" id="content-image">
                                 <i class="fa fa-cloud-upload" style="font-size: 88px;"></i><br>
                                 Arrastra una imagen<br><i style="font-size: 14px">o haz click para seleccionar manualmente</i>
                             </h2>
                         </div>

                     </div>
                 </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                <label class="col-md-2 control-label">Categoria:</label>
                <div class="col-md-3 col-xs-12">
                    <select class="form-control" name="type" id="categoria_news">
                          <option value="">Seleccione una categoria</option>
                          <?php foreach ($categoria as $key): ?>
                          <option value="<?=$key->getCatid()?>"><?=$key->getName()?></option>
                          <?php endforeach; ?>
                    </select>
                </div>
                <label class="col-md-2 control-label">Subcategoria:</label>
                <div class="col-md-3 col-xs-12">
                    <select class="form-control" name="subid" id="subcategory_news">
                    </select>
                </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                <label class="col-md-2 control-label">Autor:</label>
                <div class="col-md-3 col-xs-12">
                    <input type="text" class="form-control" name="author" placeholder="nombre del autor">
                </div>
                <label class="col-md-1 control-label">Periodico:</label>
                <div class="col-md-3 col-xs-12">
                    <select name="entid" id="entid" class="form-control">
                       <?php foreach ($empresa as $key): ?>
                        <option value="<?=$key->getEntid()?>"><?=$key->getName()?></option>
                       <?php endforeach; ?>
                    </select>
                </div>
                <a class="col-md-1 fa fa-plus-circle" data-toggle="modal" data-target="#myEnterprise" style="position: relative;right: 2pc;top:10px"></a>


            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3 col-xs-12">
                    <button type="submit" class="btn btn-lg btn-success">Guardar</button>
                </div>
             </div>
        </div>

    </form>
</div>


<div class="modal fade" id="myEnterprise" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Nueva Empresa</h4>
            </div>
            <form id="newEnterprise">
                <div class="modal-body">
                    <!--===================================Div principal del modal para hacer el formulario======================================-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Nombre:</label>
                                <input type="text" class="form-control" name="name_enterprise">
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label>Repetir nombre:</label>
                                <input type="text" class="form-control" name="repit_name">
                            </div>
                        </div>
                    </div>
                    <!--=========================================================================================================================-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>