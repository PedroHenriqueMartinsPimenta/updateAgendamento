<?php 
	include_once('conexao.php');
	session_start();
	$cpf = $_POST['cpf'];
	$sql = "SELECT * FROM USUARIO WHERE CPF = '$cpf'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	$senha = base64_decode($row['SENHA']);
	$email = $row['EMAIL'];
	$_SESSION['codigo_update_senha'] = base64_encode(rand(1, 10000));
	$mensagem = "Olá senhor(a) usuário, um dos administradores requisitaram a recuperação de senha voltado ao senhor(a), por este motivo estamos lhe enviando um E-mail com um link de alteração. link: https://agendamento34.000webhostapp.com/php/recuperarSenhaTela.php?codigo=".$_SESSION['codigo_update_senha']."&&CPF=".base64_encode($row['CPF']);
	mail($email, "Recuperação de senha", $mensagem, null, 'trydeveloper70@gmail.com');
	
?>
<script type="text/javascript">
alert("E-mail enviado!");
	window.location.href = "../";
</script>
