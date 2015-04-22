<ul class="breadcrumb">
	<li><span class="fa fa-fw fa-dashboard"></span> <a href="<?php echo DIR;?>admin">Panel de Administración</a></li>
	<li><span class="fa fa-fw fa-users"></span> <a href="<?php echo DIR;?>admin/ponentes">Ponentes</a></li>
	<li><span class="fa fa-fw fa-edit"></span> Editar ponente</li>
</ul>

<?php echo \core\error::display($error) ?>

<a class="btn btn-danger" style="float: right; margin-top: 25px; margin-right: 50px;" href="<?php echo DIR.'admin/ponentes/'; ?>"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>

<h1>Editar Ponente</h1>

<h2><?php echo $data['row'][0]->ponenteName.' '.$data['row'][0]->ponenteApellidos; ?></h2>

<img src="../../../<?php echo $data['row'][0]->ponenteImg; ?>" style="max-height: 275px; margin: 0 auto; display: block;">

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" role="form">
	<fieldset>
		<!-- Form Name -->
		<legend style="display: none;"></legend>

		<div class="form-group">
			<label class="control-label" for="Nombre del ponente">Nombre</label>  
			<input class="form-control col-md-4" type="text" name="ponenteName" value="<?php echo $data['row'][0]->ponenteName; ?>">
		</div>
		<div class="form-group">
			<label class="control-label" for="Apellidos del ponente">Apellidos</label>  
			<input class="form-control col-md-4" type="text" name="ponenteApellidos" value="<?php echo $data['row'][0]->ponenteApellidos; ?>">
		</div>				
		<div class="form-group">
			<label class="control-label" for="Centro del ponente">Cargo</label>  
			<input class="form-control col-md-4" type="text" name="ponenteCentro" value="<?php echo $data['row'][0]->ponenteCentro; ?>">
		</div>
		<div class="form-group">
			<label class="control-label" for="Bio del ponente">Biografía</label> 
			<textarea class="form-control" rows="10" name="ponenteBio"><?php echo $data['row'][0]->ponenteBio;?></textarea>
		</div>
		<div class="form-group">
			<label class="control-label" for="Imagen del ponente">Imagen</label> 
			<input class="input-file" type="file" name="ponenteImg" placeholder="Imagen del ponente">
		</div>
		<div class="form-group">
			<label class="control-label" for="Agregar ponente"></label> 
			<input class="btn btn-primary" type="submit" name="submit" value="Actualizar">
		</div>
	</fieldset>	
</form>

<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea', plugins: "paste",paste_as_text: true, font_size_style_values: "14px", content_css : "<?php echo DIR ?>app/templates/admin/css/style.css"});</script>
