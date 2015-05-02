<ul class="breadcrumb">
	<li><span class="fa fa-fw fa-dashboard"></span> <a href="<?php echo DIR;?>admin">Panel de Administración</a></li>
	<li><span class="fa fa-fw fa-users"></span> <a href="<?php echo DIR;?>admin/ponentes">Ponentes</a></li>
	<li><span class="fa fa-fw fa-user-plus"></span> Agregar ponente</li>
</ul>

<?php echo \core\error::display($error) ?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" role="form">
	<fieldset>

		<legend>Enviar invitación</legend>

		<div class="container">	
			<div class="form-group">
			  <label class="col-md-4 control-label" for="Tratamiento">Tratamiento</label>
			  <div class="col-md-4">
			    <select id="Tratamiento" name="Tratamiento" class="form-control">
			      <option value="Don">Don</option>
			      <option value="Doña">Doña</option>
			    </select>
			  </div>
			</div>
			<div class="form-group">
				<label class="control-label" for="Nombre">Nombre</label>  
				<input class="form-control col-md-4" type="text" name="Invitado" value="<?php if(isset($error)){echo $_POST['Invitado'];}?>" placeholder="Nombre">
			</div>
			<div class="form-group">
				<label class="control-label" for="Correo"></label>  
				<input class="form-control col-md-4" type="text" name="Correo" value="<?php if(isset($error)){echo $_POST['Correo'];}?>" placeholder="Correo">
			</div>		
			<div class="form-group">
				<label class="control-label" for="Hospital"></label>  
				<input class="form-control col-md-4" type="text" name="Hospital" value="<?php if(isset($error)){echo $_POST['Hospital'];}?>" placeholder="Hospital">
			</div>
			<div class="form-group">
				<label class="control-label" for="Agregar ponente"></label> 
				<input class="btn btn-primary" type="submit" name="submit" value="Agregar">
			</div>
		</div>
	</fieldset>	
</form>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea', plugins: "paste",paste_as_text: true});</script>
