<?php 
session_start();
	if (!isset($_SESSION['CPF'])) {
		
		include_once('../../../../../../../php/conexao.php');
		$sql = "DELETE FROM PESQUISA WHERE CODIGO != 0";
		$query = mysqli_query($con, $sql);

	}else{
		echo "<b>Você não pode acessar este arquivo!<?b>";
	}

?>