<ul class="breadcrumb">
	<li><span class="fa fa-fw fa-dashboard"></span> <a href="<?php echo DIR;?>admin">Panel de Administración</a></li>
	<li><span class="fa fa-fw fa-users"></span> <a href="<?php echo DIR;?>admin/ponentes">Asistentes</a></li>
	<li><span class="fa fa-fw fa-edit"></span> Editar asistente</li>
</ul>

<?php echo \core\error::display($error) ?>

<a class="btn btn-danger" style="float: right; margin-top: 25px; margin-right: 50px;" href="<?php echo DIR.'admin/asistentes/'; ?>"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>

<h1>Editar Ponente</h1>

<h2><?php echo $data['row'][0]->asistenteName.' '.$data['row'][0]->asistentePrimerApellido; ?></h2>


			<form class="form-horizontal check-in" action="" method="post" role="form">
				<fieldset>
					<!-- Form Name -->
					<legend style="display: none;"></legend>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
					  <div class="col-md-4">
					  <input id="asistenteName" name="asistenteName" type="text" value="<?php echo $data['row'][0]->asistenteName; ?>" class="form-control input-md" required="">
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistentePrimerApellido">Primer Apellido</label>  
					  <div class="col-md-4">
					  <input id="asistentePrimerApellido" name="asistentePrimerApellido" type="text" value="<?php echo $data['row'][0]->asistentePrimerApellido; ?>" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteSegundoApellido">Segundo Apellido</label>  
					  <div class="col-md-4">
					  <input id="asistenteSegundoApellido" name="asistenteSegundoApellido" type="text" value="<?php echo $data['row'][0]->asistenteSegundoApellido; ?>" class="form-control input-md">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteCiudad">Ciudad</label>  
					  <div class="col-md-4">
					  <input id="asistenteCiudad" name="asistenteCiudad" type="text" value="<?php echo $data['row'][0]->asistenteCiudad; ?>" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteCentro">Centro</label>  
					  <div class="col-md-4">
					  <input id="asistenteCentro" name="asistenteCentro" type="text" value="<?php echo $data['row'][0]->asistenteCentro; ?>" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteCargo">Cargo</label>  
					  <div class="col-md-4">
					  <input id="asistenteCargo" name="asistenteCargo" type="text" value="<?php echo $data['row'][0]->asistenteCargo; ?>" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteEmail">Correo Electrónico</label>  
					  <div class="col-md-4">
					  <input id="asistenteEmail" name="asistenteEmail" type="text" value="<?php echo $data['row'][0]->asistenteEmail; ?>" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteTelefono">Teléfono</label>  
					  <div class="col-md-4">
					  <input id="asistenteTelefono" name="asistenteTelefono" type="text" value="<?php echo $data['row'][0]->asistenteTelefono; ?>" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteTelefonoSecundario">Teléfono Secundario</label>  
					  <div class="col-md-4">
					  <input id="asistenteTelefonoSecundario" name="asistenteTelefonoSecundario" type="text" value="<?php echo $data['row'][0]->asistenteTelefonoSecundario; ?>" class="form-control input-md">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="submit"></label>
					  <div class="col-md-4">
					    <button id="submit" name="submit" class="btn btn-default">Actualizar</button>
					  </div>
					</div>
				</fieldset>
			</form>

