<ul class="breadcrumb">
	<li><a href="<?php echo DIR;?>"><span class="fa fa-home aqua"></span></a></li>
	<li><span class="fa fa-users"></span> <?php echo \core\language::show('ponentes', LANGUAGE_INDEX, \helpers\cookie::get('language')) ?></li>
</ul>
<h1 class="invisible"><?php echo $data['title']; ?></h1>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<?php
			if($data['ponentes']){
				$counter = 1;
				foreach ($data['ponentes'] as $row) {
					if($counter % 4 == 0){
						echo '<div class="row">';
					}
					echo '<div class="col-lg-3 col-md-3 col-xs-6 thumb">';

					echo '<a class="thumbnail" href="'.DIR.$row->slug.'">
							<img class="img-responsive" src="'.$row->ponenteImg.'" alt="'.$row->ponenteName.' '.$row->ponenteApellidos.'">
							<h3>'.$row->ponenteName.' '.$row->ponenteApellidos.'</h3>
							<p>'.$row->ponenteCentro.'</p>
					</a>';
					echo '</div>';

					if($counter % 4 == 0){
						echo '</div>';
						$counter = 1;
					}else{
						$counter++;
					}

				}
			}
		?>
	</div>
</div>

