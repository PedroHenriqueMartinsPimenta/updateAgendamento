<?php
	$idPedido = $_POST['idPedido'];
	include_once('pagseguro.class.php');
	$pagseguro = new PagSeguro();
	echo $pagseguro->getCode($idPedido);
?>