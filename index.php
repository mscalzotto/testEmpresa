<?php
	include 'cfg/connection.php';
	include 'cfg/core.php';

	$pdo = new PDO('mysql:dbname='. DB_DBNAME .';host='. DB_HOST, DB_USER, DB_PASS);
	$db = new Database($pdo);

?>
<!DOCTYPE html>
	<head>
		<meta charset="ISO-8859-1">
		<script type="text/javascript" src="js/jquery-latest/jquery.latest.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	
	<body>
		<header>
			<?php
				$navElements = array(
					'Google' => 'http://www.google.com.ar',
					'Facebook' => 'http://www.facebook.com',
					'Gmail' => 'http://www.gmail.com',
					'Hotmail' => 'http://www.hotmail.com',
			    );

				$header = HtmlElements::nav($navElements);
		     ?>
		</header>

		<?php HtmlElements::openForm('agregaEmpleado', 'empleados.php'); ?>
			<fieldset>
				<?php HtmlElements::input('agregarNombre', 'text', 'agregarNombre', 'Nombre'); ?>
				<?php HtmlElements::input('agregarApellido', 'text', 'agregarApellido', 'Apellido'); ?>
				<?php HtmlElements::input('agregarEdad', 'text', 'agregarEdad', 'Edad'); ?>
				
				<?php HtmlElements::select($db, 'tipo_empleado', 'agregarArea', 'agregarAreaSelect')?>
				<?php HtmlElements::select($db, 'tipo_disenador', 'agregarTipoDisenador', 'agregarTipoDisenadorSelect')?>
				<?php HtmlElements::select($db, 'tipo_programador', 'agregarLenguaje', 'agregarLenguajeSelect')?>
				<?php HtmlElements::input('enviar', 'submit', null, null, 'Enviar');?>
			</fieldset>
		<?php HtmlElements::closeForm(); ?>

	</body>

</html>