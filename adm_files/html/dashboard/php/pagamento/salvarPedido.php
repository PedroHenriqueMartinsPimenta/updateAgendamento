<?php
	include_once('../conexao.php');
	session_start();
	$ano = date('Y');
	$mes = $_POST['mes'];
	$day = date('d');
	if (intval($mes) != intval(date('m')) && intval($mes) != intval(date('m'))+1) {
		$day = '01';
	}
	$dia = $ano . "-". $mes . "-".$day;
	$cpf = $_SESSION['CPF'];
	$escola = $_SESSION['ESCOLA'];
	$sql = "SELECT * FROM MENSALIDADE INNER JOIN USUARIO ON MENSALIDADE.USUARIO_CPF = USUARIO.CPF WHERE USUARIO.ESCOLA_CODIGO = $escola AND MONTH(DIA_PAGO) = $mes AND YEAR(DIA_PAGO) = $ano";
	$query = mysqli_query($con, $sql);
	if (mysqli_num_rows($query) > 0) {
		$row = mysqli_fetch_array($query);
		$codigo = $row['CODIGO'];
		$sql = "UPDATE MENSALIDADE SET  USUARIO_CPF = '$cpf', DIA_PAGO = '$dia' WHERE CODIGO = $codigo";
		$query = mysqli_query($con, $sql);
		echo $row['CODIGO'];
	}else{
		$sql = "INSERT INTO MENSALIDADE(DIA_PAGO, USUARIO_CPF) VALUES('$dia', '$cpf')";
		$query = mysqli_query($con, $sql);
		if ($query) {
			$sql = "SELECT * FROM MENSALIDADE WHERE USUARIO_CPF = '$cpf' AND DIA_PAGO = '$dia' ORDER BY CODIGO DESC LIMIT 1";
			$query = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($query);
			echo($row['CODIGO']);
		}else{
			echo json_encode(0);
		}
		}
?>