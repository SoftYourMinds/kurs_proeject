<?php
	require_once "connect.php";
	
	$login = $_POST['login'];
	$pass = $_POST['pass'];

	$sql = ("SELECT * FROM `admin` WHERE `login` = '$login' AND `pass` = '$pass'");
	$result = $mysqli->query($sql);
	$user = $result->fetch_assoc();

	if($_SESSION['signup'] != "ok"){
		header('Location: ./signup.php');
	}
	else{
		if((count($user) == 0)&&($_SESSION['admin']!="on")){
			$_SESSION['admin'] = "off";
			$_SESSION['sign_error'] ="<div  class='alert alert-danger' role='alert'>Не удалось ввойти</div>";
			header('Location: ./signup.php');
		}
		else{
			$_SESSION['admin'] = "on";
		}
	}
