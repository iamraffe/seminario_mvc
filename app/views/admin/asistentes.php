<ul class="breadcrumb">
	<li><span class="fa fa-fw fa-dashboard"></span> <a href="<?php echo DIR;?>admin">Panel de Administración</a></li>
	<li><span class="fa fa-fw fa-users"></span> Asistentes</li>
</ul>
<h1>Asistentes</h1>
<?php echo \core\success::display(\helpers\session::pull('message')) ?>
<p><a href="<?php echo DIR; ?>admin/asistentes/add" class="btn btn-primary">Agregar Asistente</a></p>

<table id="asistentes" class='table table-striped table-hover dt-responsive'>
<thead>
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Ciudad</th>
		<th>Centro</th>
		<th>Cargo</th>
		<th>Email</th>
		<th>Telf</th>
		<th>Telf Secundario</th>	
		<th>Opciones</th>	
	</tr>
</thead>

<tfoot>
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Ciudad</th>
		<th>Centro</th>
		<th>Cargo</th>
		<th>Email</th>
		<th>Telf</th>
		<th>Telf Secundario</th>	
		<th>Opciones</th>	
	</tr>
</tfoot>
<tbody>
<?php 
	if($data['asistentes']){
		foreach($data['asistentes'] as $row){
			echo '<tr>';
			echo '<td>'.$row->asistenteName.'</td>';
			echo '<td>'.$row->asistentePrimerApellido.' '.$row->asistenteSegundoApellido.'</td>';
			echo '<td>'.$row->asistenteCiudad.'</td>';
			echo '<td>'.$row->asistenteCentro.'</td>';
			echo '<td>'.$row->asistenteCargo.'</td>';
			echo '<td>'.$row->asistenteEmail.'</td>';
			echo '<td>'.$row->asistenteTelefono.'</td>';
			echo '<td>'.$row->asistenteTelefonoSecundario.'</td>';			
			echo '<td>
							<a href="'.DIR.'admin/asistentes/edit/'.$row->asistenteID.'"><span class="glyphicon glyphicon-edit"></span></a>
							<a href="javascript:delasistente(\''.$row->asistenteID.'\', \''.$row->asistenteName.'\')"><span class="glyphicon glyphicon-remove"></span></a>
						</td>';
			echo '</tr>';
		}
	}
?>	
</tbody>
</table>

