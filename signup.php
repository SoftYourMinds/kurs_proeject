<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign up</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/sign_to_admin_panel.css">
	<style type="text/css">
		body {
			background-color: white;
		}
	</style>
</head>

<body>

	<div id="header-logo" class="position-absolute top-0 start-50 translate-middle-x">
		<img src="img/ikons/wolf-icon.png" class="logo-ikon">
		<div class="logo-sign">
			<div class="sign-name">Wolf-Vision</div>
			<div class="sign-post-name">Каталог БЕЗОПАСНТИ</div>
		</div>
	</div>
	<form id="sign-form" method="post" action="adminka.php" class="position-absolute top-50 start-50 translate-middle">


		<div class="border">
			<h1>Вход в админ панель</h1>
			<input type="text" name="login" class="form-control form-control-lg" type="text" placeholder="Логин" aria-label=".form-control-lg example">
			<p>
				<input type="password" name="pass" class="form-control form-control-lg" type="text" placeholder="Пароль" aria-label=".form-control-lg example">
			<p>
			<div id="submit-cont">
				<a href="index.php" class="text-decoration-none">Wolf-Vision</a>
				<input type="submit" name="done" value="Вперёд" class="btn btn-primary mb-3">
			</div>
		</div>
		<?php
		if ($_SESSION['sign_error']) {
			echo $_SESSION['sign_error'];
		}
		unset($_SESSION['sign_error']);
		$_SESSION['signup'] = "ok";
		if ($_SESSION['exit']) {
			$_SESSION['admin'] = "off";
		}
		unset($_SESSION['exit']);
		?>
	</form>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>