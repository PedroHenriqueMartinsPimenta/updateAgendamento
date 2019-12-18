<?php 
		include_once('conexao.php');
		$professor = $_POST['professor'];
		$turma = $_POST['turma'];
		$aula = $_POST['aula'];
		$equipamento = $_POST['equipamento'];
		$dia_semana = $_POST['dia_semana'];
		$data = date('Y-m-d');

		$sql = "INSERT INTO RESERVAS_PADROES(USUARIO_CPF, TURMA_CODIGO, AULA_CODIGO, EQUIPAMENTO_CODIGO, DIA_SEMANA, DIA) VALUES('$professor','$turma', '$aula', '$equipamento', '$dia_semana', '$data')";
		$query = mysqli_query($con, $sql);
		if ($query) {
			?>
				<script type="text/javascript">
					alert("Agendamento inserido com sucesso!");
					window.location.href= '../adm_files/html/agendamentos_padroes.php';
				</script>
			<?php
		}else{
			echo mysqli_error($con);
		}
?>