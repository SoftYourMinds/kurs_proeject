<?php
	session_start();
	require_once "connect.php";
	require_once "validate_connect.php";

	$id =  $_GET['id'];

	$sql = "DELETE FROM `goods` WHERE `goodsid` = '$id' ";
	$result = $mysqli->query($sql);
	header('Location: ./adminka.php');
?>