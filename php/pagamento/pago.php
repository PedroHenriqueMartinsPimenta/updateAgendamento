<?php
	include_once('../conexao.php');
	session_start();
	$dia = $_POST['dia'];
	$cpf = $_SESSION['CPF'];

	$sql = "INSERT INTO MENSALIDADE(DIA_PAGO, USUARIO_CPF) VALUES('$dia', '$cpf')";
	$query = mysqli_query($con, $sql);
	if ($query) {
		echo json_encode(1);
	}else{
		echo json_encode(0);
	}
?>