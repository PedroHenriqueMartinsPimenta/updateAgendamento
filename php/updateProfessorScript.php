<?php 
include_once("classes/AdmDAO.class.php");
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$ativo  = $_POST['ativo'];
$permissao = $_POST['permissao'];
$admDAO = new AdmDAO();
$query = $admDAO->updateProfessor($nome, $sobrenome, $ativo, $permissao, $cpf);
if($query){
	?>
		<script>
			alert("Dados atualizados com sucesso!");
			window.location.href = "../adm_files/html/usuarios.php";
		</script>
	<?php
	}else{
		echo "erro";
		}  

?>