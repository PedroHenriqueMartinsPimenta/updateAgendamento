<?php 
session_start();
include_once("classes/AdmDAO.class.php");
include_once('classes/config.class.php');
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$qtd = $_POST['qtd'];
$imgName = $_FILES['img']['name'];
$img = $_FILES['img']['tmp_name'];
if ($img != null) {
	$time = date('Y_m_d_h_m_s');
	$nome = basename($time.$imgName);
	move_uploaded_file($img,"../imgEquipamentos/".$nome);
	$urlImg = $link."imgEquipamentos/".$nome;
}else{
	$urlImg = $_SESSION['IMG_EQUI'];
}

$admDAO = new AdmDAO();
$query = $admDAO->updateEquipamento($codigo, $descricao, $qtd, $urlImg);
if($query){
	?>
	<script>
		alert("Dados atualizados com sucesso!");
		window.location.href = "../adm_files/html/equipamentos.php";
	</script>
	<?php
	}else{
		echo "erro";
		}

?>