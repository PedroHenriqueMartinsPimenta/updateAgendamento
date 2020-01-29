<?php
include_once('classes/AdmDAO.class.php');
include_once('conexao.php');
session_start();
	$escola = $_POST['escola'];
	$sql = "INSERT INTO ESCOLA(NOME) VALUES('$escola')";
	$query = mysqli_query($con, $sql);
	if ($query) {
		$sql = "SELECT CODIGO FROM ESCOLA WHERE NOME = '$escola'";
		$query = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($query);
		$_SESSION['ESCOLA'] = $row['CODIGO'];
		$cpf= $_POST['cpf'];
		$name = $_POST['nome'];
		$sobrenome=$_POST['sobrenome'];
		$permissao=$_POST['permissao'];
		$email = $_POST['email'];
		$senha=$_POST['senha'];
		$img = $_FILES['foto']['tmp_name'];
		$nome = $_FILES['foto']['name'];
		$DAO = new AdmDAO;
		$DAO->addProfessor($cpf,$nome,$name,$img,$sobrenome,$senha,$permissao,$email);
		$date = date('Y-m-d');
		$sql = "INSERT INTO MENSALIDADE(DIA_PAGO, USUARIO_CPF, STATUS) VALUES('$date', '$cpf', 3)";
		$query = mysqli_query($con, $sql);
		unset($_SESSION['ESCOLA']);
	}




?>
<script>
    alert("Cadastrado com sucesso!");
    window.location.href = "../";
</script>