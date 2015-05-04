
</div> <!-- ./container -->

	<footer>
		<div class="container">
			<div class="row">
				<p class="bold">© 2<sup>o</sup> Seminario Internacional de Seguridad del Paciente y Excelencia Clínica</p>
				<a href="<?php echo DIR;?>condiciones">Condiciones de uso</a>	
			</div>
		</div>
	</footer>
<!-- JS -->
<?php
	helpers\assets::js(array(
		'//code.jquery.com/jquery-1.11.2.min.js',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', 
		'//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js',
		'//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.js'
	)) ;

	echo $data['js'];
?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-62580041-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>
