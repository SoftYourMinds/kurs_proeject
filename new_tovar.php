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
	<div class = "header">
		<div class ="header-logo">
			<img src ="img/ikons/wolf-icon.png" class ="logo-ikon">
			<div class ="logo-sign">
				<div class="sign-name">Wolf-Vision</div>
				<div class="sign-post-name">Каталог БЕЗОПАСНТИ</div>
			</div>		
		</div>

		<!-- МЕНЮ  -->
	<div class = "menu" id = "menu">


	<!--кнопка Товар -->
	<div class="dropdown">
	  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
	    Добавить
	  </button>
	  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
	    <li><a  class="dropdown-item" href="new_tovar.php">Новий товар</a></li>

	    <li><a class="dropdown-item" href="new_admin.php">Нового админа</a></li>


	     </ul>
	</div>

	<!-- кнопка КАТЕГОРИИ ТОВАРОВ -->
	<div class="dropdown">
	  <button class="btn btn-secondary btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
	    Категории
	  </button>
	  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
	    <li><a  class="dropdown-item" href="3.php">Блоки-питания</a></li>

	    <li><a  class="dropdown-item" href="1.php">Домофоны</a></li>

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
		<a href="signup.php" class="text-decoration-none"><button id = "exitbtn" onclick="exit()" type="button" class="btn btn-link">Выход</button></a>
		</div>
	</div>


<nav aria-label="breadcrumb" id ="zag">
   
<ol class="breadcrumb">
   <li class="breadcrumb-item"><a href="adminka.php">Все товары</a></li>
    <li class="breadcrumb-item active" aria-current="page">Добавить новый товар</li>
  </ol>
  	
 </nav>

	<div id = "form_add_tovar" class="border">
    	<h1>Добавление товара:</h1>
    	<form action = "obrobka.php" method="post" enctype="multipart/form-data">
    		
    		<!-- ИМЯ -->
    		<div class="mb-3">
	    		<label for="exampleInputEmail1" class="form-label">Имя товара</label>
			  	<input type="text" name="name" class="form-control form-control-lg" placeholder="" aria-label=".form-control-lg example" required>
		  	</div>
		  	
		  	<!-- КАРТИНКА -->
			<div class="group mb-3">
			  <label for="exampleInputEmail1" class="form-label">Выберите фото товара</label><br>
			  <input  name = "filename" type="file" class="form-control" id="inputGroupFile01" required>
			</div>		  	

		  	<!-- КАТЕГОРИЯ -->
    		<div class="mb-3">
	    		<label for="exampleInputEmail1" class="form-label">Категория товара</label>
				<select  name = "category" class="form-select" aria-label="Default select example">
				  <option value="1">Домофоны</option>
				  <option value="2">Видеонаблюдение</option>
				  <option value="3">Блоки-питания</option>
				  <option value="4">Компьютерное оборудование</option>
				  <option value="5">Контроль доступа</option>
				  <option value="6">Пожарная сигнализация</option>
				  <option value="7">Охранная сигнализация</option>
				</select>
			</div>
			<!-- ЦЕНА -->
			<div class="mb-3">
	    		<label for="exampleInputEmail1" class="form-label">Цена(грн)</label>
			  	<input name = "price" type="number" class="form-control form-control-lg"  placeholder="" aria-label=".form-control-lg example" required>
		  	</div>

		  	<!-- ОПИСАНИЕ -->
			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">Описание товара</label>
			  <textarea name ="about"class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
			</div>		  	
    		
			<div class ="container">
    			<a href="adminka.php" class="text-decoration-none">Назад</a>
    			<input type="submit" name="done_tovar" value="Вперёд" class="btn btn-primary">
			</div>
		</form>
</div>

 <!-- СКРИПТЫ  -->
  	<!-- Бутстрап -->
  	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>