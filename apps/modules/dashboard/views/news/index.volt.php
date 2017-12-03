
<section class="card">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <br>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">Lista de noticias</h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive" style="text-align: center">
                        <table id="data-table-job" class="table table-hover table-actions generalDT" data-order="4" data-filter="asc">
                            <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Subtitulo</th>
                                <th>Subcategoria</th>
                                <th>Imagen</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                               <?php foreach ($consulta as $key): ?>
                                <tr id="<?=$key->getNewid()?>">
                                    <td class=""><?=$key->getTitle()?></td>
                                    <td class=""><?=$key->getSubtitle()?></td>
                                    <?php $subcategory= \Modules\Models\CdSubcategory::findFirst('subid='.$key->getSubid()) ?>
                                    <td class=""><?=$subcategory->getName()?></td>
                                    <td><img src="/dash/src/<?=$key->getImages()?>" style="width: 100px;height: 100px"></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning" onclick="editNew(<?=$key->getNewid()?>)"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteNew(<?=$key->getNewid()?>)"><i class="fa fa-ban" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                               <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
