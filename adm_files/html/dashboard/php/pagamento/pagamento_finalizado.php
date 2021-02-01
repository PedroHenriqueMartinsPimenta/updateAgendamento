<?php
	session_start();
	$_SESSION["equipamentos"] = array();
	header('location:../view_produtos.php');
?>