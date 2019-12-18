<?php 
$date = date('w');
$arrayDias  = array(1,2,3,4,5);
if ($date == '5') {
	foreach ($arrayDias as $key => $value) {
		if ($value == 1) {
			$sql1 = "SELECT * FROM RESERVAS_PADROES WHERE DIA_SEMANA = $value";
			$query = mysqli_query($con, $sql1);
			while ($row = mysqli_fetch_array($query)) {
				$dia = date('d') + 3;
				$mes = date('m');
				$ano = date('Y');

				$qtdMes = date('t');
				if ($dia > $qtdMes) {
					$dia = $dia - $qtdMes;
					$mes++;
				}
				if ($dia < 10) {
					$dia = "0".$dia;
				}
				if ($mes < 10) {
					$mes = "0" . $mes;
				}
				$data = $ano . "-" . $mes . "-" . $dia;
				$data_atual = date('Y-m-d h:i:s');
				$cpf = $row['USUARIO_CPF'];
				$turma = $row['TURMA_CODIGO'];
				$aula = $row['AULA_CODIGO'];
				$equipamento = $row['EQUIPAMENTO_CODIGO'];
				if ($data != $row['DIA']) {
					
				$sql2 = "INSERT INTO RESERVA (DATA,USUARIO_CPF,EQUIPAMENTO_CODIGO,AULA_CODIGO,TURMA_CODIGO,DATA_ULTILIZAR)
	 VALUES('$data_atual','$cpf',$equipamento,$aula, $turma,'$data')";

	 			$query = mysqli_query($con, $sql2);

	 			$sql3 = "UPDATE RESERVAS_PADROES SET DIA = '$data' WHERE ID = ".$row['ID'];
	 			$query3 = mysqli_query($con, $sql3);
	 		}
			}
		}else if ($value == 2) {
			$sql1 = "SELECT * FROM RESERVAS_PADROES WHERE DIA_SEMANA = $value";
			$query = mysqli_query($con, $sql1);
			while ($row = mysqli_fetch_array($query)) {
				$dia = date('d') + 4;
				$mes = date('m');
				$ano = date('Y');

				$qtdMes = date('t');
				if ($dia > $qtdMes) {
					$dia = $dia - $qtdMes;
					$mes++;
				}
				if ($dia < 10) {
					$dia = "0".$dia;
				}
				if ($mes < 10) {
					$mes = "0" . $mes;
				}
				$data = $ano . "-" . $mes . "-" . $dia;
				$data_atual = date('Y-m-d h:i:s');
				$cpf = $row['USUARIO_CPF'];
				$turma = $row['TURMA_CODIGO'];
				$aula = $row['AULA_CODIGO'];
				$equipamento = $row['EQUIPAMENTO_CODIGO'];

				if ($data != $row['DIA']) {
					
				$sql2 = "INSERT INTO RESERVA (DATA,USUARIO_CPF,EQUIPAMENTO_CODIGO,AULA_CODIGO,TURMA_CODIGO,DATA_ULTILIZAR)
	 VALUES('$data_atual','$cpf',$equipamento,$aula, $turma,'$data')";

	 			$query = mysqli_query($con, $sql2);

	 			$sql3 = "UPDATE RESERVAS_PADROES SET DIA = '$data' WHERE ID = ".$row['ID'];
	 			$query3 = mysqli_query($con, $sql3);
	 		}
			}
		}else if ($value == 3) {
			$sql1 = "SELECT * FROM RESERVAS_PADROES WHERE DIA_SEMANA = $value";
			$query = mysqli_query($con, $sql1);
			while ($row = mysqli_fetch_array($query)) {
				$dia = date('d') + 5;
				$mes = date('m');
				$ano = date('Y');

				$qtdMes = date('t');
				if ($dia > $qtdMes) {
					$dia = $dia - $qtdMes;
					$mes++;
				}
				if ($dia < 10) {
					$dia = "0".$dia;
				}
				if ($mes < 10) {
					$mes = "0" . $mes;
				}
				$data = $ano . "-" . $mes . "-" . $dia;
				$data_atual = date('Y-m-d h:i:s');
				$cpf = $row['USUARIO_CPF'];
				$turma = $row['TURMA_CODIGO'];
				$aula = $row['AULA_CODIGO'];
				$equipamento = $row['EQUIPAMENTO_CODIGO'];

				if ($data != $row['DIA']) {
					
				$sql2 = "INSERT INTO RESERVA (DATA,USUARIO_CPF,EQUIPAMENTO_CODIGO,AULA_CODIGO,TURMA_CODIGO,DATA_ULTILIZAR)
	 VALUES('$data_atual','$cpf',$equipamento,$aula, $turma,'$data')";

	 			$query = mysqli_query($con, $sql2);

	 			$sql3 = "UPDATE RESERVAS_PADROES SET DIA = '$data' WHERE ID = ".$row['ID'];
	 			$query3 = mysqli_query($con, $sql3);
	 		}
			}
		}else if ($value == 4) {
			$sql1 = "SELECT * FROM RESERVAS_PADROES WHERE DIA_SEMANA = $value";
			$query = mysqli_query($con, $sql1);
			while ($row = mysqli_fetch_array($query)) {
				$dia = date('d') + 6;
				$mes = date('m');
				$ano = date('Y');

				$qtdMes = date('t');
				if ($dia > $qtdMes) {
					$dia = $dia - $qtdMes;
					$mes++;
				}
				if ($dia < 10) {
					$dia = "0".$dia;
				}
				if ($mes < 10) {
					$mes = "0" . $mes;
				}
				$data = $ano . "-" . $mes . "-" . $dia;
				$data_atual = date('Y-m-d h:i:s');
				$cpf = $row['USUARIO_CPF'];
				$turma = $row['TURMA_CODIGO'];
				$aula = $row['AULA_CODIGO'];
				$equipamento = $row['EQUIPAMENTO_CODIGO'];

				if ($data != $row['DIA']) {
					
				$sql2 = "INSERT INTO RESERVA (DATA,USUARIO_CPF,EQUIPAMENTO_CODIGO,AULA_CODIGO,TURMA_CODIGO,DATA_ULTILIZAR)
	 VALUES('$data_atual','$cpf',$equipamento,$aula, $turma,'$data')";

	 			$query = mysqli_query($con, $sql2);

	 			$sql3 = "UPDATE RESERVAS_PADROES SET DIA = '$data' WHERE ID = ".$row['ID'];
	 			$query3 = mysqli_query($con, $sql3);
	 		}

			}
		}else if ($value == 5) {
			$sql1 = "SELECT * FROM RESERVAS_PADROES WHERE DIA_SEMANA = $value";
			$query = mysqli_query($con, $sql1);
			while ($row = mysqli_fetch_array($query)) {
				$dia = date('d') + 7;
				$mes = date('m');
				$ano = date('Y');

				$qtdMes = date('t');
				if ($dia > $qtdMes) {
					$dia = $dia - $qtdMes;
					$mes++;
				}
				if ($dia < 10) {
					$dia = "0".$dia;
				}
				if ($mes < 10) {
					$mes = "0" . $mes;
				}
				$data = $ano . "-" . $mes . "-" . $dia;
				$data_atual = date('Y-m-d h:i:s');
				$cpf = $row['USUARIO_CPF'];
				$turma = $row['TURMA_CODIGO'];
				$aula = $row['AULA_CODIGO'];
				$equipamento = $row['EQUIPAMENTO_CODIGO'];

				if ($data != $row['DIA']) {
					
				$sql2 = "INSERT INTO RESERVA (DATA,USUARIO_CPF,EQUIPAMENTO_CODIGO,AULA_CODIGO,TURMA_CODIGO,DATA_ULTILIZAR)
	 VALUES('$data_atual','$cpf',$equipamento,$aula, $turma,'$data')";

	 			$query = mysqli_query($con, $sql2);

	 			$sql3 = "UPDATE RESERVAS_PADROES SET DIA = '$data' WHERE ID = ".$row['ID'];
	 			$query3 = mysqli_query($con, $sql3);
	 		}

			}
		}
	}
}

?>