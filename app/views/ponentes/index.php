<ul class="breadcrumb">
	<li><a href="<?php echo DIR;?>" title="Bienvenida"><span class="fa fa-home aqua"></span></a></li>
	<li><span class="fa fa-users"></span> Ponentes</li>
</ul>
<h1 class="invisible"><?php echo $data['title']; ?></h1>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<?php
			if($data['ponentes']){
			/*	echo '<ul id="ponentes-list">';
				foreach ($data['ponentes'] as $row) {
					echo '<li class="ponente-name"><a href="'.DIR.$row->slug.'">'.$row->ponenteName.'</a></li>';
					echo '<li>'.$row->ponenteCentro.'</li>';
				}
				echo '</ul>';*/
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

