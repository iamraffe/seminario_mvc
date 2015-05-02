<ul class="breadcrumb">
	<li><a href="<?php echo DIR;?>"><span class="fa fa-home aqua"></span></a></li>
	<li><span class="fa fa-th-list"></span> <?php echo \core\language::show('programa', LANGUAGE_INDEX, \helpers\session::get('language')) ?></li>
</ul>
<div class="row">
	<div class="col-sm-10hcol-sm-offset-1 programa-seminario">
		<?php echo \core\language::show('program', LANGUAGE_INDEX, \helpers\session::get('language')) ?>
	</div>
</div>		