<ul class="breadcrumb">
	<li><a href="<?php echo DIR;?>"><span class="fa fa-home aqua"></span></a></li>
	<li><span class="fa fa-pencil-square-o"></span> <?php echo \core\language::show('inscripcion', LANGUAGE_INDEX, \helpers\cookie::get('language')) ?></li>
</ul>

<?php echo \core\error::display($error) ?>	
<?php echo \core\success::display(\helpers\session::pull('message')) ?>


		<div class="row">
			<?php echo \core\language::show('registrarse', LANGUAGE_INDEX, \helpers\cookie::get('language')) ?>
		</div>