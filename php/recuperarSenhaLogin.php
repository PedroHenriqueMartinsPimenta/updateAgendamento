
<?php 
	include_once('conexao.php');
	$cpf = $_POST['cpf'];
	$sql = "SELECT * FROM USUARIO WHERE CPF = '$cpf'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	$senha = base64_decode($row['SENHA']);
	$email = $row['EMAIL'];
	$mensagem = "Olá senhor(a) usuário, um dos administradores requisitaram a recuperação de senha voltado ao senhor(a), por este motivo estamos lhe enviando um E-mail com sua atual senha. senha: ".$senha;
	mail($email, "Recuperação de senha", $mensagem);
	
?>
<script type="text/javascript">
alert("E-mail enviado!");
	window.location.href = "../";
</script>
