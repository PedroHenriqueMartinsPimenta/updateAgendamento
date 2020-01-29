<?php
	session_start();
	$_SESSION["equipamentos"] = array();
	header('location:../../dashboard.php');
?>