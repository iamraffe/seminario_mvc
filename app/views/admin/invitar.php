<ul class="breadcrumb">
	<li><span class="fa fa-fw fa-dashboard"></span> <a href="<?php echo DIR;?>admin">Panel de Administración</a></li>
	<li><span class="fa fa-fw fa-users"></span> Asistentes</li>
</ul>
<h1>Invitar</h1>
<?php echo \core\success::display(\helpers\session::pull('message')) ?>

<p><a href="<?php echo DIR; ?>admin/invitar/add" class="btn btn-primary">Nueva Invitación</a></p>

<table id="invitados" class='table table-striped table-hover dt-responsive'>
<thead>
	<tr>
		<th></th>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Centro</th>
	</tr>
</thead>

<tfoot>
	<tr>
		<th></th>
		<th>Nombre</th>
		<th>Ciudad</th>
		<th>Centro</th>
	</tr>
</tfoot>
<tbody>
<?php 
	if($data['invitados']){
		foreach($data['invitados'] as $row){
			echo '<tr>';				
			echo '<td>'.$row->Tratamiento.'</td>';
			echo '<td>'.$row->Invitado.'</td>';
			echo '<td>'.$row->Correo.'</td>';
			echo '<td>'.ucwords(mb_strtolower($row->Hospital)).'</td>';
			echo '</tr>';
		}
	}
?>	
</tbody>
</table>

