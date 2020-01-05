<?php 
	include_once('conexao.php');
	session_start();
	$codigo = $_POST['codigo'];
	$cpf = $_POST['cpf'];
	$mes = date('m');
	$escola = $_SESSION['ESCOLA'];
	$aula = $_POST['aula'];
	$dia_semana = $_POST['dia_semana'];
	$ano = date('Y');
	$sql = "SELECT TURMA_CODIGO, COUNT(TURMA_CODIGO) AS QTD, DATE_FORMAT(DATA_ULTILIZAR, '%w') AS DIA_SEMANA FROM RESERVA INNER JOIN EQUIPAMENTO ON EQUIPAMENTO.CODIGO = RESERVA.EQUIPAMENTO_CODIGO WHERE EQUIPAMENTO_CODIGO = $codigo AND AULA_CODIGO = $aula AND USUARIO_CPF = '$cpf' AND ESCOLA_CODIGO = $escola AND MONTH(DATA_ULTILIZAR) = $mes AND YEAR(DATA_ULTILIZAR) = $ano AND DATE_FORMAT(DATA_ULTILIZAR, '%w') = $dia_semana GROUP BY TURMA_CODIGO ORDER BY QTD DESC LIMIT 1";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query);
	if (mysqli_num_rows($query) > 0) {
		echo json_encode("#turma".$aula." #".$row['TURMA_CODIGO']);
	}else{
		echo json_encode(null);
	}
?>