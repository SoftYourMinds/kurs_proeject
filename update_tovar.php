<?php 
	session_start();
	require_once "connect.php";
	require_once "validate_connect.php";

	$id =  $_GET['id'];
	$_SESSION['update_id'] = $id;
	$sql = "SELECT * FROM `goods` WHERE `goodsid` = '$id' ";

	$result = $mysqli->query($sql);
	while($row = $result->fetch_object()) {
			$name =  $row->namemodel;
			$catid = $row->catid;
    		$_SESSION['category_id'] = $row->catid;
    		$price = $row->price;
    		$desc = $row->description;

    		$img_folder = "img/save/".$var;
    		$var = $row->img_name;
    		$folder = "img/save";
    		$_SESSION['img_up_name'] = $var;  

    }
    $sql = "SELECT * FROM `category` WHERE `catid` = '$catid' ";
	$result = $mysqli->query($sql);
	while($row = $result->fetch_object()) {
			$catname =  $row->catname;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles/adminka.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<style type="text/css">
		label{
			font-size: 20px;
		}
	</style>
	<title>AddNewGoods</title>
</head>
<body>
	<div class = "header">
		<div class ="header-logo">
			<img src ="img/ikons/wolf-icon.png" class ="logo-ikon">
			<div class ="logo-sign">
				<div class="sign-name">Wolf-Vision</div>
				<div class="sign-post-name">Каталог БЕЗОПАСНТИ</div>
			</div>		
		</div>
		<div class="admin">
			<div class="ad">Админ панель</div>
			<a href="signup.php" class="text-decoration-none"><button onclick="exit()" type="button" class="btn btn-link">Выход</button></a>
		</div>
	</div>

<nav aria-label="breadcrumb" id="zag">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="adminka.php">Все товары</a></li>
    <li class="breadcrumb-item active" aria-current="page">Редактировтаь товар</li>
  </ol>
</nav>
	<!-- ИЗМЕНЕНИЕ ТОВАРА -->
	<div id = "form_add_tovar" class="border">
    	<h2>Редактировать товар:</h2>
    	<form action = "reset.php" method="post" enctype="multipart/form-data">
    		
    		<!-- ИМЯ -->
    		<div class="mb-3">
	    		<label for="exampleInputEmail1" class="form-label">Имя товара</label>
			  	<input type="text" name="name" class="form-control form-control-lg" placeholder="" aria-label=".form-control-lg example" value ="<?php echo $name ?>" required>
		  	</div>
		  	
		  	<!-- КАРТИНКА -->
		  	<div class="group mb-3">
			  <label for="exampleInputEmail1" class="form-label">Изображение</label><br><br>
			  
			  <?php 
			  	
				echo "<img src=".$folder."/".$var." width=100 height=100><br><br>";
			  	
			  ?>
			  <input  name = "filename" type="file" class="form-control" id="inputGroupFile01">
			</div>		  	

		  	<!-- КАТЕГОРИЯ -->
    		<div class="mb-3">
	    		<label for="exampleInputEmail1" class="form-label">Категория товара</label>
	    		<?php
	    			echo  "<p class='text-muted'>$catname</p>";
	    		?>
				<select  name = "category" class="form-select" aria-label="Default select example" required>
				  <option value = "0" selected>Выберите категорию*</option>
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
	    		<label for="exampleInputEmail1" class="form-label">ЦЕНА</label>
			  	<input name = "price" type="number" class="form-control form-control-lg"  placeholder="" aria-label=".form-control-lg example" value ="<?php echo $price ?>" required>
		  	</div>

		  	<!-- ОПИСАНИЕ -->
			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">Описание товара</label>
			  <textarea name ="about"class="form-control" id="exampleFormControlTextarea1" rows="4" required><?php echo $desc ?></textarea>
			</div>		  	
    		
			<div class ="container">
    			<a href="adminka.php" class="text-decoration-none">Назад</a>
    			<input type="submit" name="update_sub" value="Вперёд" class="btn btn-primary">
			</div>
		</form>
</div>
</body>
</html>