<?php
	include_once('conexao.php');
	$codigo = $_GET['codigo'];
	$sql = "DELETE FROM AULA WHERE CODIGO = $codigo";
	$query = mysqli_query($con, $sql);
	if ($query) {
		?>
			<script type="text/javascript">
				alert('Removido com sucesso');
				window.location.href='../adm_files/html/aulas.php';
			</script>
		<?php
	}else{
		echo mysqli_error($con);
	}
?>