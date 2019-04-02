<?php 
include_once("classes/AdmDAO.class.php");
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$qtd = $_POST['qtd'];
$admDAO = new AdmDAO();
$query = $admDAO->updateEquipamento($codigo, $descricao, $qtd);
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