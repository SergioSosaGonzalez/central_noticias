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
                <label class="col-md-2 control-label">Periodico:</label>
                <div class="col-md-3 col-xs-12">
                    <input type="text" class="form-control" name="periodico" placeholder="nombre del periodico encargado">
                </div>
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