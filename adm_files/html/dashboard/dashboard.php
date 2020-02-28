<?php
	session_start();
	if (isset($_SESSION['CPF']) && $_SESSION['PERMISSAO'] == 1) {
		include_once('../../../php/conexao.php');
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
		@media(max-width : 350px){
			nav{
				display: none;
			}
			#legendaMensalidade{
				text-align: left;
			}
		}
	</style>
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChartRosca);
      function drawChartRosca() {
       var data = google.visualization.arrayToDataTable([
        	["Equipamento","Quantidade"],
          <?php 
          $sql = "SELECT COUNT(RESERVA.CODIGO) AS RESULT, EQUIPAMENTO.DESCRICAO,RESERVA.EQUIPAMENTO_CODIGO FROM RESERVA INNER JOIN EQUIPAMENTO ON EQUIPAMENTO.CODIGO = RESERVA.EQUIPAMENTO_CODIGO WHERE EQUIPAMENTO.ESCOLA_CODIGO = $escola GROUP BY EQUIPAMENTO_CODIGO ORDER BY RESULT DESC";
          $query = mysqli_query($con, $sql);
          $i = 0;
          while ($row = mysqli_fetch_array($query)) {
            $i++;
            if($i == mysqli_num_rows($query)){
           ?>
              ['<?php echo $row['DESCRICAO']?>', <?php echo $row['RESULT']?>]

           <?php
         }else{
          ?>
            ['<?php echo $row['DESCRICAO']?>', <?php echo $row['RESULT']?>],
          <?php
         }
          }
        ?>
        ]);

        var options = {
          title: 'Equipamentos mais utilizados',
          pieHole: 0.4,
          backgroundColor:'transparent',
          color: 'rgba(230, 230, 230, 1);',
        };

        var chart = new google.visualization.PieChart(document.getElementById('grafico1'));
        chart.draw(data, options);
        var data = google.visualization.arrayToDataTable([
        	["Equipamento","Quantidade"],
          <?php 
          $mes = date('m');
          $ano = date('Y');
          $sql = "SELECT COUNT(RESERVA.CODIGO) AS RESULT, EQUIPAMENTO.DESCRICAO,RESERVA.EQUIPAMENTO_CODIGO FROM RESERVA INNER JOIN EQUIPAMENTO ON EQUIPAMENTO.CODIGO = RESERVA.EQUIPAMENTO_CODIGO WHERE MONTH(DATA_ULTILIZAR) = $mes AND YEAR(DATA_ULTILIZAR) = $ano AND EQUIPAMENTO.ESCOLA_CODIGO = $escola GROUP BY EQUIPAMENTO_CODIGO ORDER BY RESULT DESC";
          $query = mysqli_query($con, $sql);
          $i = 0;
          while ($row = mysqli_fetch_array($query)) {
            $i++;
            if($i == mysqli_num_rows($query)){
           ?>
              ['<?php echo $row['DESCRICAO']?>', <?php echo $row['RESULT']?>]

           <?php
         }else{
          ?>
            ['<?php echo $row['DESCRICAO']?>', <?php echo $row['RESULT']?>],
          <?php
         }
          }
        ?>
        ]);

        var options = {
          title: 'Equipamentos mais utilizados neste mês',
          pieHole: 0.4,
          backgroundColor:'transparent',
          color: 'rgba(230, 230, 230, 1);',
        };
        var chart = new google.visualization.PieChart(document.getElementById('grafico2'));
        chart.draw(data, options);

         var data = google.visualization.arrayToDataTable([
        	["Usuario","Quantidade"],
         <?php 
          $sql = "SELECT COUNT(*) AS TOTAL, USUARIO.NOME,USUARIO.SOBRENOME, RESERVA.USUARIO_CPF FROM RESERVA INNER JOIN USUARIO ON RESERVA.USUARIO_CPF = USUARIO.CPF WHERE MONTH(DATA_ULTILIZAR) = $mes AND USUARIO.ESCOLA_CODIGO = $escola GROUP BY RESERVA.USUARIO_CPF ORDER BY TOTAL DESC LIMIT 3";
          $query = mysqli_query($con, $sql);
          $i = 0;
          while ($row = mysqli_fetch_array($query)) {
            $i++;
            if($i == mysqli_num_rows($query)){
           ?>
              ['<?php echo $row['NOME']. " ".$row['SOBRENOME']?>', <?php echo $row['TOTAL']?>]

           <?php
         }else{
          ?>
           ['<?php echo $row['NOME']. " ".$row['SOBRENOME']?>', <?php echo $row['TOTAL']?>],
          <?php
         }
          }
        ?>
        ]);

        var options = {
          title: '3 professores que mais agedaram neste mês',
          pieHole: 0.4,
          backgroundColor:'transparent',
          color: 'rgba(230, 230, 230, 1);',
        };
        var chart = new google.visualization.PieChart(document.getElementById('grafico3'));
        chart.draw(data, options);

		var data = google.visualization.arrayToDataTable([
        	["Usuario","Quantidade"],
         <?php
          $mes = date('m') + 1;
          if ($mes > 12) {
            $mes = "01";
          } 
          $sql = "SELECT COUNT(CODIGO) AS TOTAL, OPNIAO FROM PESQUISA INNER JOIN USUARIO ON USUARIO.CPF = PESQUISA.USUARIO_CPF WHERE MONTH(VALIDADE) = $mes  AND YEAR(VALIDADE) = $ano AND USUARIO.ESCOLA_CODIGO = $escola GROUP BY OPNIAO ORDER BY TOTAL DESC";
          $query = mysqli_query($con, $sql);
          $i = 0;
          while ($row = mysqli_fetch_array($query)) {
            $i++;
            if($i == mysqli_num_rows($query)){
              if($row['OPNIAO'] == 0){
           ?>
              ["Não satisfaz", <?php echo $row['TOTAL']?>]

           <?php
         }else if($row['OPNIAO'] == 1){
             ?>
              ["Satisfaz", <?php echo $row['TOTAL']?>]

           <?php
         }
         }else{
            if($row['OPNIAO'] == 0){
           ?>
              ["Não satisfaz", <?php echo $row['TOTAL']?>],

           <?php
         }else if($row['OPNIAO'] == 1){
             ?>
              ["Satisfaz", <?php echo $row['TOTAL']?>],

           <?php
         }
         }
          }
        ?>
        ]);

        var options = {
          title: 'Pesquisa de satisfação dos usúarios',
          pieHole: 0.4,
          backgroundColor:'transparent',
          color: 'rgba(230, 230, 230, 1);',
        };
        var chart = new google.visualization.PieChart(document.getElementById('grafico4'));
        chart.draw(data, options);
      }
    </script>
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
				<a href="#estatisticas">
					Estátisticas
				</a>
				<a href="#mesalidades">
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
				<div class="title col-sm-12" id="estatisticas">Estátisticas</div>
				<div id="box" class="col-sm-5">
					<div id="grafico1"></div>
				</div>
				<div id="box" class="col-sm-5">
					<div id="grafico2"></div>
				</div>
				<div id="box" class="col-sm-5">
					<div id="grafico3"></div>
				</div>
				<div id="box" class="col-sm-5">
					<div id="grafico4"></div>
				</div>
				<div class="title col-sm-12" id="mesalidades">Mensalidade - <?php echo $ano?></div>
				<div id="box" class="col-sm-12" style="margin-bottom: 20px;">
					<div class="col-sm-12" id="legendaMensalidade">
						<div class="col-sm-4">
							<div class="btn btn-danger"></div><span> Pagamento não efetuado</span>
						</div>
						<div class="col-sm-4">
							<div class="btn btn-warning"></div><span> Aguardando pagamento</span>
						</div>
						<div class="col-sm-4">
							<div class="btn btn-success"></div><span> Pagamento efetuado</span>
						</div>
					</div>
					<?php
						$arrayMeses = array('Janeiro','Fervereiro','Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
						$mes = date('m');
						foreach ($arrayMeses as $key => $value) {
							$mesCodigo = $key + 1;
							$sql = "SELECT * FROM MENSALIDADE INNER JOIN USUARIO ON MENSALIDADE.USUARIO_CPF = USUARIO.CPF WHERE USUARIO.ESCOLA_CODIGO = $escola AND MONTH(MENSALIDADE.DIA_PAGO) = $mesCodigo AND YEAR(MENSALIDADE.DIA_PAGO) = $ano AND MENSALIDADE.STATUS = 3 ORDER BY MENSALIDADE.CODIGO DESC LIMIT 1";
							$query = mysqli_query($con, $sql);
							$row = mysqli_fetch_array($query);
							if ($mesCodigo >= intval($mes)) {
								if ($row == null) {
									?>
										<a href="dados_pagamento.php?codigo=<?php echo $mesCodigo?>"><div class="btn btn-warning col-sm-12"><?php echo $value?></div></a>
									<?php
								}else{
									if($row['STATUS'] == 3){
										?>
											<a href="dados_pagamento.php?codigo=<?php echo $mesCodigo?>"><div class="btn btn-success col-sm-12"><?php echo $value?></div></a>
										<?php
									}else{
										?>
											<a href="dados_pagamento.php?codigo=<?php echo $mesCodigo?>"><div class="btn btn-warning col-sm-12"><?php echo $value?></div></a>
										<?php
									}
								}
							}else{
								if ($row == null) {
									?>
										<a href="dados_pagamento.php?codigo=<?php echo $mesCodigo?>"><div class="btn btn-danger col-sm-12"><?php echo $value?></div></a>
									<?php
								}else{
									if($row['STATUS'] == 3){
										?>
											<a href="dados_pagamento.php?codigo=<?php echo $mesCodigo?>"><div class="btn btn-success col-sm-12"><?php echo $value?></div></a>
										<?php
									}else{
										?>
											<a href="dados_pagamento.php?codigo=<?php echo $mesCodigo?>"><div class="btn btn-warning col-sm-12"><?php echo $value?></div></a>
										<?php
									}
								}
							}
						}

					?>
				</div>
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