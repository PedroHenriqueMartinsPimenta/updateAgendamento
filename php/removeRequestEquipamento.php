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
	$array = "[";
	for ($i=0; $i < count($equipamento); $i++) { 
		if(isset($equipamento[$i])){
		if($i == count($equipamento) - 1 ){
			$array .= $equipamento[$i];
		}else{
			$array .= $equipamento[$i].",";

		}
	}
	}
	$array .= "]";
	echo $array;
?>