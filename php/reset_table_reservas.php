<?php 
	session_start();
	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];
	if ($cpf == $_SESSION['CPF'] && $senha == base64_decode($_SESSION['senha']) && $_SESSION['PERMISSAO'] == 1) {
		include_once('conexao.php');
		$sql = "TRUNCATE RESERVA";
		$query = mysqli_query($con, $sql);
		if ($query) {
			?>
				<script type="text/javascript">
					alert("Tabela reiniciada com sucesso!");
					window.location.href="../adm_files/html/reservas.php";
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert("Erro ao reiniciar a tabela!");
					window.location.href="../adm_files/html/reservas.php";
				</script>
			<?php
		}
	}else{
		?>
			<script type="text/javascript">
					alert("Você não tem acesso!");
					window.location.href="../adm_files/html/reservas.php";
				</script>
		<?php
	}
?>