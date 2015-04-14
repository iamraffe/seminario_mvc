<?php echo \core\error::display($error); ?>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<img class="logo-seminario" src="../img/logoLogin.svg" alt="2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica">
	</div>
</div>	
<div class="row">
	<form class="form-horizontal" action="" method="POST" role="form">
		<div class="form-group">
			<label class="col-md-4 control-label" for="Usuario"></label>  
			<div class="col-md-4">
				<input class="form-control input-md" type="text" name="username" value="" placeholder="Usuario">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="Contraseña"></label>  
			<div class="col-md-4">
				<input class="form-control input-md" type="password" name="password" value="" placeholder="Contraseña">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="login"></label>  
			<div class="col-md-4">
				<input class="btn btn-default" type="submit" name="submit" value="Login">
			</div>
		</div>
	</form>
</div>