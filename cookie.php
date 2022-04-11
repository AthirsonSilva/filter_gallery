<?php 
	header("Location: index.php");

	$cookie = $_POST['select-type'];

	setcookie('filtro',$cookie,time()+60);
?>