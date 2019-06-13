<?php 
session_start();
include_once('conexao.php');
$id = $_GET['id'];
$cpf = $_SESSION['CPF'];
if(date('m')+1 <= 12){
	$dia = date('Y') . "-" .(date('m')+1)."-".date('d');
}else{
	$dia = date('Y') . "-01-".date('d');

}
$sql = "UPDATE PESQUISA SET VALIDADE = '$dia', OPNIAO = $id WHERE USUARIO_CPF = '$cpf'";
$query = mysqli_query($con,$sql);
if ($query) {
	if ($_SESSION['PERMISSAO'] == 1) {
		?>
		<script type="text/javascript">
			alert("Obrigado por sua participação!");
			window.location.href= '../adm.php';
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("Obrigado por sua participação!");
			window.location.href= '../user.php';
		</script>
		<?php
	}
}else{
	echo "<b>".mysqli_error($con)."</b>";
}
?>