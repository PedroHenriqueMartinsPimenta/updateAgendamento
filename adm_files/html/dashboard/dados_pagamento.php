<?php
	session_start();
	if (isset($_SESSION['CPF']) && $_SESSION['PERMISSAO'] == 1) {
		include_once('../../../php/conexao.php');
		include_once('php/pagamento/pagseguro.class.php');
		$cpf = $_SESSION['CPF'];
		$escola = $_SESSION['ESCOLA'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist (1)/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=300">
	<meta charset="utf-8">
	<link rel="icon" type="image" href="img/ceara.png">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: arial;
		}
		body{
			background:  rgba(90,200,132,0.8);
		}

		#bar{
			position: fixed;
			top: 0px;
			left: 0px;
			padding: 20px;
			background-color: rgba(90,200,132,1		);
			box-shadow: 1px 0px 10px 2px rgba(20,20,20,0.5); 
			z-index: 9999;

		}
		#bar span{
			font-weight: bold;
			color:rgba(250, 250, 250, 1);
			font-size: 20px;

		}
		#bar i{
			transition: 0.25s;
			font-size: 20px;
			color: rgba(250, 250, 250, 0.7);
			cursor: pointer;
		}
		#bar i:hover{
			color: rgba(250, 250, 250, 1);
		}
		nav{
			position: relative;
			top: 74px;
			background-color: rgba(90,200,132,1);
			height: 100%;
			box-shadow: 1px 1px 10px 2px rgba(20,20,20,0.5);
			float: left;
		}
		nav a{
			padding: 10px;
			margin-left:3px;
			display: flex;
			width: 100%;
			color:rgba(230, 230, 230, 1);
			transition: 0.25s;
			text-decoration: none;
		}
		nav a:hover{
			color:rgba(230, 230, 230, 0.8); 
			text-decoration: none;
		}
		main{
			position: relative;
			top: 74px;
			margin-left: 5px;
			margin-bottom: 20px;
			box-shadow: 1px 1px  10px 2px rgba(20,20,20,0.5);
			background-color: rgba(90,200,132,1);
		}
		#box{
			display: inline-block;
			padding: 10px;
			box-shadow: 1px 1px  10px 2px rgba(20,20,20,0.5);
			margin-left: 8px;
			margin-top: 8px;
			margin-bottom: 4px;
			text-align: center;
			color: rgba(230, 230, 230, 1);
			font-weight: bold;
			cursor: pointer;
			border-radius: 2px;
		}
		.title{
			font-size: 20px;
			font-weight: bold;
			color: rgba(230, 230, 230, 1);
			padding: 5px;
			margin-top: 20px;
		}
		.btn{
			margin-top: 5px;
			margin-bottom: 5px;
		}
		label{
			font-size: 18px;
			margin-top: 10px;
			text-align: left;
			font-weight: bolder;
		}
		#info{
			text-align: left;
			margin-left: 10px;
		}
		@media(max-width : 350px){
			nav{
				display: none;
			}
			#legendaMensalidade{
				text-align: left;
			}
		}
	</style>
	 
</head>	
<body>
	<div class="content-fluid">
		<div class="row">
			<header class="col-12" id="bar">
				<div class="col-12">
					<i class="glyphicon glyphicon-tasks" id="icon"></i>
					<span>&nbspDashboard</span>
				</div>
			</header>
		</div>

		<div class="row">
			<nav class="col-sm-2" id="nav">
				<a href="../../../adm.php">
					Inicio
				</a>
				<a href="dashboard.php#estatisticas">
					Estátisticas
				</a>
				<a href="dashboard.php#mesalidades">
					Mensalidade
				</a>
				<a href="suporte.php">
					Suporte
				</a>
				<a href="../dados_pessoais.php">
					Meus dados
				</a>
				<a href="../../../php/sair.php">
					Sair
				</a>
			</nav>

			<main class="col-sm-9">
				<?php
					$mesCodigo = $_GET['codigo'];
					$arrayMeses = array('Janeiro','Fervereiro','Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
					$ano = date('Y');
					$mes = date('m');
					$data = "{mes:$mesCodigo}";
					$pagseguro = new PagSeguro();
					$status = array('Aguardando pagamento', 'Em analise', 'Paga', 'Disponivel','Em disputa', 'Devolvida', 'Cancelada');
					$sql = "SELECT * FROM MENSALIDADE INNER JOIN USUARIO ON MENSALIDADE.USUARIO_CPF = USUARIO.CPF WHERE USUARIO.ESCOLA_CODIGO = $escola AND MONTH(MENSALIDADE.DIA_PAGO) = $mesCodigo AND YEAR(MENSALIDADE.DIA_PAGO) = $ano ORDER BY CODIGO DESC LIMIT 1";
							$query = mysqli_query($con, $sql);
							$row = mysqli_fetch_array($query);
							$a = substr($row['DIA_PAGO'], 0,4);
							$m = substr($row['DIA_PAGO'], 5,2);
							$d = substr($row['DIA_PAGO'], 8,2);
							$diaPago = $d."/".$m."/".$a;
							if ($mesCodigo >= intval($mes)) {
								if ($row == null) {
									//Aguardando pagamento
									?>
										<div id="box" class="col-sm-12">
											<h1 class="title">Aguardando pagamento até o fim de <?php echo $arrayMeses[$mesCodigo-1]?></h1>
										</div>
										<div class="title col-sm-12">Pague agora</div>
											<div class="col-sm-12" id="box">									

											<?php
												echo $pagseguro->createLightbox($data);
											?>
										</div>
									<?php
								}else{
									//Pago 
									if ($row['STATUS'] == 3) {
										
									?>
										<div id="box" class="col-sm-12">
											<h1 class="title"><i class="glyphicon glyphicon-ok"></i> Pagamento efetuado</h1>
										</div>
										<div class="title col-sm-12">
											Dados do pagamento
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">CPF</label>
											<div class="col-sm-12" id="info"><?php echo $row['CPF']?></div>
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">Nome</label>
											<div class="col-sm-12" id="info"><?php echo $row['NOME']. " ". $row['SOBRENOME']?></div>
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">Email</label>
											<div class="col-sm-12" id="info"><?php echo $row['EMAIL']?></div>
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">Validade</label>
											<div class="col-sm-12" id="info"><?php echo $diaPago?> até <?php echo substr($diaPago, 0, 2)."/" . (intval(substr($diaPago, 3,2)) + 1) . "/" . substr($diaPago, 6, 4)?></div>
										</div>
										<div class="col-sm-12" id="box" style="margin-bottom: 20px">
											<label class="col-sm-12">Empresa</label>
											<div class="col-sm-12" id="info">
												<?php
													$codigoEscola = $row['ESCOLA_CODIGO'];
													$sql = "SELECT * FROM ESCOLA WHERE CODIGO = $codigoEscola";
													$query = mysqli_query($con, $sql);
													$rowEscola = mysqli_fetch_array($query);
													echo $rowEscola['NOME']
												?>
											</div>
										</div>
									<?php
									}else if($row['STATUS'] == 6 || $row['STATUS'] == 7){
										?>

										<div id="box" class="col-sm-12">
											<h1 class="title"><i class="glyphicon glyphicon-ok"></i> <?php echo $status[$row['STATUS'] - 1]?></h1>
										</div>

										<div class="title col-sm-12">Pague agora</div>
										<div class="col-sm-12" id="box">
											<?php
												echo $pagseguro->createLightbox($data);
											?>
										</div>
										<?php

									}else{
										?>
										<div id="box" class="col-sm-12">
											<h1 class="title"><i class="glyphicon glyphicon-ok"></i> <?php echo $status[$row['STATUS'] - 1]?></h1>
										</div>
										<div class="title col-sm-12">
											Dados do pagamento
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">CPF</label>
											<div class="col-sm-12" id="info"><?php echo $row['CPF']?></div>
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">Nome</label>
											<div class="col-sm-12" id="info"><?php echo $row['NOME']. " ". $row['SOBRENOME']?></div>
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">Email</label>
											<div class="col-sm-12" id="info"><?php echo $row['EMAIL']?></div>
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">Validade</label>
											<div class="col-sm-12" id="info"><?php echo $diaPago?> até <?php echo substr($diaPago, 0, 2)."/" . (intval(substr($diaPago, 3,2)) + 1) . "/" . substr($diaPago, 6, 4)?></div>
										</div>
										<div class="col-sm-12" id="box" style="margin-bottom: 20px">
											<label class="col-sm-12">Empresa</label>
											<div class="col-sm-12" id="info">
												<?php
													$codigoEscola = $row['ESCOLA_CODIGO'];
													$sql = "SELECT * FROM ESCOLA WHERE CODIGO = $codigoEscola";
													$query = mysqli_query($con, $sql);
													$rowEscola = mysqli_fetch_array($query);
													echo $rowEscola['NOME']
												?>
											</div>
										</div>

										<div class="title col-sm-12">Pague agora</div>
										<div class="col-sm-12" id="box">
											<?php
												echo $pagseguro->createLightbox($data);
											?>
										</div>
									<?php
									}
								}
							}else{
								if ($row == null) {
									//Não foi pago
									?>
										<div id="box" class="col-sm-12">
											<h1 class="title"><i class="glyphicon glyphicon-alert"></i> Pagamento não efetuado, prazo era até o fim de <?php echo $arrayMeses[$mesCodigo-1]?></h1>
										</div>
									<?php
								}else{
									//Pago 
									if ($row['STATUS'] == 3) {
										
									?>
										<div id="box" class="col-sm-12">
											<h1 class="title"><i class="glyphicon glyphicon-ok"></i> Pagamento efetuado</h1>
										</div>
										<div class="title col-sm-12">
											Dados do pagamento
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">CPF</label>
											<div class="col-sm-12" id="info"><?php echo $row['CPF']?></div>
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">Nome</label>
											<div class="col-sm-12" id="info"><?php echo $row['NOME']. " ". $row['SOBRENOME']?></div>
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">Email</label>
											<div class="col-sm-12" id="info"><?php echo $row['EMAIL']?></div>
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">Validade</label>
											<div class="col-sm-12" id="info"><?php echo $diaPago?> até <?php echo substr($diaPago, 0, 2)."/" . (intval(substr($diaPago, 3,2)) + 1) . "/" . substr($diaPago, 6, 4)?></div>
										</div>
										<div class="col-sm-12" id="box" style="margin-bottom: 20px">
											<label class="col-sm-12">Empresa</label>
											<div class="col-sm-12" id="info">
												<?php
													$codigoEscola = $row['ESCOLA_CODIGO'];
													$sql = "SELECT * FROM ESCOLA WHERE CODIGO = $codigoEscola";
													$query = mysqli_query($con, $sql);
													$rowEscola = mysqli_fetch_array($query);
													echo $rowEscola['NOME']
												?>
											</div>
										</div>
									<?php
									}else if($row['STATUS'] == 6 || $row['STATUS'] == 7){
										?>

										<div id="box" class="col-sm-12">
											<h1 class="title"><i class="glyphicon glyphicon-ok"></i> <?php echo $status[$row['STATUS'] - 1]?></h1>
										</div>

										<div class="title col-sm-12">Pague agora</div>
										<div class="col-sm-12" id="box">
											<?php
												echo $pagseguro->createLightbox($data);
											?>
										</div>
										<?php

									}else{
										?>
										<div id="box" class="col-sm-12">
											<h1 class="title"><i class="glyphicon glyphicon-ok"></i> <?php echo $status[$row['STATUS'] - 1]?></h1>
										</div>
										<div class="title col-sm-12">
											Dados do pagamento
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">CPF</label>
											<div class="col-sm-12" id="info"><?php echo $row['CPF']?></div>
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">Nome</label>
											<div class="col-sm-12" id="info"><?php echo $row['NOME']. " ". $row['SOBRENOME']?></div>
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">Email</label>
											<div class="col-sm-12" id="info"><?php echo $row['EMAIL']?></div>
										</div>
										<div class="col-sm-12" id="box">
											<label class="col-sm-12">Validade</label>
											<div class="col-sm-12" id="info"><?php echo $diaPago?> até <?php echo substr($diaPago, 0, 2)."/" . (intval(substr($diaPago, 3,2)) + 1) . "/" . substr($diaPago, 6, 4)?></div>
										</div>
										<div class="col-sm-12" id="box" style="margin-bottom: 20px">
											<label class="col-sm-12">Empresa</label>
											<div class="col-sm-12" id="info">
												<?php
													$codigoEscola = $row['ESCOLA_CODIGO'];
													$sql = "SELECT * FROM ESCOLA WHERE CODIGO = $codigoEscola";
													$query = mysqli_query($con, $sql);
													$rowEscola = mysqli_fetch_array($query);
													echo $rowEscola['NOME']
												?>
											</div>
										</div>

										<div class="title col-sm-12">Pague agora</div>
										<div class="col-sm-12" id="box">
											<?php
												echo $pagseguro->createLightbox($data);
											?>
										</div>
									<?php
									}
								}
							}
				?>
			</main>
		</div>
	</div>
<script src="jquery-ui-1.12.1/jquery-3.3.1.js"></script>
<script type="text/javascript">

	$(function(){
		var widthDisplay = window.innerWidth;
		var nav = 0;
			$('#icon').click(function(){
				widthDisplay = window.innerWidth;
				if (nav == 0) {
					$('nav').fadeIn('slow');
					nav = 1;
				}else if (nav == 1 && widthDisplay < 400) {
					$('nav').fadeOut('slow');
					nav = 0;
				}
			});
	});
</script>
</body>
</html>
<?php
	}else{
		header('location: ../../../');
	}
?>