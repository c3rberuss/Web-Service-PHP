<div class="row">
    <div class="col-md-3"></div>

    <div class="col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">Agregar Usuario</div>
				<div class="panel-body">

                    <form role="form" action="<?= base_url().$action ?>" method="POST">
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="user">Usuario</label>
                                <input type="text" name="user" value="<?= $user ?>" id="user" placeholder="Nombre de Usuario" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="pass">Contraseña</label>
                                <input type="password" name="pass" value="<?= $pass ?>" id="pass" placeholder="Contraseña" class="form-control" required>
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

    </div>

    <div class="col-md-3"></div>

</div>
