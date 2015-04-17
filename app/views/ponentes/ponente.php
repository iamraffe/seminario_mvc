<?php 
	if($data['ponente']){
		foreach ($data['ponente'] as $row) {
?>
<ul class="breadcrumb">
	<li><span class="fa fa-home aqua"></span><a href="<?php echo DIR;?>"> Inicio</a></li>
	<li><span class="fa fa-users aqua"></span><a href="<?php echo DIR;?>ponentes"> Ponentes</a></li>
	<li><span class="fa fa-user-md"></span> <?php echo $row->ponenteName ?></li>
</ul>

<div id="ponente" class="row">
	<a href="<?php echo DIR;?>ponentes" class="btn btn-seminario-aqua"><span class="fa fa-arrow-left"></span> Atrás</a>
	<div class="col-md-10 col-md-offset-1">
		<div class="row">
			<div class="col-sm-6">
				<div class="member">
					<div class="member-img">
						<?php
							echo '<img src="'.$row->ponenteImg.'" alt="'.$row->ponenteName.'">';
							echo '<h2>'.$row->ponenteName.'</h2>';
						?>
							<div class="member-role">
								<?php
									echo '<p class="ponente-cargo">'.$row->ponenteCargo.'</p>';
									echo '<p class="ponente-centro">'.$row->ponenteCentro.'</p>';
								?>
							</div>
					</div>		
				</div>	
			</div>
			<div class="col-sm-6">
			<?php
						echo $row->ponenteBio;
			?>
			</div>
		</div>
	</div>
</div>

<?php
		}
	}
?>
