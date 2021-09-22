<?php 
	session_start();
	require_once "connect.php";
	require_once "validate_connect.php";

	$id =  $_GET['id'];
	$_SESSION['update_admin_id'] = $id;
	$sql = "SELECT * FROM `admin` WHERE `adminid` = '$id' ";

	$result = $mysqli->query($sql);
	while($row = $result->fetch_object()) {
			$login =  $row->login;
			$pass = $row->pass;
			
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
	<title>AddNewAdmin</title>
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
    <li class="breadcrumb-item active" aria-current="page">Редактировтаь админа</li>
  </ol>
</nav>
	
	<!-- ДОБАВИТЬ НОВОГО АДМИНА -->
 <div id = "form_add_admin" class = "border" >
    	<h2>Редактирование администратора:</h2>
    	<form action = "obrobka.php" method="post">
    	<!-- ИМЯ -->
    		<div class="mb-3">
	    		<label for="exampleInputEmail1" class="form-label">Логин</label>
			  	<input type="text" name="login_new_admin" class="form-control form-control-lg" placeholder="" aria-label=".form-control-lg example" value="<?php echo $login ?>" required>
		  	</div>
		  
		  	<!-- ОПИСАНИЕ -->
			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">Пароль</label>
			  <input type="text" name="pass_new_admin" class="form-control form-control-lg" placeholder="" aria-label=".form-control-lg example" value ="<?php echo $pass ?>" required>
			</div>		  	
    		
			<div class ="container">
    			<a href="adminka.php" class="text-decoration-none">Отменить</a>
    			<input type="submit" name="done_new_admin" value="Сохранить" class="btn btn-primary">
			</div>
		</form>
	
	</div>


</body>
</html>