	<ul class="breadcrumb">
	<li><a href="<?php echo DIR;?>"><span class="fa fa-home aqua"></span></a></li>
	<li><span class="fa fa-trophy"></span> <?php echo \core\language::show('premios', LANGUAGE_INDEX, \helpers\cookie::get('language')) ?></li>
</ul>

		<div id="premio" class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php echo \core\language::show('prizes', LANGUAGE_INDEX, \helpers\cookie::get('language')) ?>
			</div>			
		</div>