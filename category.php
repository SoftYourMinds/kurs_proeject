<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<title>Wolf-vision</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/category.css">
	<title>Wolf-vision</title>

	<style type="text/css">
		#header{
			background-color: #4169E1;	
		}
		.category{
			display: grid;
			grid-template-columns: repeat(3, 0fr);
			grid-auto-rows:300px;
		}

		.img_cat{
			border-radius: 50%;
			border: 2px;
			border-color: black;
			height: 300px;
			width: 300px;
		}	
		.category-card{
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 5px;
			margin: 20px;
			width: 250px;
			height: 250px;
		}	
		.category-card:hover{
			opacity: 0.7;
			border-bottom: 2px solid black;
		}
		.cont{
			
			display: flex;
			justify-content: center;
		}

		body{
			background-color: white;
		}
	</style>
</head>
<body>
	<div id = "header">
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



<!-- NAVIGATION -->
<div class ="menu">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Категории товаров</li>
	  </ol>
	</nav>
</div>

<h1 id="rom">Каталог продукции</h1>
<div class = "cont">		
<!-- CATEGORY -->
	<div class ="category">
		
			<a class="text-decoration-none" href ="video-nabl.php">
				<div class ="category-card">
					<img class = "img_cat" src = "img/category/video-camery.jpg">
					<span class ="category-sign">Видео наблюдение</span>
				</div>
			</a>		
	

			<a  class="text-decoration-none" href ="domofoni.php">
				<div class ="category-card">
					<img class = "img_cat" src = "img/category/domofoni.jpg">
					<span class ="category-sign">Домофоны</span>
				</div>
			</a>
		
		
	
			
				<a  class="text-decoration-none" href="control-dostupa.php"><div class ="category-card">
					
						<img  class = "img_cat" src = "img/category/control-dostupa.jpg">
						<span class ="category-sign">Контроль доступа</span>
					
				</div></a>
			

			
				<a class="text-decoration-none" href="signalizacia.php"> <div class ="category-card">
					
						<img class = "img_cat" src ="img/category/signalizacia.jpg">
						<span class ="category-sign">Охранная-сигнализация</span>
					
				</div></a>
			


	
			<a class="text-decoration-none" href ="pojarnaya-signalizacia.php">
				<div class ="category-card">
					<img  class = "img_cat"  src = "img/category/pojarnaya-sihnalizacia.jpg">
					<span class ="category-sign">Пожарная сигнализация</span>
				</div>
			</a>

			<a class="text-decoration-none" href ="comp-oborudovanie.php">
				<div class ="category-card">
					<img class = "img_cat" src = "img/category/comp-oborudovanie.jpg">
					<span class ="category-sign">Компьютерное оборудование</span>
				</div>
			</a>
		

	
			<a  class="text-decoration-none" href ="bloki-pitania.php">
				<div class ="category-card">
					<img  class = "img_cat" src = "img/category/bloki-pitaniya.jpg">
					<span class ="category-sign">Блоки питания</span>
				</div>
			</a>
		</div>
</div>


<!--FOOOTER  -->
	
	<div class="fotter">
		<div class=fotter-prava>
			Все права защищены. @ 2020 
			 <a class ="f-a" href="index.php">Wolf-Vision</a>
		</div>
		<div class="fotter-email">
			Почта:
			<br>wolf_vision@gmail.com
		</div>
		<div class="fotter-tel">
			Телефон:
			<br>+380666731286
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</HTML>