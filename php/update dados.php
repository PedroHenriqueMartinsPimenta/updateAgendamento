<?php 
	include_once('conexao.php');
	session_start();
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$cpf = $_SESSION['CPF'];
	$sql = "UPDATE USUARIO SET NOME = '$nome', SOBRENOME = '$sobrenome', EMAIL = '$email' WHERE CPF = '$cpf'";
	$query = mysqli_query($con, $sql);
	if ($query) {
		if ($_SESSION['PERMISSAO'] == 1) {
			?>
			<script type="text/javascript">
				alert("Dados atualizados com sucesso!");
				window.location.href= "../adm_files/html/dados_pessoais.php";
			</script>
			<?php
		}else if ($_SESSION['PERMISSAO'] == 0){
			?>
			<script type="text/javascript">
				alert("Dados atualizados com sucesso!");
				window.location.href= "../user_files/html/dados_pessoais.php";
			</script>
			<?php
		}
	}
?>