<ul class="breadcrumb">
	<li><a href="<?php echo DIR;?>admin">Panel de Administración</a></li>
	<li><a href="<?php echo DIR;?>admin/users">Administadores</a></li>
	<li>Editar administrador</li>
</ul>
<?php echo \core\error::display($error); ?>
<form action="" method="post" role="form">
	<input type="text" name="username" placeholder="Username" value="<?php echo  $data['row'][0]->username;?>">
	<input type="password" name="password" placeholder="Password">
	<input type="text" name="email" placeholder="Email" value="<?php $data['row'][0]->email; ?>">
	<input type="submit" name="submit" value="Editar">
</form>