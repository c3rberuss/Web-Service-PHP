<div class="row">
    <div class="col-md-1"></div>

    <div class="col-md-10">

        <div class="panel panel-default">
            <div class="panel-heading">Agregar Restaurante</div>

            <div class="panel-body">

                <form role="form" action="<?= base_url().$action ?>" method="POST">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="restaurante">Restaurante</label>
                            <input type="text" name="restaurante" id="restaurante" placeholder="Burritos Grill" class="form-control" required value="<?= $restaurante ?>">
                        </div>

                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="tel" name="telefono" id="telefono" placeholder="+000 0000-0000 " class="form-control" pattern="[\+]\d{3} \d{4}[\-]\d{4}" required value="<?= $telefono ?>">
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input type="text" name="direccion" id="direccion" placeholder="Calle Nº " class="form-control" required value="<?= $direccion ?>">
                        </div>

                        <div class="form-group">

                            <label for="categoria">Categoría</label>
                            <select class="form-control" name="categoria" id="categoria">
                                <?= $categorias ?>
                            </select>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header"></h1>
                            </div>
                        </div><!--/.row-->

                        <div class="row">
                            <div class="col-md-5">
                                <button type="reset" id="limpiar" class="btn btn-block btn-danger"><span class="glyphicon glyphicon-trash">&nbsp;</span>Limpiar</button>
                            </div>

                            <div class="col-md-7">
                                <button type="submit" class="btn btn-primary btn-block" name="id" value="<?= $id?>"><span class="glyphicon glyphicon-plus">&nbsp;</span><?= $textButton ?></button>
                            </div>

                        </div>


                    </div>

                </form>

            </div>
        </div>
    </div><!-- /.panel-->

    <div class="col-md-1"></div>

</div>
