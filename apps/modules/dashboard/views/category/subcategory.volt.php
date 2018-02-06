<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header no-border-bottom card-header-descriptive">
                    <h4>Lista de subcategorias</h4>
                </div>
                <div class="card-block">
                    <div class="float-xs-right input-with-icon mb-1">
                        <h2><a href=""  data-toggle="modal" data-target="#myContra"><span class="fa fa-plus-circle"></span>Nueva Subcategoria</a></h2>
                    </div>
                    <div class="table-responsive">
                        <table  class="table" id="data-table-job1">
                            <thead>
                            <tr>
                                <th>Subcategoria</th>
                                <th>Permalink</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($consulta as $cnv): ?>
                                <tr id="<?=$cnv->getSubid()?>">
                                    <td class="subcategoryName"><?=$cnv->getName()?></td>
                                    <td class="subcategoryPermalink"><?=$cnv->getPermalink()?></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning bActualizarSubCategoria" data-id="<?=$cnv->getSubid()?>" data-toggle="modal" data-target="#myEditSubCategory"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteSubcategory('<?=$cnv->getSubid()?>')"><i class="fa fa-times" aria-hidden="true"></i></button>
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

<div class="modal fade" id="myContra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Nueva Subcategoria</h4>
            </div>
            <form id="newSubCategory">
                <div class="modal-body">

                    <!--===================================Div principal del modal para hacer el formulario======================================-->
                   <input type="hidden" value="<?=$id?>" name="id">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Nombre:</label>
                                <input type="text" class="form-control cpSubCategory" name="nameSubCategory">
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Permalink: </label>
                                <input type="text" id="permalinkSubCategory" name="permalinkSubCategory" class="form-control permalinkSubCategory" readonly>
                            </div>
                        </div>
                    </div>

                    <!--=========================================================================================================================-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" id="bActualizarPass" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="myEditSubCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Nueva Subcategoria</h4>
            </div>
            <form id="editSubCategory">
                <div class="modal-body">
                    <!--===================================Div principal del modal para hacer el formulario======================================-->
                    <input type="hidden" name="id_subcategory">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Nombre:</label>
                                <input type="text" class="form-control cpEditSubCategory" name="nameEditSubCategory">
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Permalink: </label>
                                <input type="text" name="permalinkEditSubCategory" id="permlinkEditSubCategory" class="form-control" readonly>
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

