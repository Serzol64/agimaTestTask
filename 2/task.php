<?php

include_once('sender.php');
include_once('validator.php');

$mail = $name = $comment = '';
$rating = 0;

if(isset($_POST['feedback'])){
	$name = fix_string($_POST['name']);
	$mail = fix_string($_POST['email']);
	$rating = fix_string($_POST['rating']);
	$comment = fix_string($_POST['comment']);
	
	
	$fail = validate_mail($mail);
	$fail .= validate_name($name);
	$fail .= validate_rating($rating);
	$fail .= validate_comment($comment);
	
	if($fail == ''){
		$query = [
			'name' => $name,
			'email' => $mail,
			'rating' => $rating,
			'comment' => $comment
		];
		
		sendProccess($query);

    echo '<script>alert("Комментарий успешно отправлен!");</script>';
	}
  else{ echo '<script>alert("' . $fail . '");</script>'; }
}

?>
<!DOCTYPE html>
<html lang="ru-RU">
	<head>
		<meta charset="UTF-8" />
		<title>Задание 2</title>
		<style>
      @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap');

      body{
        margin: 0;
        background: #01ac6a;
        font-family: 'PT Sans', sans-serif;
      }
      header{
        padding: 2%;
        font-size: 180%;
        font-weight: bold;
        color: white;
      }
      main{
        padding: 1%;
      }
			form{
			  margin: 2%;
			  font-size: 140%;
			}

			form > div{
			  margin-top: 5%;
			  display: flex;
			  align-items: center;
			}

			form > div *{
			  flex: 1 1 auto;
			  width: 50%;
			}
			form > div h3{
			  color: white;
			  margin-left: 2%;
			}

			form > div input{
			  padding: 2%;
			  font-size: 120%;
			  text-indent: 4%;
			  font-family: 'PT Sans', sans-serif;
			}
			form > div textarea{
			  padding: 2%;
			  font-size: 100%;
			  resize: none;
			  height: 200px;
			  font-family: 'PT Sans', sans-serif;
			}
			form > button{
			  float: right;
			  margin-top: 3%;
			  padding: 1%;
			  width: 15%;
			  font-family: 'PT Sans', sans-serif;
			}
			
			.rating-area {
				overflow: hidden;
				width: 265px;
				margin: 0 auto;
			}
			.rating-area:not(:checked) > input {
				display: none;
			}
			.rating-area:not(:checked) > label {
				float: right;
				width: 42px;
				padding: 0;
				cursor: pointer;
				font-size: 32px;
				line-height: 32px;
				color: lightgrey;
				text-shadow: 1px 1px #bbb;
			}
			.rating-area:not(:checked) > label:before {
				content: '★';
			}
			.rating-area > input:checked ~ label {
				color: gold;
				text-shadow: 1px 1px #c60;
			}
			.rating-area:not(:checked) > label:hover,
			.rating-area:not(:checked) > label:hover ~ label {
				color: gold;
			}
			.rating-area > input:checked + label:hover,
			.rating-area > input:checked + label:hover ~ label,
			.rating-area > input:checked ~ label:hover,
			.rating-area > input:checked ~ label:hover ~ label,
			.rating-area > label:hover ~ input:checked ~ label {
				color: gold;
				text-shadow: 1px 1px goldenrod;
			}
			.rate-area > label:active {
				position: relative;
			}
		</style>
	</head>
	<body>
		<header>Задание 2</header>
		<main>
		  <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST" name="feedback">
			<div for="email">
			  <h3>EMail</h3>
			  <input type="email" name="email" placeholder="ivanov@mail.ru" required title="Неправильный формат адреса электронной почты"/>
			</div>
			<div for="name">
					<h3>Имя</h3>
			  <input type="text" name="name" placeholder="Иван Иванов" maxlength="20" required />
			</div>
			<div for="rating">
					<h3>Оценка страницы от 0 до 10</h3>
					<div class="rating-area">
						<?php
							for($i = 0; $i < 10; $i++){
								echo '<input type="radio" id="star-' . $i . '" name="rating" value="' . $i . '">';
								echo '<label for="star-' . $i . '" title="Оценка «' . $i . '»"></label>';
							}
						?>
				   </div>
			</div>
			<div for="comment">
					<h3>Комментарий</h3>
			  <textarea name="comment" placeholder="" maxlength="500" title="Максимальное количество символов для комментария - 500"></textarea>
			</div>
			<button type="submit">Отправить</button>
		  </form>
		</main>
		
	</body>
</html>
