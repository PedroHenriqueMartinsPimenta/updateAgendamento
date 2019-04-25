<?php 
include_once("conexao.php");
$codigo = $_GET['codigo'];

$sql="DELETE FROM RESERVA WHERE CODIGO = $codigo";

$query = mysqli_query($con,$sql);
if ($query) {
?>
<script>
alert("Agendamento deleta com sucesso!");
window.location.href = "../adm_files/html/reservas.php";
</script>
<?php 
}else{
	echo mysqli_error($con);
}
?>