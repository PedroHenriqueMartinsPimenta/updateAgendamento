<?php 
	include_once('conexao.php');
	session_start();
	$foto_name = $_FILES['foto']['name'];
	$foto_tmp = $_FILES['foto']['tmp_name'];
	$cpf = $_SESSION['CPF'];
	$foto =basename($foto_name);
	$url = "http://localhost/updateAgendamento/path/".$cpf."/".$foto;
	
	move_uploaded_file($foto_tmp, "../path/".$cpf."/".$foto);
	$sql = "UPDATE USUARIO SET FOTO = '$url' WHERE CPF = '$cpf'";
	$query= mysqli_query($con, $sql);
	if ($query) {
		if($_SESSION['PERMISSAO'] == 1) {
			?>
				<script type="text/javascript">
					alert("Foto atualizada com sucesso!");
					window.location.href = '../adm_files/html/dados_pessoais.php';
				</script>
			<?php 
		}else if($_SESSION['PERMISSAO'] == 0) {
			?>
				<script type="text/javascript">
					alert("Foto atualizada com sucesso!");
					window.location.href = '../user_files/html/dados_pessoais.php';
				</script>
			<?php
		}
	}
?>