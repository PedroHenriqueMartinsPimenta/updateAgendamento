<?php 
	include_once('../../../php/conexao.php');
    session_start();
    if(isset($_SESSION['CPF']) && $_SESSION['PERMISSAO'] == 1){
    $cpf = $_SESSION['CPF'];
    $permissao = $_SESSION['PERMISSAO'];
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../../../jquery-ui-1.12.1/jquery-3.3.1.js"></script>
		<title>Agendamentos de <?php echo date('d/m/Y')?></title>
	<style type="text/css">
		td{
			text-align: center;
			border: 1px solid black
		}
		table{
			border: 0px solid black;

		}
		@media print{
			a{
				display: none
			}
		}
	</style>
</head>
<body>
	<a href="#" id="pdf">Baixar (.pdf)</a> / 
	<a href="#" id="exel">Baixar (.xlsx)</a>
	<div id="table">
	<table border="1px" align="center">
		<?php 
		$total = 0;
		$maior = 0;
			$sql = "SELECT COUNT(CODIGO) AS QTD FROM EQUIPAMENTO";
			$query = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($query)) {
			$total = $row['QTD'];
		?>
		<thead>
			<tr>
				<td colspan="<?php echo $row['QTD']+3?>" align="center"><b>Agendamentos</b></td>
			</tr>
			<tr>
				<td colspan="<?php echo $row['QTD']+3?>" align="center"><b><?php echo date('d/m/Y')?></b></td>
			</tr>
		</thead>
		<?php 
			}
			$sql = "SELECT MAX(QUANTIDADE) AS MAIOR FROM EQUIPAMENTO";
			$query = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($query);
			$maior = $row['MAIOR'];
		?>
		<tbody>
			
				<tr>
					<td>Aula</td>
					<td>Nome Completo</td>
					<td>Turma</td>
					<?php 
			$sql = "SELECT * FROM EQUIPAMENTO";
			$query = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($query)) {
				?>
					<td><?php echo $row['DESCRICAO']?></td>
				<?php
			}
			?>
				</tr>
			<?php 
			$y = 1;
			$AULA = "NULL";
			$dia = date('Y-m-d');
	$sql = "SELECT RESERVA.CODIGO AS CODIGO,DATE_FORMAT(RESERVA.DATA_ULTILIZAR,'%d/%m/%Y') AS DATA, RESERVA.DATA AS EFETUOU, USUARIO.NOME AS NOME,USUARIO.SOBRENOME AS SOBRENOME, EQUIPAMENTO.DESCRICAO AS EQUIPAMENTO,EQUIPAMENTO.CODIGO AS EQUI, AULA.DESCRICAO AS AULA,CONCAT(AULA.DESCRICAO,'-', RESERVA.DATA) AS ORDEM, TURMA.DESCRICAO AS TURMA FROM RESERVA
INNER JOIN EQUIPAMENTO ON EQUIPAMENTO.CODIGO = RESERVA.EQUIPAMENTO_CODIGO 
INNER JOIN USUARIO ON RESERVA.USUARIO_CPF = USUARIO.CPF
INNER JOIN AULA ON RESERVA.AULA_CODIGO = AULA.CODIGO
INNER JOIN TURMA ON RESERVA.TURMA_CODIGO = TURMA.CODIGO WHERE DATA_ULTILIZAR = '$dia' ORDER BY ORDEM ASC";
				$query = mysqli_query($con, $sql);
				while ($row = mysqli_fetch_array($query)) {
				if($row['AULA'] != $AULA){
			?>

			<tr>
				<td rowspan="<?php echo $maior + 1?>"><?php echo $row['AULA']?></td>
				
			</tr>

			<?php 
				for ($i=0; $i < $maior; $i++) { 
				?>
				<tr id="line<?php echo $i?>aula<?php echo substr($row['AULA'], 0,1)?>">
					<td id="nome<?php echo $i?>"></td>
					<td id="turma<?php echo $i?>"></td>
					<?php 
					$sql = "SELECT * FROM EQUIPAMENTO";
					$queryQ = mysqli_query($con, $sql);
					while ($rowQ = mysqli_fetch_array($queryQ)) {
					
							?>
							<td id="equi<?php echo $rowQ['CODIGO']?>"></td>
							<?php
						}
					?>
				</tr>
			<?php
				}
			$AULA = $row['AULA'];
			}
			?>
			<?php }?>
			
		</tbody>
	</table>
</div>
	<?php
	for ($i=1; $i <= 9; $i++) { 
		$line = 0;
	
		$sql = "SELECT DISTINCT USUARIO_CPF AS CPF FROM RESERVA WHERE DATA_ULTILIZAR = '$dia' AND AULA_CODIGO = $i ORDER BY DATA ASC";
		$query = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($query)) {
			$cpf = $row['CPF'];
			$sql2 = "SELECT * FROM RESERVA INNER JOIN USUARIO ON RESERVA.USUARIO_CPF = USUARIO.CPF INNER JOIN TURMA ON RESERVA.TURMA_CODIGO = TURMA.CODIGO WHERE DATA_ULTILIZAR = '$dia' AND USUARIO_CPF = '$cpf' AND AULA_CODIGO = $i";
			$query2 = mysqli_query($con, $sql2);
			while ($reserva = mysqli_fetch_array($query2)) {
				?>
				<script type="text/javascript">
					$(function(){
					$('#line<?php echo $line?>aula<?php echo $i?> #nome<?php echo $line?>').html("<?php echo $reserva['NOME']?>");
					$('#line<?php echo $line?>aula<?php echo $i?> #turma<?php echo $line?>').html("<?php echo $reserva['DESCRICAO']?>");
					$('#line<?php echo $line?>aula<?php echo $i?> #equi<?php echo $reserva['EQUIPAMENTO_CODIGO']?>').html("<b>X</b>");
					});
				</script>
				<?php
			}

				$line++;
		}
	}
	?>
	<script type="text/javascript">
		$("#pdf").click(function(){
			window.print();
		});
		$("#exel").click(function(){
			var tabela = $("#table").html();
			var htmlBase64 = btoa(tabela);
			  var link = "data:application/vnd.ms-excel;base64," + htmlBase64;
 			 var hyperlink = document.createElement("a");
    hyperlink.download = "Agendamentos de <?php echo date('d/m/Y')?>";
    hyperlink.href = link;
    hyperlink.style.display = 'none';
 
    document.body.appendChild(hyperlink);
    hyperlink.click();
    document.body.removeChild(hyperlink);
    
		});
	</script>
</body>
</html>
<?php 
}else{
	header("location:../../../");
}
?>