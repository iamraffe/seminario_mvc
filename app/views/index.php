		<div class="row">
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-7 big-text">
						<h1><?php echo \core\language::show('jumbotron', LANGUAGE_INDEX, \helpers\cookie::get('language')) ?></h1>
						<!-- <img src="img/peps.svg"> -->
						<a class="btn btn-custom btn-lg margin-top-20" href="<?php echo DIR;?>registro">
							<?php echo \core\language::show('inscripcion', LANGUAGE_INDEX, \helpers\cookie::get('language')) ?>  <span class="fa fa-pencil-square-o"></span>
						</a>
					</div>
					<div class="col-md-5 hidden-xs hidden-sm">
						<!-- <img src="img/peps.svg" style="width: 85%;">  -->
						<img src="img/raimon.png"> 
					</div>
				</div>
			</div>	
		</div>
		<div class="row letter">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-1 letter-intro">
						<?php echo \core\language::show('date-and-place', LANGUAGE_INDEX, \helpers\cookie::get('language')) ?>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 letter-content">
						<?php echo \core\language::show('carta', LANGUAGE_INDEX, \helpers\cookie::get('language')) ?>
					</div>
				</div>
			</div>
		</div>