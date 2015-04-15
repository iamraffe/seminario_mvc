<ul class="breadcrumb">
	<li><span class="fa fa-fw fa-dashboard"></span> <a href="<?php echo DIR;?>admin">Panel de Administración</a></li>
	<li><span class="fa fa-fw fa-users"></span> <a href="<?php echo DIR;?>admin/users">Administadores</a></li>
	<li><span class="fa fa-fw fa-dashboard"></span> Agregar administrador</li>
</ul>
<?php echo \core\error::display($error); ?>
<form action="" method="post" role="form">
	<input type="text" name="username" placeholder="Username" value="<?php if(isset($error)){echo $_POST['username'];} ?>">
	<input type="password" name="password" placeholder="Password">
	<input type="text" name="email" placeholder="Email" value="<?php if(isset($error)){echo $_POST['email'];} ?>">
	<input type="submit" name="submit" value="Agregar">
</form>