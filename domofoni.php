<?php
	session_start();

	require_once "connect.php";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/category.css">

	<!-- BOOTSTRAP -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<style type="text/css">
	#header{
			background-color: #4169E1;	
		}
</style>
	<title>Wolf-vision</title>
</head>
<body>
	<div id = "header" >
		<div class ="header-logo">
			<img src ="img/ikons/wolf-icon.png" class ="logo-ikon">
			<div class ="logo-sign">
				<div class="sign-name">Wolf-Vision</div>
				<div class="sign-post-name">Каталог БЕЗОПАСНТИ</div>
			</div>		
		</div> 
	
		<div class = "header-info">
			<div class="info-p">
				Заказать товар:
			</div>
			<div class="info-tel">
				(066) 673 12 86
			</div>
		</div>
  </div>



<!-- MENU -->
<div class ="menu">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
    <li class="breadcrumb-item"><a href="category.php">Категории</a></li>
    <li class="breadcrumb-item active" aria-current="page">Домофоны</li>
  </ol>
</nav>
</div>
<!-- ДОМОФОНЫ -->

<h1 id="rom">Домофоны</h1>
<div class ="fon">

<div id = 'good'>

<?php
	// echo "<h1  class = 'zag'> </h1>";
	$sql = 'SELECT * FROM `goods` WHERE `catid` =1';
	$result = $mysqli->query($sql);

	while($row = $result->fetch_object()) {
		$var = $row->img_name;
    	$folder = "img/save";
		
		
		echo "<div class='card' style='width: 18rem;'>
		  <img src=".$folder."/".$var." class='card-img-top' alt=''>
		  <div class='card-body'>
		  <p class='text-decoration-underline'>$row->namemodel</p>
			<p class='fw-bolder'>$row->price грн.</p>
		    
			<div class='btn-group'>
  <button class='btn btn-secondary btn-sm dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
    Описание
  </button>
  <ul class='dropdown-menu'>
  		<li><div class='lh-base' id ='desc'>$row->description</div></li>  
  </ul>
</div>
 
		  </div>
		</div>";
	
	}



?>

</div>

</div>  
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>