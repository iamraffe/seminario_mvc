<?php use \helpers\form;?>
<div class="row">
	<div class="col-lg-6 col-md-6">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<span class="fa fa-users fa-5x"></span>
					</div>
					<div class="col-xs-9 text-right">
						<p class="huge"><?php echo $data['ponentes']; ?></p>
						<p>Ponentes</p>
					</div>
				</div>
			</div>	
			<a href="<?php echo DIR;?>admin/ponentes">
				<div class="panel-footer">
					<span class="pull-left">Más información</span>
					<span class="pull-right"><span class="fa fa-arrow-circle-right"></span></span>
					<div class="clearfix"></div>
				</div>			
			</a>		
		</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<span class="fa fa-database fa-5x"></span>
					</div>
					<div class="col-xs-9 text-right">
						<p class="huge"><?php echo $data['asistentes']; ?></p>
						<p>Asistentes</p>
					</div>
				</div>
			</div>	
			<a href="<?php echo DIR;?>admin/asistentes">
				<div class="panel-footer">
					<span class="pull-left">Más información</span>
					<span class="pull-right"><span class="fa fa-arrow-circle-right"></span></span>
					<div class="clearfix"></div>
				</div>			
			</a>		
		</div>
	</div>	
</div>
<div class="row">		

</div>