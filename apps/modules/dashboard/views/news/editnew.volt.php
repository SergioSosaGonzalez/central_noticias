<div class="row">
    <h1>Editar noticias</h1>
</div>

<div class="card">
    </br>
    <form id="editNew">
        <input type="hidden" value="<?=$id?>" name="id">
        <div class="form-group">
            <div class="row">
                <label class="label col-md-2">Titulo:</label>
                <div class="col-md-3">
                    <input type="text" name="title" value="<?=$new->getTitle()?>" class="form-control cplEditNew" placeholder="titulo">
                </div>
                <label class="label col-md-2">Permalink:</label>
                <div class="col-md-3">
                    <input type="text" name="permalink" id="permalinkEditNew" value="<?=$new->getPermalink()?>" class="form-control " placeholder="permalink" readonly>
                </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                <label class="label col-md-2">subtitle:</label>
                <div class="col-md-3">
                    <input type="text" name="subtitle" value="<?=$new->getSubtitle()?>" class="form-control" placeholder="subtitulo">
                </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                <label class="col-md-2 control-label">Imagen principal:</label>
                <div class="col-md-8 col-xs-12">
                    <div id="editnewImage" class="dropzone">
                        <div class="dz-default dz-message">
                            <h2 style="text-align:center;position: relative;top:-30px;" id="content-image">
                                <i class="fa fa-cloud-upload" style="font-size: 88px;"></i><br>
                                Arrastra una imagen<br><i style="font-size: 14px">o haz click para seleccionar manualmente</i>
                            </h2>
                            <input type="hidden" value="<?=$new->getImages()?>" name="image-2" id="image-2">
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
                    <textarea id="descriptionEditNew"><?=$new->getDescription()?> </textarea>
                    <textarea name="description" style="display: none"></textarea>
                </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                <label class="label col-md-2">Contenido:</label>
                <div class="col-md-8">
                    <textarea id="contentEditNew"><?=$new->getContent()?> </textarea>
                    <textarea name="content" style="display:none;"></textarea>
                </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                <label class="col-md-2 control-label">Galeria:</label>
                <div class="col-md-8 col-xs-12">
                    <div id="editGallery" class="dropzone">
                        <div class="dz-default dz-message" id="content-image">
                            <h2 style="text-align:center;position: relative;top:-30px;" id="content-image">
                                <i class="fa fa-cloud-upload" style="font-size: 88px;"></i><br>
                                Arrastra una imagen<br><i style="font-size: 14px">o haz click para seleccionar manualmente</i>
                            </h2>
                            <?php foreach ($gallery as $cnv): ?>
                                <input type="hidden" value="<?=$cnv->getImg()?>" name="image-3[]">
                            <?php endforeach;?>
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
                            <option <?=$new->getType()==$key->getCatid()?"selected":""?> value="<?=$key->getCatid()?>"><?=$key->getName()?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <label class="col-md-2 control-label">Subcategoria:</label>
                <div class="col-md-3 col-xs-12">
                    <select class="form-control" name="subid" id="subcategory_news">
                    <?php foreach ($subcategory as $key):?>
                        <option <?=$new->getSubid()==$key->getSubid()?"selected":""?> value="<?=$key->getSubid()?>"><?=$key->getName()?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        </br>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3 col-xs-12">
                    <button type="submit" class="btn btn-lg btn-success">Actualizar</button>
                </div>
            </div>
        </div>

    </form>
</div>