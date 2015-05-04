<ul class="breadcrumb">
	<li><span class="fa fa-home aqua"></span><a href="<?php echo DIR;?>"> Inicio</a></li>
	<li><span class="fa fa-pencil-square-o"></span> Inscripción</li>
</ul>
<h1 class="invisible"><?php echo $data['title']; ?></h1>
<?php echo \core\error::display($error) ?>	
<?php echo \core\success::display(\helpers\session::pull('message')) ?>


		<div class="row">
			<form class="form-horizontal check-in" method="post" role="form">
				<fieldset>
					<!-- Form Name -->
					<legend style="display: none;"></legend>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteName"></label>  
					  <div class="col-md-4">
					  <input id="asistenteName" name="asistenteName" type="text" placeholder="Nombre" class="form-control input-md" required="">
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistentePrimerApellido"></label>  
					  <div class="col-md-4">
					  <input id="asistentePrimerApellido" name="asistentePrimerApellido" type="text" placeholder="Primer Apellido" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteSegundoApellido"></label>  
					  <div class="col-md-4">
					  <input id="asistenteSegundoApellido" name="asistenteSegundoApellido" type="text" placeholder="Segundo Apellido" class="form-control input-md">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteCiudad"></label>  
					  <div class="col-md-4">
					  <input id="asistenteCiudad" name="asistenteCiudad" type="text" placeholder="Ciudad" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteCentro"></label>  
					  <div class="col-md-4">
					  <input id="asistenteCentro" name="asistenteCentro" type="text" placeholder="Centro" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteCargo"></label>  
					  <div class="col-md-4">
					  <input id="asistenteCargo" name="asistenteCargo" type="text" placeholder="Cargo" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteEmail"></label>  
					  <div class="col-md-4">
					  <input id="asistenteEmail" name="asistenteEmail" type="text" placeholder="Correo Electrónico" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteTelefono"></label>  
					  <div class="col-md-4">
					  <input id="asistenteTelefono" name="asistenteTelefono" type="text" placeholder="Teléfono " class="form-control input-md" required="">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="asistenteTelefonoSecundario"></label>  
					  <div class="col-md-4">
					  <input id="asistenteTelefonoSecundario" name="asistenteTelefonoSecundario" type="text" placeholder="Teléfono Secundario" class="form-control input-md">
					    
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="submit"></label>
					  <div class="col-md-4">
					    <button id="submit" name="submit" class="btn btn-default">Inscribirse</button>
					  </div>
					</div>
				</fieldset>
			</form>
		</div>