<?php 
	include_once('../../../php/conexao.php');
    session_start();
    if(isset($_SESSION['CPF']) && $_SESSION['PERMISSAO'] == 1){
    $cpf = $_SESSION['CPF'];
    $escola = $_SESSION['ESCOLA'];
    $permissao = $_SESSION['PERMISSAO'];
	$dia = $_SESSION['dia'];
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../../../jquery-ui-1.12.1/jquery-3.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="../../../bootstrap-4.1.3-dist (1)/css/bootstrap.min.css">
		<title>Agendamentos de <?php echo date('d/m/Y')?></title>
	<style type="text/css">
		p{
			margin-top: 10px;
			margin-left: 10px;
		}
		td{
			text-align: center;
			border: 1px solid black
		}
		table{
			border: 0px solid black;

		}
		@media print{
			p{
				display: none
			}
		}
	</style>
</head>
<body>
	<p><a href="#" id="pdf" class="btn btn-info">Baixar (.pdf)</a> 
	<a href="#" id="exel"  class="btn btn-info">Baixar (.xlsx)</a>
	<a href="#" class="btn btn-info" onclick="adapter()">Melhorar visão da tabela</a>
	</p>
	<div id="table">
	<table border="1px" align="center">
		<?php 
		$total = 0;
		$maior = 0;
			$sql = "SELECT COUNT(CODIGO) AS QTD FROM EQUIPAMENTO WHERE ESCOLA_CODIGO = $escola";
			$query = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($query)) {
			$total = $row['QTD'];
		?>
		<thead>
			<tr>
				<td colspan="<?php echo $row['QTD']+3?>" align="center"><b>Agendamentos</b></td>
			</tr>
			<tr>
				<td colspan="<?php echo $row['QTD']+3?>" align="center"><b><?php echo date("d/m/Y", strtotime($dia))?></b></td>
			</tr>
			<tr>
					<td>Aula</td>
					<td>Nome Completo</td>
					<td>Turma</td>
					<?php 
			$sql = "SELECT * FROM EQUIPAMENTO WHERE ESCOLA_CODIGO = $escola";
			$query = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($query)) {
				?>
					<td><?php echo $row['DESCRICAO']?></td>
				<?php
			}
			?>
				</tr>
		</thead>
		<?php 
			}
			$sql = "SELECT SUM(QUANTIDADE) AS MAIOR FROM EQUIPAMENTO WHERE ESCOLA_CODIGO = $escola";
			$query = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($query);
			$maior = $row['MAIOR'];
		?>
		<tbody>
			
				
			<?php 
			$y = 1;
			$AULA = "NULL";
	$sql = "SELECT RESERVA.CODIGO AS CODIGO,DATE_FORMAT(RESERVA.DATA_ULTILIZAR,'%d/%m/%Y') AS DATA, RESERVA.DATA AS EFETUOU, USUARIO.NOME AS NOME,USUARIO.SOBRENOME AS SOBRENOME, EQUIPAMENTO.DESCRICAO AS EQUIPAMENTO,EQUIPAMENTO.CODIGO AS EQUI, AULA.DESCRICAO AS AULA,CONCAT(AULA.DESCRICAO,'-', RESERVA.DATA) AS ORDEM,AULA.CODIGO AS AULA_CODIGO, TURMA.DESCRICAO AS TURMA FROM RESERVA
INNER JOIN EQUIPAMENTO ON EQUIPAMENTO.CODIGO = RESERVA.EQUIPAMENTO_CODIGO 
INNER JOIN USUARIO ON RESERVA.USUARIO_CPF = USUARIO.CPF
INNER JOIN AULA ON RESERVA.AULA_CODIGO = AULA.CODIGO
INNER JOIN TURMA ON RESERVA.TURMA_CODIGO = TURMA.CODIGO WHERE USUARIO.ESCOLA_CODIGO = $escola AND DATA_ULTILIZAR = '$dia' ORDER BY ORDEM ASC";
				$query = mysqli_query($con, $sql);
				echo mysqli_error($con);
				while ($row = mysqli_fetch_array($query)) {

				if($row['AULA'] != $AULA){
			?>

			<tr >
				<td rowspan="<?php echo $maior + 1?>"class="aula"><?php echo $row['AULA']?></td>
				
			</tr>

			<?php 
				for ($i=0; $i < $maior; $i++) { 
				?>
				<tr id="line<?php echo $i?>aula<?php echo $row['AULA_CODIGO']?>" class="line<?php echo $row['AULA_CODIGO']?>">
					<td id="nome<?php echo $i?>"></td>
					<td id="turma<?php echo $i?>"></td>
					<?php 
					$sql = "SELECT * FROM EQUIPAMENTO WHERE ESCOLA_CODIGO = $escola";
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
			$AULA = $row['AULA_CODIGO'];
			}
			?>
			<?php }?>
			
		</tbody>
	</table>
</div>
	<?php
	$sql = "SELECT * FROM AULA WHERE ESCOLA_CODIGO = $escola";
	$query = mysqli_query($con, $sql);
	$arrayAulas = array();
	while ($row = mysqli_fetch_array($query)) {
		$arrayAulas[$row['CODIGO']] = $row['DESCRICAO'];
	}
	foreach ($arrayAulas as $i => $valor) {
	 	$line = 0;
	
		$sql = "SELECT DISTINCT USUARIO_CPF AS CPF FROM RESERVA INNER JOIN USUARIO ON  USUARIO.CPF = RESERVA.USUARIO_CPF WHERE DATA_ULTILIZAR = '$dia' AND AULA_CODIGO = $i AND ESCOLA_CODIGO = $escola ORDER BY DATA ASC";
		$query = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($query)) {
			$cpf = $row['CPF'];
			$sql2 = "SELECT * FROM RESERVA INNER JOIN USUARIO ON RESERVA.USUARIO_CPF = USUARIO.CPF INNER JOIN TURMA ON RESERVA.TURMA_CODIGO = TURMA.CODIGO WHERE DATA_ULTILIZAR = '$dia' AND USUARIO_CPF = '$cpf' AND AULA_CODIGO = $i AND USUARIO.ESCOLA_CODIGO = $escola";
			$query2 = mysqli_query($con, $sql2);
			while ($reserva = mysqli_fetch_array($query2)) {
				$momento = $reserva['DATA'];
				$codigo_equipamento = $reserva['EQUIPAMENTO_CODIGO'];
				$a = $reserva['AULA_CODIGO'];
				$sql = "SELECT COUNT(CODIGO) AS QTD FROM RESERVA WHERE DATA < '$momento' AND AULA_CODIGO = $a AND DATA_ULTILIZAR = '$dia' AND EQUIPAMENTO_CODIGO = $codigo_equipamento";
				$queryCount = mysqli_query($con, $sql);
				$rowCount = mysqli_fetch_array($queryCount);
				$qtdCount = $rowCount['QTD']+1;
				
				?>
				<script type="text/javascript">
					$(function(){
					$('#line<?php echo $line?>aula<?php echo $i?> #nome<?php echo $line?>').html("<?php echo $reserva['NOME']?>");
					$('#line<?php echo $line?>aula<?php echo $i?> #turma<?php echo $line?>').html("<?php echo $reserva['DESCRICAO']?>");
					$('#line<?php echo $line?>aula<?php echo $i?> #equi<?php echo $reserva['EQUIPAMENTO_CODIGO']?>').html("<b>X</b>  <?php echo $qtdCount ?>º");
					});
				</script>
				<?php
			}

				$line++;
		}
	}
	?>
	<script type="text/javascript">
		var total = <?php echo json_decode($maior)?>;
		$("#pdf").click(function(){
			window.print();
		});
		$("#exel").click(function(){
			$('tr').removeAttr('style');
			$('.aula').attr('rowspan', total + 1);
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
    adapter();
		});
	</script>
	<script type="text/javascript">
		var qtd = 0;
		var test = true;
		

			function adapter(){
				var aula = document.getElementsByClassName('aula');
		for(var a = 1; a <= aula.length; a++){
		var td = document.getElementsByClassName('line'+a);
			for (var i = 0; i < td.length; i++) {
				if (!td[i].innerHTML.match("<b>X</b>")) {
					td[i].style.display = 'none';if (test) {
						qtd = i;
						test = false;
					}
					
				}
			}
			test = true;
			console.log(qtd +":"+ a);
			console.log(aula[a-1]);
			$(aula[a-1]).attr('rowspan',qtd+1);
			qtd = 0;
		}
			}
	</script>
</body>
</html>
<?php 
}else{
	header("location:../../../");
}
?>