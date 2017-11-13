
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header no-border-bottom card-header-descriptive">
                    <h4>Lista de noticias</h4>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table  class="table" id="data-table-job">
                            <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Subtitulo</th>
                                <th>Imagen</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                               <?php foreach ($consulta as $key): ?>
                                <tr id="<?=$key->getNewid()?>">
                                    <td class=""><?=$key->getTitle()?></td>
                                    <td class=""><?=$key->getSubtitle()?></td>
                                    <td><img src="/dash/src/<?=$key->getImages()?>" style="width: 100px;height: 100px"></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning bActualizarCategoria" onclick="editNew(<?=$key->getNewid()?>)"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></button>
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
