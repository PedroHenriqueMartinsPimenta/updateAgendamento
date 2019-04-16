<?php 
	include_once('conexao.php');
	$codigo = $_POST['codigo'];
	$sql = "SELECT * FROM EQUIPAMENTO WHERE CODIGO = $codigo";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fecth_array($query);
	echo json_encode($row);
?>