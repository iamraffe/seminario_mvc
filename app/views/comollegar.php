<ul class="breadcrumb">
	<li><a href="<?php echo DIR;?>"><span class="fa fa-home aqua"></span></a></li>
	<li><span class="fa fa-map-marker"></span> <?php echo \core\language::show('como_llegar', LANGUAGE_INDEX, \helpers\cookie::get('choose_language')) ?></li>
</ul>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<iframe id="map" src="https://mapsengine.google.com/map/u/0/embed?mid=zSBBmPYybDpM.kgYSBLH1Ij-c"></iframe>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1 accordion" rel="1">
		<?php echo \core\language::show('direcciones', LANGUAGE_INDEX, \helpers\cookie::get('choose_language')) ?>		
	</div>
</div>