<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<title><?php if($data['title'] != ''){echo $data['title'].' | '.SITETITLE;}else{echo SITETITLE;} ?></title>

	<!-- CSS -->
	<?php
		helpers\assets::css(array(			
			'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
			'//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.css',
			helpers\url::template_path() . 'css/style.css'			
		))
	?>

</head>
<body>

<div class="container">

