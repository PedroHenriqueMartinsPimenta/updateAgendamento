
<?php 
	include_once('conexao.php');
	$cpf = $_GET['cpf'];
	$sql = "SELECT * FROM USUARIO WHERE CPF = '$cpf'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	$senha = base64_decode($row['SENHA']);
	$email = $row['EMAIL'];
	$mensagem = "Sua atual senha: ".$senha;
	mail($email, "Recuperacao de senha", $mensagem);
	
?>
<script type="text/javascript">
alert("E-mail enviado!");
	window.location.href = "../adm_files/html/usuarios.php";
</script>
