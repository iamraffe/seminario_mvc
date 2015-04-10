<ul class="breadcrumb">
	<li><a href="<?php echo DIR;?>admin">Panel de Administración</a></li>
	<li><a href="<?php echo DIR;?>admin/ponentes">Ponentes</a></li>
	<li>Editar ponente</li>
</ul>

<?php echo \core\error::display($error) ?>

<a class="btn btn-danger" style="float: right; margin-top: 25px; margin-right: 50px;" href="<?php echo DIR.'admin/ponentes/'; ?>"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>

<h1>Editar Ponente</h1>

<h2><?php echo $data['row'][0]->ponenteName; ?></h2>

<img src="../../../<?php echo $data['row'][0]->ponenteImg; ?>" style="max-height: 275px; margin: 0 auto; display: block;">

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" role="form">
	<fieldset>
		<!-- Form Name -->
		<legend style="display: none;"></legend>

		<div class="form-group">
			<label class="control-label" for="Nombre del ponente">Nombre del ponente</label>  
			<input class="form-control col-md-4" type="text" name="ponenteName" value="<?php echo $data['row'][0]->ponenteName; ?>">
		</div>
		<div class="form-group">
			<label class="control-label" for="Centro del ponente">Centro del ponente</label>  
			<input class="form-control col-md-4" type="text" name="ponenteCentro" value="<?php echo $data['row'][0]->ponenteCentro; ?>">
		</div>
		<div class="form-group">
			<label class="control-label" for="Bio del ponente">Bio del ponente</label> 
			<textarea class="form-control" rows="10" name="ponenteBio"><?php echo $data['row'][0]->ponenteBio;?></textarea>
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

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
