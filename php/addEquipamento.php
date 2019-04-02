<?php 
include_once("classes/AdmDAO.class.php");
	$inserir = new AdmDAO;
	$descricao = $_POST['descricao'];
	$qtd = $_POST['qtd'];
	$ft = $_FILES['img']['tmp_name'];
	$ftNome = $_FILES['img']['name'];
	$time = date('Y_m_d_h_m_s');
	$nome = basename($time.$ftNome);
	move_uploaded_file($ft,"../imgEquipamentos/".$nome);
	$urlImg = "http://localhost/updateAgendamento/imgEquipamentos/".$nome;
	$checked = $inserir->addEquipamento($descricao,$qtd,$urlImg);
	if($checked){
		?>
		<script>
			alert("Cadastrado com sucesso!");
			window.location.href = "../adm_files/html/equipamentos.php";
		</script>
		<?php
		}else{
			echo "erro";
			}
?>