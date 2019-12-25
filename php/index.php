<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>	

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/I.jpg">
		<div class="box_text">
			<p><b>Добрый день друзья!</b>. Меня зовут <i>Билли Гейтс</i>. Не знаю почему, но мне очень нравятся окна. Через которые можно смотреть на улицу. А еще я ненавижу яблоки. Я совсем недавно начал программировать, однако уже написал свой первый сайт.</p>

			<p>В этом мне очень сильно помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a> Здесь очень круто!</p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал: <br>
			<a href="index.html">Главная,</a>
			<a href="puzzle.html">Загадки,</a>
			<a href="guess.html">Угадайка,</a>
			<a href="guessing_game_mod.html">Угадайка для двух игроков,</a>
			<a href="gen_password.html">Генератор паролей</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Aleksandr Kostitsyn
<div>


</body>
</html>