<div class="row">
    <div class="col-md-3"></div>

    <div class="col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">Agregar Categoria</div>
			<div class="panel-body">

                <form role="form" action="<?= base_url().$action ?>" method="POST">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="categoria" id="titulo" placeholder="Comida Rápida" class="form-control" required value="<?= $categoria ?>">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="3" class="form-control" maxlength="100" placeholder="Pizza, Hambuguesas, etc..."><?= $descripcion ?></textarea>
                        </div>

                        <div class="row">

                            <div class="col-md-12">

                                <div class="col-lg-12">
                                    <h1 class="page-header"></h1>
                                </div>

                                <div class="col-md-6">
                                    <button type="reset" id="limpiar" class="btn btn-block btn-danger"><span class="glyphicon glyphicon-trash">&nbsp;</span>Limpiar</button>
                                </div>

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block" name="id" value="<?= $id ?>"><span class="glyphicon glyphicon-plus">&nbsp;</span><?= $textButton ?></button>
                                </div>
                            </div>

                        </div>

                    </div>

                </form>

		    </div>
        </div>
	</div>

    <div class="col-md-3"></div>

</div>
