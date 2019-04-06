<?php 
include_once("conexao.php");
$codigo = $_POST['codigo'];

$sql="DELETE FROM RESERVA WHERE CODIGO = $codigo";

$query = mysqli_query($con,$sql);
?>
<script>
alert("Agendamento deleta com sucesso!");
window.location.href = "../../adm_files/html/reservas.php";
</script>