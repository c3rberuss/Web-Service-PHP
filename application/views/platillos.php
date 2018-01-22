<div class="row">
    <div class="col-md-1"></div>

    <div class="col-md-10">

        <div class="panel panel-default">
            <div class="panel-heading">Agregar Platillo</div>

            <div class="panel-body">

                <form role="form" action="<?= base_url().$action ?>" method="POST">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="platillo">Platillo</label>
                            <input type="text" name="platillo" id="platillo" placeholder="Pizza" class="form-control" required value="<?= $platillo ?>">
                        </div>

                        <div class="row">
                            <div class="col-md-9">

                                <div class="form-group">

                                    <label for="categoria">Categoría</label>

                                    <select class="form-control" name="categoria" id="categoria">

                                        <?= $categorias ?>

                                    </select>
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="precio">Precio</label>
                                    <input type="number" name="precio" id="precio" min="0" step="0.5" value="<?= $precio ?>"  placeholder="2.50" class="form-control" required>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="1" class="form-control" maxlength="100" placeholder="Pizza, Hambuguesas, etc..." ><?= $descripcion ?></textarea>
                        </div>

                        <div class="form-group">

                            <label for="restaurantes">Restaurante</label>
                            <select class="form-control" name="restaurante" id="restaurantes" >

                                <?= $restaurantes ?>

                            </select>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header"></h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <button type="reset" id="limpiar" class="btn btn-block btn-danger"><span class="glyphicon glyphicon-trash">&nbsp;</span>Limpiar</button>
                            </div>

                            <div class="col-md-7">
                                <button type="submit" class="btn btn-primary btn-block" name="id" value="<?= $id ?>"><span class="glyphicon glyphicon-plus">&nbsp;</span><?= $textButton ?></button>
                            </div>
                        </div>

                    </div>

                </form>

			</div>
        </div>

	</div><!-- /.panel-->

    <div class="col-md-1"></div>

</div>
