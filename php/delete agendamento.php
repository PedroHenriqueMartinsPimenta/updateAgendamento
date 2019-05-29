<?php 
include_once("conexao.php");
session_start();
$codigo = $_GET['codigo'];
$dia = date('d');
$mes = date('m');
$ano = date('Y');

$sql="DELETE FROM RESERVA WHERE CODIGO = $codigo AND DAY(DATA_ULTILIZAR) > $dia AND MONTH(DATA_ULTILIZAR) >= $mes AND YEAR(DATA_ULTILIZAR) >= $ano";

$query = mysqli_query($con,$sql);
if ($query) {
    if($_SESSION['PERMISSAO'] == 1){
?>
<script>
alert("Agendamento deletado com sucesso!");
window.location.href = "../adm_files/html/reservas.php";
</script>
<?php
}else{
    ?>
    <script>
    alert("Agendamento deletado com sucesso!");
    window.location.href = "../user_files/html/reservas.php";
    </script>
<?php
}
}else{
	echo mysqli_error($con);
}
?>