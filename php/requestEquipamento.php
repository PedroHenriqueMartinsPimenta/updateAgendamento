<?php 
	session_start();
	$codigoEquipamento = $_POST['equipamento'];
	$equipamento  = $_SESSION['equipamentos'];
	$count = count($equipamento);
	$equipamento[$count+1] = $codigoEquipamento; 
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