			</div>
		</div>	
	</div>

<!-- JS -->
<?php
	helpers\assets::js(array(
		'//code.jquery.com/jquery-1.11.1.min.js',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', 
		'//cdn.datatables.net/1.10.6/js/jquery.dataTables.js',
		'//cdn.datatables.net/responsive/1.0.5/js/dataTables.responsive.js',
		'//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.js'

	)) ;
	echo $data['js'];
?>
</body>
</html>
