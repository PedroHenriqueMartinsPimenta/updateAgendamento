<?php 
	include_once('conexao.php');
	$codigo = $_GET['codigo'];

	$sql = "DELETE FROM RESERVAS_PADROES WHERE ID = $codigo";
	$query = mysqli_query($con, $sql);
	if ($query) {
		?>
			<script type="text/javascript">
				alert("Deletado com sucesso!");
				window.location.href = '../adm_files/html/agendamentos_padroes.php';
			</script>
		<?php
	}else{
		echo mysqli_error($con);
	}
?>