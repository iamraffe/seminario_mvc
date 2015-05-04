<ul class="breadcrumb">
	<li><span class="fa fa-home aqua"></span><a href="<?php echo DIR;?>"> Inicio</a></li>
	<li><span class="fa fa-map-marker"></span> Cómo llegar</li>
</ul>
<h1 class="invisible"><?php echo $data['title']; ?></h1>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<iframe id="map" src="https://mapsengine.google.com/map/u/0/embed?mid=zSBBmPYybDpM.kgYSBLH1Ij-c"></iframe>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1 accordion">
		<h1 class="invisible">Direcciones</h1>
		<!-- LOCALIZACION -->
		<div class="accordion-title active">
			<h2><a href="#">Localización</a></h2>
		</div>
		<div class="accordion-inner default">
			<div class="row">
				<div class="col-md-5 col-sm-6 col-md-offset-1 col-sm-offset-1">
					<h3 class="bold">Hospital Universitario Fundación Jiménez Díaz. Aula Magna.</h3>
					<h3>Avda. Reyes Católicos, 2</h3>
					<h3>28040 – Madrid</h3>
				</div>
				<div class="col-md-5 col-sm-3">
					<img src="img/logo-fundacion-jimenez-diaz.jpeg" alt="Fundación Jiménez Díaz">
				</div>
			</div>					
		</div>
		<!-- METRO -->
		<div class="accordion-title">
			<h2><a href="#">Si viene en Metro</a></h2>
		</div>
		<div class="accordion-inner">
			<div class="row">
				<div class="col-sm-3 col-md-offset-1 col-sm-offset-1">
					<!-- <img src="img/icono-metro.png" alt="Metro de Madrid"> -->
					<span class="fa fa-subway fa-5x aqua block center margin-top-10"></span>
				</div>			
				<div class="col-sm-6">
					<ul class="margin-top-10">
						<li>Moncloa</li>
						<li>Islas Filipinas</li>
					</ul>
				</div>
			</div>					
		</div>
		<!-- BUS -->	
		<div class="accordion-title">
			<h2><a href="#">Si viene en Autobús</a></h2>
		</div>
		<div class="accordion-inner">
			<div class="row">
				<div class="col-sm-2 col-md-offset-1 col-sm-offset-1">
					<!-- <img src="img/icono-autobus.png" alt="Autobuses de Madrid"> -->
					<span class="fa fa-bus fa-5x aqua block center margin-top-10"></span>
				</div>			
				<div class="col-sm-4">
					<ul  class="margin-top-10">
						<li>Línea 1</li>
						<li>Línea 12</li>
						<li>Línea 44</li>
						<li>Línea 82</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<ul>
						<li>Línea 132</li>
						<li>Línea C</li>
						<li>Línea G</li>
					</ul>
				</div>				
			</div>					
		</div>			
	</div>
</div>
