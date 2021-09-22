<!DOCTYPE html>
<html lang="ru">
<?php
	require_once "connect.php";	
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<title>Wolf-vision</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<style>
		#good {
			justify-content: center;
		}
		body{
			background-color: #DCDCDC;
		}
	</style>
</head>
<body>


<!-- HEADER -->
<div class = "head">
	
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

	<div class ="offer">	
		<h1 class="lh-1"> Системы охраны и видео наблюдения</h1>
		<p id = "offer-p" class="lh-sm">Правильно предложенное решение, позитивные ощущения, эмоции. Правильный выбор, надежность и простота эксплуатации любого оборудования из ассортимента </p>
		<a href="category.php"><div class="rounded-pill" id = "content-button">
			Посмотреть каталог 
		</div></a> 
	</div>

</div>
	
<!-- КАТАЛОГ -->
	<h1 class ="zag">Популярные товары:</h1>
	
	<div id = 'good'>
	<?php
	// echo "<h1  class = 'zag'> </h1>";
	$sql = 'SELECT * FROM `goods` WHERE `catid` =1 OR `catid`=2 OR `catid` = 3';
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


	

	<!-- 	<a  href ="pojarnia-sihnalizacia.php">
			<div class ="category">
				<img src = "img/category/pojarnaya-signalizacia.jpg">
				<span class ="category-sign">Пожарная сигнализация</span>
			</div>
		</a>

		<a  href ="comp-oborudovanie.php">
			<div class ="category">
				<img src = "img/category/comp-oborudovanie.jpg">
				<span class ="category-sign">Компьютерное оборудование</span>
			</div>
		</a> -->

		<!-- <a  href ="bloki-pitania.php">
			<div class ="category">
				<img src = "img/category/bloki-pitania.jpg">
				<span class ="category-sign">Блоки питания</span>
			</div>
		</a> -->
	

<div class = "content-inf">


	
	<h1 >Охранная техника для вашего дома - Интернет каталог «Wolf-vision»</h1>
		<p>Мы занимаемся продажей и установкой систем безопасности и комфорта.</p>

		<p>С 1998 года завоевываем внимание и «кошелек» покупателя выгодой и преимуществами, которые он получает при приобретении нашего оборудования. В нашем интернет-каталоге «Wolf-vision» вы можете всего за 5 минут ознакомиться с модельным рядом, оценить преимущества и сделать заказ.</p>

		<p>Помощь при выборе, рекомендация монтажной компании, технические консультации? Это стандарты в нашей работе.</p>

		<p>Приобретение, обслуживание, и прочее – мы всегда ориентированы на задачу клиентов: охранные системы купить в Украине рекомендуем на www.wolf-vision.com.ua.</p>


	<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
       <span id = "accordion">Кто наши клиенты?</span>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><p>Все, кому нужно оборудование для безопасной и комфортной жизни. Вы наш главный и любимый клиент независимо от суммы и состава покупки. Всегда.</p>

		<p>Корпоративный, оптовый, розничный покупатель? Конечно же скидки, особые условия поставки, удобные способы расчета, консультационные линии и т.п. в компании предусмотрены!</p>
</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <span id = "accordion">Что вы получаете?</span>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><p>Правильно предложенное решение, позитивные ощущения, эмоции. Правильный выбор, надежность и простоту эксплуатации любого оборудования из ассортимента:</p>

		<p>- домофонные системы;
		- системы видеонаблюдения;
		- охранно-пожарные сигнализации;
		- переговорные устройства;
		- дополнительное оборудование.
		Охранные системы безопасности для дома, бизнеса – любых конфигураций под ваши задачи!</p></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <span id = "accordion">Как правильно выбрать и выгодно купить?</span>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><p>Правильно выбрать домофон, видеокамеру, не ошибиться с электромагнитным замком, не растеряться в устройствах брендов Commax, ARNY, Crow, Hikvision, Kocom, Tiras, понять разницу между аудио- и видеодомофоном и т.п. рекомендуем двумя способами:</p>

		звоните консультанту! <p>Вместо затраченных нескольких дней на изучение мат. части потратьте 5 минут и сделайте заказ!
		прочитайте основную техническую информацию в карточках товаров, а ещё лучше – в разделе Статьи сайта. Затем либо сразу делайте выбор аудиодомофона в подъезд (на его месте может быть: IP видеокамера, видеорегистратор, электромеханическая защелка, аудиодомофон и т.д.), потом – звоните консультанту за рекомендациями!
		Так вы сможете купить видеонаблюдение в Украине выгодно!</p></div>
    </div>
  </div>
</div>
	
</div>

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
</html>