<?php 
	include_once('conexao.php');
	include_once('classes/config.class.php');
	session_start();
	$foto_name = $_FILES['foto']['name'];
	$foto_tmp = $_FILES['foto']['tmp_name'];
	$cpf = $_SESSION['CPF'];
	$foto =basename($foto_name);
	$url = $link."path/".$cpf."/".$foto;
	unlink(str_replace($link, '../', $_SESSION['FOTO']));
	move_uploaded_file($foto_tmp, "../path/".$cpf."/".$foto);
	$sql = "UPDATE USUARIO SET FOTO = '$url' WHERE CPF = '$cpf'";
	$query= mysqli_query($con, $sql);
	if ($query) {
		$_SESSION['FOTO'] = $url;
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