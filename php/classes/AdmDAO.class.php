<?php 

include_once('Conexao.class.php');

class AdmDAO extends Conexao{
  private $link = "http://localhost/updateAgendamento/";

	public function addEquipamento($descricao,$qtd,$ft){
		$con = $this->openConnection();
    session_start();
    $escola = $_SESSION['ESCOLA'];
		$sql = "INSERT INTO EQUIPAMENTO (DESCRICAO,QUANTIDADE,ICON, ESCOLA_CODIGO) VALUES(:DESCRICAO,:QTD,:FT,:ESCOLA)";
                $tpmt = $con->prepare($sql);
                $tpmt->bindValue(":DESCRICAO",$descricao);
                $tpmt->bindValue(":QTD",$qtd);
                $tpmt->bindValue(":FT",$ft);
                $tpmt->bindValue(":ESCOLA",$escola);
                
		$query = $tpmt->execute();
		if($query == 1){
			return true;
			}else{
				return false;
			}
		}
	public function addCurso($descricao, $vezes){
			$con = $this->openConnection();
      session_start();
      $escola = $_SESSION['ESCOLA'];
      if ($vezes) {
  			for($i =1; $i <= 3;$i++){
  					$turma = $i."º ".$descricao;
  					$sqlTurma = "INSERT INTO TURMA (DESCRICAO, ESCOLA_CODIGO) VALUES(:TURMA, :ESCOLA)";
                                          $tpmt = $con->prepare($sqlTurma);
                                          $tpmt->bindValue(":TURMA",$turma);
                                          $tpmt->bindValue(':ESCOLA', $escola);
                                          $tpmt->execute();
  					
  				}
        }else{
          $sqlTurma = "INSERT INTO TURMA (DESCRICAO, ESCOLA_CODIGO) VALUES(:TURMA, :ESCOLA)";
                                          $tpmt = $con->prepare($sqlTurma);
                                          $tpmt->bindValue(":TURMA",$descricao);
                                          $tpmt->bindValue(':ESCOLA', $escola);
                                          $tpmt->execute();
        }
				return true;
		}
	public function addProfessor($cpf,$nome,$name,$img,$sobrenome,$senhaa,$permissao,$email){
		$con = $this->openConnection();
    @session_start();
    $escola = $_SESSION['ESCOLA'];
		$senha = base64_encode($senhaa);
		mkdir("../path/".$cpf,0777,true);
		$time = date('Y_m_d_h_m_s');
		$n = basename($time.$nome);
		move_uploaded_file($img, "../path/".$cpf."/".$n);
		$url = $this->link."path/".$cpf."/".$n;
		$sql="INSERT INTO USUARIO (CPF,NOME,SOBRENOME,FOTO,SENHA,ATIVO,PERMISSAO,EMAIL, ESCOLA_CODIGO)VALUES
		(:CPF,:NAME,:SOBRENOME,:URL,:SENHA,:ATIVO,:PERMISSAO,:EMAIL, :ESCOLA)";
                $tpmt = $con->prepare($sql);
                $tpmt->bindValue(":CPF",$cpf);
                $tpmt->bindValue(":NAME",$name);
                $tpmt->bindValue(":SOBRENOME",$sobrenome);
                $tpmt->bindValue(":URL",$url);
                $tpmt->bindValue(":SENHA",$senha);
                $tpmt->bindValue(":ATIVO",1);
                $tpmt->bindValue(":PERMISSAO",$permissao);
                $tpmt->bindValue(":EMAIL",$email);  
                $tpmt->bindValue(":ESCOLA", $escola);
		
		$query = $tpmt->execute();
		}
	
	public function listarAdm($codigo,$dia){
		$con = $this->openConnection();
		$sql="SELECT RESERVA.CODIGO AS CODIGO,DATE_FORMAT(RESERVA.DATA_ULTILIZAR,'%d/%m/%Y') AS DATA, USUARIO.NOME AS NOME, EQUIPAMENTO.DESCRICAO AS EQUIPAMENTO, AULA.DESCRICAO AS AULA, TURMA.DESCRICAO AS TURMA FROM RESERVA
		INNER JOIN EQUIPAMENTO ON EQUIPAMENTO.CODIGO = RESERVA.EQUIPAMENTO_CODIGO 
		INNER JOIN USUARIO ON RESERVA.USUARIO_CPF = USUARIO.CPF
		INNER JOIN AULA ON RESERVA.AULA_CODIGO = AULA.CODIGO
		INNER JOIN TURMA ON RESERVA.TURMA_CODIGO = TURMA.CODIGO WHERE AULA_CODIGO ". $codigo ." AND DATA_ULTILIZAR = :DIA ORDER BY AULA ASC ";
		$tpmt = $con->prepare($sql);
                $tpmt->bindValue(':DIA',$dia);
                $tpmt->execute();
                $query = $tpmt->fetchAll(PDO::FETCH_ASSOC);
		$array = array();
		$count = 0;
		foreach ($query as $rowList){
		      $array[$count] = '<tr id="linha'.$rowList['CODIGO'].'">
                                            <td>'.$rowList['NOME'].'</td>
                                            <td>'.$rowList['EQUIPAMENTO'].'</td>
                                            <td>'. $rowList['AULA'].'</td>
                                            <td>'. $rowList['TURMA'].'</td>
                                            <td>'. $rowList['DATA'].'</td>
                                            <td name="update"><a href="../../php/updateAgenda.php?codigo='.$rowList['CODIGO'].'"><img src="../../../img/edit-file.png" width="30"></a></td>
                                            <td name="delete"><img src="../../../img/delete.png" width="30" onclick="excluir('.$rowList['CODIGO'].')"></td>
					</tr>';
						   $count++;
						}
				return $array;
		}
           
            public function removerFiltro(){
                $con = $this->openConnection();
                $sql="SELECT RESERVA.CODIGO AS CODIGO,DATE_FORMAT(RESERVA.DATA_ULTILIZAR,'%d/%m/%Y') AS DATA, USUARIO.NOME AS NOME, EQUIPAMENTO.DESCRICAO AS EQUIPAMENTO, AULA.DESCRICAO AS AULA, TURMA.DESCRICAO AS TURMA FROM RESERVA
                INNER JOIN EQUIPAMENTO ON EQUIPAMENTO.CODIGO = RESERVA.EQUIPAMENTO_CODIGO 
                INNER JOIN USUARIO ON RESERVA.USUARIO_CPF = USUARIO.CPF
                INNER JOIN AULA ON RESERVA.AULA_CODIGO = AULA.CODIGO
                INNER JOIN TURMA ON RESERVA.TURMA_CODIGO = TURMA.CODIGO ORDER BY AULA ASC";
                $tpmt = $con->prepare($sql);
                $tpmt->execute();
                $query = $tpmt->fetchAll(PDO::FETCH_ASSOC);
                $array = array();
                $count = 0;
                foreach ($query as $rowList){
                $array[$count] = '<tr id="linha'.$rowList['CODIGO'].'">
                                <td>'.$rowList['NOME'].'</td>
                                <td>'.$rowList['EQUIPAMENTO'].'</td>
                                <td>'. $rowList['AULA'].'</td>
                                <td>'. $rowList['TURMA'].'</td>
                                <td>'. $rowList['DATA'].'</td>
                                <td name="update"><a href="../../../php/updateAgenda.php?codigo='.$rowList['CODIGO'].'"><img src="../../../img/edit-file.png" width="30"></a></td>
                                <td name="delete"><img src="../../../img/delete.png" width="30" onclick="excluir('.$rowList['CODIGO'].')"></td>
                                         </tr>';
                   $count++;
                }
            return $array;
           }
           public function updateEquipamento($codigo,$descricao,$qtd, $urlImg){
               $con = $this->openConnection();
               $sql = "UPDATE EQUIPAMENTO SET DESCRICAO = :DESCRICAO,QUANTIDADE = :QTD, ICON = :ICON WHERE CODIGO = :CODIGO";
               $tpmt = $con->prepare($sql);
               $tpmt->bindValue(":DESCRICAO",$descricao);
               $tpmt->bindValue(":QTD",$qtd);
               $tpmt->bindValue(":ICON",$urlImg);
               $tpmt->bindValue(":CODIGO",$codigo);
               $result = $tpmt->execute();
               if($result == 1){
                   return true;
               }else{
                   return false;
               }
           }
           public function updateProfessor($nome,$sobrenome,$ativo,$permissao,$cpf, $email){
               $con = $this->openConnection();
               $sql = "UPDATE USUARIO SET NOME = :NOME,SOBRENOME = :SOBRENOME,  ATIVO = :ATIVO, PERMISSAO = :PERMISSAO, EMAIL = :EMAIL WHERE CPF = :CPF";
               $tpmt = $con->prepare($sql);
               $tpmt->bindValue(":NOME",$nome);
               $tpmt->bindValue(":SOBRENOME",$sobrenome);
               $tpmt->bindValue(":ATIVO",$ativo);
               $tpmt->bindValue(":PERMISSAO",$permissao);
               $tpmt->bindValue(":CPF",$cpf);
               $tpmt->bindValue(":EMAIL", $email);
               $result = $tpmt->execute();
               if($result == 1){
                   return true;
               }else{
                   return false;
               }
               
           }
}
?>