<?php 
	include_once('conexao.php');
	session_start();
	$cpf = $_SESSION['CPF'];
	$obs = $_POST['obs'];
	$momento = date('Y-m-d h:m:s');
	$sql = "INSERT INTO OBSERVACAO(OBS, MOMENTO, USUARIO_CPF, VISUALIZADO) VALUES('$obs','$momento','$cpf',0);";
	$query = mysqli_query($con, $sql);
	if ($query) {
			if($_SESSION['PERMISSAO'] == 1){
					?>
						<script type="text/javascript">
							alert('Observação enviada');
							window.location.href="../adm_files/html/observacoes.php";
						</script>
					<?php 
			}else{
				?>
						<script type="text/javascript">
							alert('Observação enviada');
							window.location.href="../user_files/html/observacoes.php";
						</script>
					<?php 
			}
	}
?>