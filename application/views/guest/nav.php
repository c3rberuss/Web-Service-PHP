<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Restaurante</span>Admin</a>

			</div>
		</div><!-- /.container-fluid -->
	</nav>

  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?=base_url() ?>plantilla/images/perfil.png " class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?= $this->session->userdata('username') ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<ul class="nav menu">
			<li class="active"><a href="<?=base_url() ?>home"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

      <!--Menu desplegable Restaurante -->
      <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Restaurantes <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?= base_url() ?>add/restaurant">
						<span class="fa fa-arrow-right">&nbsp;</span> Agregar
					</a></li>
				</ul>
			</li>

      <!--Menu desplegable Platillos -->
      <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-navicon">&nbsp;</em> Platillos <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="<?= base_url() ?>add/food">
						<span class="fa fa-arrow-right">&nbsp;</span> Agregar
					</a></li>
					<li><a class="" href="<?= base_url() ?>home/food">
						<span class="fa fa-arrow-right">&nbsp;</span> Listar
					</a></li>

				</ul>
			</li>

      <!--Menu desplegable Categorías -->
      <li class="parent "><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-navicon">&nbsp;</em> Categorias <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li><a class="" href="<?= base_url() ?>add/category">
						<span class="fa fa-arrow-right">&nbsp;</span> Agregar
					</a></li>
					<li><a class="" href="<?= base_url() ?>home/categories">
						<span class="fa fa-arrow-right">&nbsp;</span> Listar
					</a></li>
				</ul>
			</li>

      <!--Menu desplegable Usuarios -->
      <li class="parent "><a data-toggle="collapse" href="#sub-item-4">
				<em class="fa fa-navicon">&nbsp;</em> Usuarios <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li><a class="" href="<?= base_url() ?>add/user">
						<span class="fa fa-arrow-right">&nbsp;</span> Agregar
					</a></li>
					<li><a class="" href="<?= base_url() ?>home/users">
						<span class="fa fa-arrow-right">&nbsp;</span> Listar
					</a></li>
				</ul>
			</li>

      <!--Menu desplegable Comentarios -->
      <li class="parent "><a data-toggle="collapse" href="#sub-item-5">
				<em class="fa fa-navicon">&nbsp;</em> Comentarios <span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-5">
					<li><a class="" href="<?= base_url() ?>home/comments">
						<span class="fa fa-arrow-right">&nbsp;</span> Listar
					</a></li>
				</ul>
			</li>

			<li><a href="<?=base_url() ?>access/logout"><em class="fa fa-power-off">&nbsp;</em> Cerrar Sesión</a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=base_url() ?>home">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"><?=$active_page ?></li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div style="height: 25px;"></div>
			</div>
		</div>
