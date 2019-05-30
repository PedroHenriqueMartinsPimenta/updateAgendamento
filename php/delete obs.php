<?php 
		include_once('conexao.php');
		$codigo = $_GET['codigo'];
		 $sql = "UPDATE OBSERVACAO SET VISUALIZADO = 1 WHERE CODIGO = $codigo";
		 $query = mysqli_query($con, $sql);
		 if ($query) {
		 	?>
		 		<script type="text/javascript">
		 			alert("Marcado como visualizado");
		 			window.location.href = "../adm_files/html/observacoes.php";
		 		</script>
		 	<?php
		 }
?>