<?php
include_once 'classes/Conexao.class.php';
class ComumDAO extends Conexao{
  public function entrar($cpf, $senhaa){
      $senha = base64_encode($senhaa);
      try{
      $con = $this->openConnection();
      $sql="SELECT * FROM USUARIO  WHERE CPF = :CPF LIMIT 1";
      $tpmt = $con->prepare($sql);
      $tpmt->bindValue(':CPF',$cpf);
      $tpmt->execute();
		 $result = $tpmt->fetchAll(PDO::FETCH_ASSOC);
		 if ($tpmt->rowCount() > 0) {
		
      foreach ($result as $row){
  		 	if($senha == $row['SENHA'] && $row['ATIVO'] == 1){
          $sql = "SELECT * FROM MENSALIDADE INNER JOIN USUARIO ON MENSALIDADE.USUARIO_CPF = USUARIO.CPF WHERE TIMESTAMPDIFF(DAY, :DIA_ATUAL, MENSALIDADE.DIA_PAGO) <= 30 AND MENSALIDADE.STATUS = 3 AND USUARIO.ESCOLA_CODIGO = :ESCOLA AND MONTH(MENSALIDADE.DIA_PAGO) <= :MES AND YEAR(MENSALIDADE.DIA_PAGO) = :ANO ORDER BY MENSALIDADE.DIA_PAGO DESC LIMIT 1";
          $tpmt = $con->prepare($sql);
          $tpmt->bindValue(":DIA_ATUAL",date('Y-m-d'));
          $tpmt->bindValue(':ESCOLA', $row['ESCOLA_CODIGO']);
          $tpmt->bindValue(':MES', date('m'));
          $tpmt->bindValue(":ANO", date('Y'));
          $tpmt->execute();
          if ($tpmt->rowCount() > 0) {
            session_start();
    				$_SESSION['CPF'] = $row['CPF'];
    				$_SESSION['senha'] = $row['SENHA'];
            $_SESSION['nome'] = $row['NOME'];
    				$_SESSION['PERMISSAO'] = $row['PERMISSAO'];
            $_SESSION['ativo'] = $row['ATIVO'];
            $_SESSION['FOTO'] = $row['FOTO'];
            $_SESSION['MODAL-INFO'] = false;
            $_SESSION['ESCOLA'] = $row['ESCOLA_CODIGO'];
            $_SESSION["equipamentos"] = array();
    								
    				if($row['PERMISSAO'] == 0){
    					echo json_encode(0);
    				}else if($row['PERMISSAO'] == 1){
    					echo json_encode(1);
    				}
          }else{
            if ($row['PERMISSAO'] == 1) {
              session_start();
              $_SESSION['CPF'] = $row['CPF'];
              $_SESSION['senha'] = $row['SENHA'];
              $_SESSION['nome'] = $row['NOME'];
              $_SESSION['PERMISSAO'] = $row['PERMISSAO'];
              $_SESSION['ativo'] = $row['ATIVO'];
              $_SESSION['FOTO'] = $row['FOTO'];
              $_SESSION['MODAL-INFO'] = false;
              $_SESSION['ESCOLA'] = $row['ESCOLA_CODIGO'];
              echo(json_encode(3));
            }else{
              echo json_encode(2);
            }
          }
  			}else{
  				echo json_encode(2);
  				}
      }
                  }else{
                    echo json_encode(2);
                  }
      }catch(PDOException $e){
          echo $e;
      }
  }
  
  public function close(){
      session_start();
	    session_destroy();
  }

  public function updateReserva($dataConvertida,$professor,$equipamento,$aula,$turma,$codigo){
      $con = $this->openConnection();
      $sql = "UPDATE RESERVA SET DATA_ULTILIZAR = :DATA, USUARIO_CPF = :PROFESSOR,EQUIPAMENTO_CODIGO = :EQUIPAMENTO,"
              . "AULA_CODIGO = :AULA,TURMA_CODIGO = :TURMA WHERE CODIGO = :CODIGO";
      $tpmt = $con->prepare($sql);
      $tpmt->bindValue(":DATA",$dataConvertida);
      $tpmt->bindValue(":PROFESSOR",$professor);
      $tpmt->bindValue(":EQUIPAMENTO",$equipamento);
      $tpmt->bindValue(":AULA",$aula);
      $tpmt->bindValue(":TURMA",$turma);
      $tpmt->bindValue(":CODIGO",$codigo);
      $result = $tpmt->execute();
      if($result == 1){
          return true;
        }else{
            return false;
        }
  }
  
  public function updateSenha($cpf,$newSenhaa){
      $con = $this->openConnection();
      $newSenha = base64_encode($newSenhaa);
      $sql = "UPDATE USUARIO SET SENHA = :NEWSENHA WHERE CPF = :CPF";
      $tpmt = $con->prepare($sql);
      $tpmt->bindValue(":NEWSENHA",$newSenha);
      $tpmt->bindValue(":CPF",$cpf);
      $result = $tpmt->execute();
      if($result == 1){
          return true;
      }else{
          return false;
      }
  }
}


?>