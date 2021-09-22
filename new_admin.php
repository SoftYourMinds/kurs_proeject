<?php
session_start();
require_once "connect.php";
require_once "validate_connect.php";
?>

<!DOCTYPE html>
<html>

<head>

	<title>Admin-panel</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="styles/adminka.css">
</head>

<body>

	<!-- HEADER -->
	<div class="header">
		<div class="header-logo">
			<img src="img/ikons/wolf-icon.png" class="logo-ikon">
			<div class="logo-sign">
				<div class="sign-name">Wolf-Vision</div>
				<div class="sign-post-name">Каталог БЕЗОПАСНТИ</div>
			</div>
		</div>

		<!-- МЕНЮ  -->
		<div class="menu" id="menu">


			<!--кнопка Товар -->
			<div class="dropdown">
				<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
					Добавить
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					<li><a class="dropdown-item" href="new_tovar.php">Новий товар</a></li>

					<li><a class="dropdown-item" href="new_admin.php">Нового админа</a></li>


				</ul>
			</div>

			<!-- кнопка КАТЕГОРИИ ТОВАРОВ -->
			<div class="dropdown">
				<button class="btn btn-secondary btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
					Категории
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					<li><a class="dropdown-item" href="3.php">Блоки-питания</a></li>

					<li><a class="dropdown-item" href="1.php">Домофоны</a></li>

					<li><a class="dropdown-item" href="5.php">Контроль-доступа</a></li>

					<li><a class="dropdown-item" href="7.php">Охранная сигнализация</a></li>

					<li><a class="dropdown-item" href="6.php">Пожарная сигнализация</a></li>

					<li><a class="dropdown-item" href="2.php">Видеонаблюдение</a></li>

					<li><a class="dropdown-item" href="4.php">Компьютерное оборудование</a></li>

					<li><a class="dropdown-item" href="adminka.php">Все товары</a></li>

					<li><a class="dropdown-item" href="admin_amoung.php">Администраторы</a></li>
				</ul>
			</div>
		</div>
		<div class="admin">
			<div class="ad">Админ панель</div>
			<a href="signup.php" class="text-decoration-none"><button id="exitbtn" onclick="exit()" type="button" class="btn btn-link">Выход</button></a>
		</div>
	</div>


	<nav aria-label="breadcrumb" id="zag">

		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="adminka.php">Все товары</a></li>
			<li class="breadcrumb-item active" aria-current="page">Добавить нового администратора</li>
		</ol>
	</nav>

	<!-- ДОБАВИТЬ НОВОГО АДМИНА -->
	<div id="form_add_admin" class="border">
		<h2>Добавление администратора:</h2>
		<form action="obrobka.php" method="post">

			<!-- ИМЯ -->
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Логин</label>
				<input type="text" name="login_admin" class="form-control form-control-lg" placeholder="" aria-label=".form-control-lg example" required>
			</div>

			<!-- ОПИСАНИЕ -->
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Пароль</label>
				<input type="password" name="pass_admin" class="form-control form-control-lg" placeholder="" aria-label=".form-control-lg example" required>
			</div>

			<div class="container">
				<a href="adminka.php" class="btn btn-primary">Назад</a>
				<input type="submit" name="done_admin" value="Вперёд" class="btn btn-primary">
			</div>


		</form>

	</div>
	</div>

	<!-- СКРИПТЫ  -->
	<!-- Бутстрап -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>