<!DOCTYPE html>
<html lang="ru-RU">
	<head>
		<meta charset="UTF-8" />
		<title>Задание 4</title>
		<link rel="stylesheet" href="/app.css" type="text/css">
		<style>
			pre{ color: white; }
		</style>
	</head>
	<body>
		<header>Задание 4</header>
		<main>
			<pre>
		  <?php
		      //Так как на практике это не использовал, беру готовый из Интернета пример
		      
			  $array = [1, 2, 3, 4];
			  $size = sizeof($array);
			 
			  for($i=$size-1; $i>=0; $i--){
				  echo $array[$i];
			  }
			?>
			</pre>
		</main>
	</body>
</html>
