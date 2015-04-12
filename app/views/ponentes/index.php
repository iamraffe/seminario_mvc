<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<?php 
			if($data['ponentes']){
				echo '<ul id="ponentes-list">';
				foreach ($data['ponentes'] as $row) {
					echo '<li class="ponente-name"><a href="'.DIR.$row->slug.'">'.$row->ponenteName.'</a></li>';
					echo '<li>'.$row->ponenteCentro.'</li>';
				}
				echo '</ul>';
			}
		?>
	</div>
</div>

