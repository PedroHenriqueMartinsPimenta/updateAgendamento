<?php
		include_once('conexao.php');
		session_start();
		$escola = $_SESSION['ESCOLA'];
		$aula = $_POST['descricao'];

		$sql = "INSERT INTO AULA (DESCRICAO, ESCOLA_CODIGO) VALUES('$aula', $escola)";
		$query = mysqli_query($con, $sql);
		if ($query) {
			?>
				<script type="text/javascript">
					alert("Cadastrado com sucesso");
					window.location.href = '../adm_files/html/aulas.php';
				</script>
			<?php	
		}else{
			echo mysqli_error($con);
		}
?>