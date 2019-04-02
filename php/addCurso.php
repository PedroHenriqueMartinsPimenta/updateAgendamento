<?php 
include_once('classes/AdmDAO.class.php');
$descricao = $_POST['descricao'];
$DAO = new AdmDAO;
$result = $DAO->addCurso($descricao); 
?>
<script>
    alert("Cadastrado com sucesso!");
    window.location.href = "../adm_files/html/cursos.php";
</script>