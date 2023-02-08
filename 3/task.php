<?php
$a = 1;

$res = ($a == 1 && $a == 2 && $a == 3) ? TRUE : FALSE;
?>
<!DOCTYPE html>
<html lang="ru-RU">
	<head>
		<meta charset="UTF-8" />
		<title>Задание 3</title>
		<link rel="stylesheet" href="/app.css" type="text/css">
		<style>
			p{ color: white; }
		</style>
	</head>
	<body>
		<header>Задание 3</header>
		<main>
		  <p>
			  Оператор И учитывает правильные соответствия только неодинаковых переменных. Для исправления ситуации нужно применить оператор ИЛИ в самом выражении.
		  </p>
		  <p>
			  Вывод результата: <strong><?php echo $res; ?></strong>
		  </p>
		</main>
	</body>
</html>
