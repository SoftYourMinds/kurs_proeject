<?php
	//ОБРАБОТКА ЗАПРОСА ДОБАВЛЕНИЕ ТОВАРА 
			session_start();
			require_once "connect.php";
			require_once "validate_connect.php";


			// ОБРАБОТКА ДОБАВЛЕНИЯ ТОВАРА
			$done_tovar = $_POST['done_tovar']; 
			$name = $_POST['name'];
			
			$img_name=time().$_FILES["filename"]["name"];
			

	    	$catid = $_POST['category'];
	    	
	    	$price = $_POST['price'];

	    	$about = $_POST['about'];	
			
			if(isset($done_tovar)){

				if(move_uploaded_file($_FILES['filename']['tmp_name'], 'img/save/'.$img_name)){
							

					$_SESSION['yes_file']="yes";
					
						

	$sql = "INSERT INTO `goods` (`namemodel`, `catid`, `price`, `description`, `img_name`) VALUES ('$name', '$catid', '$price', '$about', '$img_name')";
				$result = $mysqli->query($sql);

			}
					
				if(($result === True)&&($_SESSION['yes_file'])=="yes"){
			 		$_SESSION['query_ok'] = "<div class='alert alert-info' role='alert'>Ваш запрос успешно обработан!</div>";
					header('Location: ./adminka.php');
			 			
			 	}
				else{
			 		$_SESSION['query_off'] ="<div  class='alert alert-danger' role='alert'>Ошибка, не удалось отпраивть данные</div>";
					header('Location: ./adminka.php');
			 			
				}
			}

// ОБРАБОТКА ДОБВАЛЕНИЯ АДМИНИСТРАТОРА

			$done_admin = $_POST['done_admin'];
			$pass_admin = $_POST['pass_admin'];
			$login_admin = $_POST['login_admin'];

			if(isset($done_admin)){

				$sql = "INSERT INTO `admin` (`login`, `pass`) VALUES ('$login_admin', '$pass_admin')";
				$result = $mysqli->query($sql);

				if($result===True){
					$_SESSION['query_ok'] = "<div class='alert alert-info' role='alert'>Ваш запрос успешно обработан!</div>";
					header('Location: ./adminka.php');
			 			
			 	}
				else{
			 		$_SESSION['query_off'] ="<div  class='alert alert-danger' role='alert'>Ошибка, не удалось отпраивть данные</div>";
					header('Location: ./adminka.php');
			 	}
			}
			
// ОБРОБКА ИЗМЕНЕНИЕ АДМИНА
			$done_new_admin = $_POST['done_new_admin'];
			$pass_new_admin = $_POST['pass_new_admin'];
			$login_new_admin = $_POST['login_new_admin'];
			$up = $_SESSION['update_admin_id'];

			if(isset($done_new_admin)){
				$sql = "UPDATE `admin` SET `login`='$login_new_admin',`pass`='$pass_new_admin' WHERE `adminid` = '$up'";
				$result = $mysqli->query($sql);
			
			if($result === True){
			 		$_SESSION['query_ok'] = "<div class='alert alert-info' role='alert'>Ваш запрос успешно обработан!</div>";
			 	
			 		header('Location: ./admin_amoung.php');
			 			
			 	}
				else{
			 		$_SESSION['query_off'] ="<div  class='alert alert-danger' role='alert'>Ошибка, не удалось отпраивть данные</div>";
					header('Location: ./admin_amoung.php');
			 			
				}
			}




