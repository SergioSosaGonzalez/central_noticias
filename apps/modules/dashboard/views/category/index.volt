
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header no-border-bottom card-header-descriptive">
                    <h4>Lista de categorias</h4>
                </div>
                <div class="card-block">
                    <div class="float-xs-right input-with-icon mb-1">
                        <h2><a href=""  data-toggle="modal" data-target="#myContra"><span class="fa fa-plus-circle"></span>Nueva Categoria</a></h2>
                    </div>
                    <div class="table-responsive">
                        <table  class="table" id="data-table-job">
                            <thead>
                            <tr>
                                <th>Categoria</th>
                                <th>Permalink</th>
                                <th>Subcategorias</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                                <tbody>
                                <?php foreach ($consulta as $key): ?>
                                <tr id="<?=$key->getCatid()?>">
                                    <td class="categoryName"><?=$key->getName()?></td>
                                    <td class="categoryPermalink"><?=$key->getPermalink()?></td>
                                    <td><button type="button" class="btn btn-sm btn-default" onclick="subcategory(<?=$key->getCatid()?>)"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                                    <td><button type="button" class="btn btn-sm btn-warning bActualizarCategoria" data-toggle="modal" data-target="#myEditCategory" data-id="<?=$key->getCatid()?>"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></button></td>
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
                <h4 class="modal-title" id="myModalLabel">Nueva categoria</h4>
            </div>
            <form id="newCategory">
                <div class="modal-body">

                    <!--===================================Div principal del modal para hacer el formulario======================================-->

                    <div class="container">
                       <div class="row">
                            <div class="col-md-12">
                                <label>Nombre:</label>
                                <input type="text" class="form-control cpCategory" name="nameCategory">
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Permalink: </label>
                                <input type="text" name="permalinkCategory" id="permlinkCategory" class="form-control" readonly>
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

<div class="modal fade" id="myContra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Nueva categoria</h4>
            </div>
            <form id="newCategory">
                <div class="modal-body">

                    <!--===================================Div principal del modal para hacer el formulario======================================-->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Nombre:</label>
                                <input type="text" class="form-control cpCategory" name="nameCategory">
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Permalink: </label>
                                <input type="text" name="permalinkCategory" id="permlinkCategory" class="form-control" readonly>
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

<div class="modal fade" id="myEditCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Nueva categoria</h4>
            </div>
            <form id="editCategory">
                <div class="modal-body">

                    <!--===================================Div principal del modal para hacer el formulario======================================-->
                     <input type="hidden" name="id_category">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Nombre:</label>
                                <input type="text" class="form-control cpEditCategory" name="nameEditCategory">
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Permalink: </label>
                                <input type="text" name="permalinkEditCategory" id="permlinkEditCategory" class="form-control" readonly>
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
