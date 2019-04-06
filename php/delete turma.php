<?php 
include_once("conexao.php");
$codigo = $_GET['codigo'];

$sql="DELETE FROM RESERVA WHERE TURMA_CODIGO = $codigo";

$query = mysqli_query($con,$sql);
if($query){
	$sqlUser = "DELETE FROM TURMA WHERE CODIGO = $codigo";
	$queryUser = mysqli_query($con,$sqlUser);
	if($queryUser){
			?>
			<script>
				alert("Turma removida deletado!");
				window.location.href = "../adm_files/html/cursos.php";
			</script>
			<?php 
	}else{
		echo mysqli_error($con);
	}
	}

?>
