<?php 
	session_start();
	$codigoEquipamento = $_POST['equipamento'];
	$equipamento  = $_SESSION['equipamentos'];
	$count = count($equipamento);
	$equipamento[$count+1] = $codigoEquipamento; 
	$_SESSION['equipamentos'] = $equipamento;
	$true= true;
	echo json_encode($_SESSION['equipamentos']);
?>