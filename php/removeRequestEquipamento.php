<?php 
	session_start();
	$codigoEquipamento = $_POST['equipamento'];
	$equipamento  = $_SESSION['equipamentos'];
	$count = count($equipamento);
	for ($i=1; $i <= $count; $i++) { 
		if ($equipamento[$i] == $codigoEquipamento) {
			$equipamento[$i] = null;
		}
	}
	$_SESSION['equipamentos'] = $equipamento;
	$true= true;
	echo json_encode($_SESSION['equipamentos']);
?>