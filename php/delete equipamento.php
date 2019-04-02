<?php 
include_once("conexao.php");
$codigo = $_GET['codigo'];

$sql="DELETE FROM RESERVA WHERE EQUIPAMENTO_CODIGO = $codigo";

$query = mysqli_query($con,$sql);
if($query){
	$sqlUser = "DELETE FROM EQUIPAMENTO WHERE CODIGO = $codigo";
	$queryUser = mysqli_query($con,$sqlUser);
	if($queryUser){
			?>
			<script>
				alert("Equipamento deletado!");
				window.location.href = "../adm_files/html/equipamentos.php";
			</script>
			<?php 
	}else{
		echo mysqli_error($con);
	}
	}

?>
