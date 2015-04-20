<ul class="breadcrumb">
	<li><span class="fa fa-fw fa-dashboard"></span> <a href="<?php echo DIR;?>admin">Panel de Administración</a></li>
	<li><span class="fa fa-fw fa-users"></span> <a href="<?php echo DIR;?>admin/ponentes">Ponentes</a></li>
	<li><span class="fa fa-fw fa-user-plus"></span> Agregar ponente</li>
</ul>

<?php echo \core\error::display($error) ?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" role="form">
	<fieldset>
		<!-- Form Name -->
		<legend>Agregar Ponente</legend>

		<div class="form-group">
			<label class="control-label" for="Nombre del ponente"></label>  
			<input class="form-control col-md-4" type="text" name="ponenteName" value="<?php if(isset($error)){echo $_POST['ponenteName'];}?>" placeholder="Nombre del ponente">
		</div>
		<div class="form-group">
			<label class="control-label" for="Apellidos del ponente"></label>  
			<input class="form-control col-md-4" type="text" name="ponenteApellidos" value="<?php if(isset($error)){echo $_POST['ponenteApellidos'];}?>" placeholder="Apellidos del ponente">
		</div>		
		<div class="form-group">
			<label class="control-label" for="Centro del ponente"></label>  
			<input class="form-control col-md-4" type="text" name="ponenteCentro" value="<?php if(isset($error)){echo $_POST['ponenteCentro'];}?>" placeholder="Centro del ponente">
		</div>
		<div class="form-group">
			<label class="control-label" for="Bio del ponente">Bio del ponente</label> 
			<textarea class="form-control" rows="10" name="ponenteBio" value="<?php if(isset($error)){echo $_POST['ponenteBio'];}?>" placeholder="Bio del ponente"></textarea>
		</div>
		<div class="form-group">
			<label class="control-label" for="Imagen del ponente"></label> 
			<input class="input-file" type="file" name="ponenteImg" placeholder="Imagen del ponente">
		</div>
		<div class="form-group">
			<label class="control-label" for="Agregar ponente"></label> 
			<input class="btn btn-primary" type="submit" name="submit" value="Agregar">
		</div>
	</fieldset>	
</form>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea', plugins: "paste",paste_as_text: true});</script>
