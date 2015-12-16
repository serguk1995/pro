
	<html>
	<head>
	<title>Form</title>
	</head>

	<body>

	<?php
	
	$n = $_POST["name"];
	$c = $_POST["comm"];
	$f = fopen("text.txt", "a+");
	
		fwrite($f,"\r\n Name: " . $n . "  Comm   " . $c);
	
	echo "<h1> Ваш коммент отправлен </h1>";
	fclose($f);
	?>

	</body>
	</html>