<?php
	session_start();
	include_once('conexao.php');
	$message = $_POST['message'];
	$cpf = $_SESSION["CPF"];
	$sql = "SELECT EMAIL FROM USUARIO WHERE CPF = '$cpf'";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query);
	$email = $row['EMAIL'];
	$message .= " (".$email.")";
	mail("pedrohenrique234322@gmail.com", "Suporte", $message);
	$message = "Olá ".$email.", nós recebemos sua mensagem, e nós iremos trabalha-la agora mesmo, aguarde em sua caixa de E-mail, podemos entrar em contato a qualquer momento!";
	mail($email, "Suporte", $message);
	header('location:../suporte.php');
?>