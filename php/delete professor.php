<?php 
include_once("conexao.php");
$codigo = $_GET['codigo'];

$sql="DELETE FROM RESERVA WHERE USUARIO_CPF = '$codigo'";

$query = mysqli_query($con,$sql);
if($query){
	$sqlUser = "DELETE FROM USUARIO WHERE CPF = '$codigo'";
	$queryUser = mysqli_query($con,$sqlUser);
	}

?>
<script>
	alert("Usuario removido");
	window.location.href = "../adm_files/html/usuarios.php"
</script>
