<?php
	include 'cfg/connection.php';
	include 'cfg/core.php';
?>
<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
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

				$header = HtmlHeader::renderNav($navElements);
		     ?>
		</header>

		<form id="agregaEmpleado" action="empleados.php" method="post">
			<fieldset>
				<input class="agregarNombre" type="text" name="agregarNombre" placeholder="Nombre" />
				<input class="agregarApellido" type="text" name="agregarApellido" placeholder="Apellido" />
				<input class="agregarEdad" type="text" name="agregarEdad" placeholder="Edad" />
				<select class="agregarArea" name="agregarAreaSelect">
                  <option value="default">-- Seleccione área de desempeño --</option>
                  <option value="programador">Programador</option>
                  <option value="disenador">Diseñador</option>
                </select>
                <select class="agregarTipoDisenador" name="agregarTipoDisenadorSelect">
                  <option value="default">-- Seleccione tipo de diseñador --</option>
                  <option value="grafico">Gráfico</option>
                  <option value="web">Web</option>
                </select>
                <select class="agregarLenguaje" name="agregarLenguajeSelect">
                  <option value="default">-- Seleccione lenguaje --</option>
                  <option value="php">PHP</option>
                  <option value="net">.NET</option>
                  <option value="phyton">Phyton</option>
                </select>
                <input type="hidden" name="agregarAreaHidden" value="">
                <input type="hidden" name="agregarTipoDisenadorHidden" value="">
                <input type="hidden" name="agregarLenguajeHidden" value="">
                <input type="submit" value="Enviar" />
			</fieldset>
		</form>
	</body>

</html>