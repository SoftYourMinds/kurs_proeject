<?php
	session_start();
	require_once "connect.php";
	require_once "validate_connect.php";

	$id =  $_GET['id'];
		
	$sql = "DELETE FROM `admin` WHERE `adminid` = '$id' ";
	$result = $mysqli->query($sql);
	header('Location: ./admin_amoung.php');
?>