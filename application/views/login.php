<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrador de Restaurantes</title>
	<link href="<?= base_url() ?>plantilla/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>plantilla/css/datepicker3.css" rel="stylesheet">
	<link href="<?= base_url() ?>plantilla/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Iniciar Sesión</div>
				<div class="panel-body">
					<form role="form" action="<?= base_url() ?>access" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Usuario" name="usuario" type="text" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Contraseña" name="password" type="password" required>
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button class="btn btn-primary" type="submit">Ingresar</button>
              </fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<script src="<?= base_url() ?>/platilla/js/jquery-1.11.1.min.js"></script>
	<script src="<?= base_url() ?>/platilla/js/bootstrap.min.js"></script>
</body>
</html>
