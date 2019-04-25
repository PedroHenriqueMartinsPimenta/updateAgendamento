<?php
include_once('conexao.php');
include_once('classes/UserComumDAO.class.php');
session_start();
$cpf = $_SESSION['CPF'];
$aula = $_POST['aula'];
$equipamento = $_POST['equipamento'];
$sala = $_POST['sala'];
$data = date('Y-m-d H:i:s');
$dao = new UserComumDAO();
$data_ultilizar = $_POST['data_ultilizar'];
$array = $dao->pesquisaEquipamentosAula($equipamento, $data_ultilizar, $aula);
if(count($array) == 0){
	$sql = "INSERT INTO RESERVA (DATA,USUARIO_CPF,EQUIPAMENTO_CODIGO,AULA_CODIGO,TURMA_CODIGO,DATA_ULTILIZAR)
	 VALUES('$data','$cpf',$equipamento,$aula, $sala,'$data_ultilizar')";
	$query = mysqli_query($con,$sql);
	if($query){
		echo json_encode(4);
		}else{
			echo json_encode(false);
			}
	}else{
		echo json_encode($equipamento);
	}
?>