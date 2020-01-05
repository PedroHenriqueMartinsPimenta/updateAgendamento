<?php
	include_once('conexao.php');
	$nome = $_POST['nome'];
	$sql = "INSERT INTO ESCOLA(NOME) VALUES('$nome')";
	$query = mysqli_query($con, $sql);
	if ($query) {
		$sql = "SELECT CODIGO FROM ESCOLA WHERE NOME = '$nome'";
		$query = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($query);
		$codigo = $row['CODIGO'];
		$sql = "UPDATE USUARIO SET ESCOLA_CODIGO = $codigo, ATIVO = 1 WHERE CPF = '111.111.111-11'";
		$query = mysqli_query($con, $sql);
		if ($query) {
			echo "1";
		}else{
			echo "0";
		}
	}else{
		echo "0";
	}
?>