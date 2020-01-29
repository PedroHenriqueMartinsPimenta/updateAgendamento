<?php 
include_once('classes/AdmDAO.class.php');
$descricao = $_POST['descricao'];
if (isset($_POST['vezes'])) {
	$vezez = true;
}else{
	$vezez = false;
}
$DAO = new AdmDAO;
$result = $DAO->addCurso($descricao, $vezez); 
?>
<script>
    alert("Cadastrado com sucesso!");
    window.location.href = "../adm_files/html/cursos.php";
</script>