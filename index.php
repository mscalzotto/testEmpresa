<?php
	include 'cfg/connection.php';
	include 'cfg/core.php';
?>
<!DOCTYPE html>
	<head>
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

				$header = new HtmlHeader($navElements);
		     ?>
		</header>

		<form action="empleados.php" method="post">
			<fieldset>
			</fieldset>
		</form>
	</body>

</html>


<?php

	



	//Inyección de dependencias
	/*$pdo = new PDO('mysql:dbname='. DB_DBNAME .';host='. DB_HOST, DB_USER, DB_PASS);
	$db = new Database($pdo);

	$empresa = new Empresa($db);

	$empresa->agregarEmpleado("Maximiliano", "Scalzotto", "34", "Programador", null, "PHP");


*/