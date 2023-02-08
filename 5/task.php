<?php
//Так как на практике это не использовал, беру готовый из Интернета пример

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

?>
<!DOCTYPE html>
<html lang="ru-RU">
	<head>
		<meta charset="UTF-8" />
		<title>Задание 5</title>
		<link rel="stylesheet" href="/app.css" type="text/css">
		<style>
			pre{ color: white; }
		</style>
	</head>
	<body>
		<header>Задание 5</header>
		<main>
		  <pre>
			  <?php B::test(); //Сам вызов метода ?>
		  </pre>
		</main>
	</body>
</html>
