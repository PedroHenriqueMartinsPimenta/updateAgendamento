
<?php 
	include_once('conexao.php');
	session_start();

	$cpf = $_GET['cpf'];
	$sql = "SELECT * FROM USUARIO WHERE CPF = '$cpf'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	$senha = base64_decode($row['SENHA']);
	$email = $row['EMAIL'];
	$_SESSION['codigo_update_senha'] = base64_encode($row['CPF']);
	$mensagem = "Olá senhor(a) usuário, um dos administradores requisitaram a recuperação de senha voltado ao senhor(a), por este motivo estamos lhe enviando um E-mail com um link de alteração. link: https://agendamento34.000webhostapp.com/php/recuperarSenhaTela.php?codigo=".$_SESSION['codigo_update_senha']."&&s=".$row['SENHA'];
	mail($email, "Recuperação de senha", $mensagem);
	
?>
<script type="text/javascript">
alert("E-mail enviado!");
	window.location.href = "../adm_files/html/usuarios.php";
</script>
