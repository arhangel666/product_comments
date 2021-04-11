<?php 
	require_once 'config.php';

	$name = $_POST['name'];
	$img = $_POST['img'];
	$cost = $_POST['cost'];
	$data_create = date("F j, Y, g:i a");
	$name_user = $_POST['name_user'];
	if (isset($_POST['btn_create_product'])) {
		$link->query("INSERT INTO products (name,mini_img,cost,data_create,name_user) VALUES ('$name','$img','$cost','$data_create','$name_user')");
		header("Location: /");
	}

