<?php
	include_once('../conexao.php');
	include_once('pagseguro.class.php');
	$notificationCode = preg_replace('/[^[:alnum:]-]/','',$_POST["notificationCode"]);
	$pagseguro = new PagSeguro();
	$array = $pagseguro->getNotication($notificationCode);
	$codigo = $array[0];
	$status = $array[1];
	$sql = "SELECT * FROM MENSALIDADE WHERE CODIGO = $codigo";
	$query = mysqli_query($con, $sql);
	if (mysqli_num_rows($query) > 0) {
		$sql = "UPDATE MENSALIDADE SET STATUS = $status WHERE CODIGO = $codigo";
		$query = mysqli_query($con, $sql);
	}
	
?>