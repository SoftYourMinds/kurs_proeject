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
    <li class="breadcrumb-item active" aria-current="page">Блоки-питания</li>
  </ol>
 </nav>

<!-- ВСЕ ТОВАРЫ -->
<div   id = "mmm" class="border">
	<table class="table" id = "all_goods">
<h2 id ="zag">Блоки-питания</h2>
    <thead>
    <tr>
	    <th scope="col">#</th>
	    <th scope="col">Name</th>
	    <th scope="col">Category ID</th>
	    <th scope="col">Price(grn)</th>
	    <th scope="col">Discription</th>
	    <th scope="col">Image</th>
	    <th scope="col">&nbsp</th>
    </tr>
    </thead>
<?php 
	$sql = 'SELECT * FROM `goods` WHERE `catid` = 3';
	$result = $mysqli->query($sql);
		while($row = $result->fetch_object()) {
			
			echo "<tbody>";
			echo "<tr>";
			echo "<th scope='row'>";
			
    		print $row->goodsid. " ";
    		echo "</th>";
    		echo "<td>";
    		print $row->namemodel. " ";
    		echo "</td>";
    		
    		echo "<td>";
    		print $row->catid. " ";
    		echo "</td>";

    		echo "<td>";
    		print $row->price. " ";
    		echo "</td>";		
    		
    		echo "<td>";
    		print $row->description."";
    		echo "</td>";

    		echo "<td>";
    			$var = $row->img_name;
    			$folder = "img/save";
		    	echo "<img src=".$folder."/".$var." width=50 height=50>";
    		echo "</td>";

			echo "<td>";
			echo "
				<div id = 'do' class='dropdown1'>
				  <button class='btn btn-primary btn-sm dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
				    Действие
				  </button>
				  <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
				    <li><a class='dropdown-item' href='update_tovar.php ?id=$row->goodsid 
				   '>Изменить</a></li>

				    <li><a class='dropdown-item' href='delete_var.php?id= $row->goodsid '>Удалить</a></li>
				    </ul>
				</div>";
			echo "</td>";

    		echo "</tr>";
    		echo "</tbody>";
		}
		echo "</table>";
	?>
    </div>

		
    <!-- СКРИПТЫ  -->
  	<!-- Бутстрап -->
  	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>



