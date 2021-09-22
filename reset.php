<?php
				
// ОБРОБКА ИЗМЕНЕНИЕ ТОВАРА
			
session_start();
			require_once "connect.php";
			


	$update = $_POST['update_sub'];

			$name = $_POST['name'];
			
			$img_name=$_FILES["filename"]["name"];
			

			$catid = $_POST['category'];

			if($catid == 0){
				$catid = $_SESSION['category_id'];
			}

	    	$price = $_POST['price'];

	    	$about = $_POST['about'];	

	    	$update_id = $_SESSION['update_id'];

			if(isset($update)){
				if ($img_name == 0){
					$sql = "UPDATE `goods` SET `catid`='$catid',`namemodel`='$name',`price`='$price',`description`='$about' WHERE `goodsid` = '$update_id'";
				$result = $mysqli->query($sql);
				}
				else{
					if(move_uploaded_file($_FILES['filename']['tmp_name'], 'img/save/'.$img_name)){
							

					$_SESSION['yes_file']="yes";
					
						

		$sql = "UPDATE `goods` SET `catid`='$catid',`namemodel`='$name',`price`='$price',`description`='$about',`img_name`='$img_name' WHERE `goodsid` = '$update_id'";
				$result = $mysqli->query($sql);
			}
		}
					
				if($result === True){
			 		$_SESSION['query_ok'] = "<div class='alert alert-info' role='alert'>Ваш запрос успешно обработан!</div>";
			 	
			 		header('Location: ./adminka.php');
			 			
			 	}
				else{
			 		$_SESSION['query_off'] ="<div  class='alert alert-danger' role='alert'>Ошибка, не удалось отпраивть данные</div>";
					header('Location: ./adminka.php');
			 			
				}
			
	}
?>