<!DOCTYPE html>
<html>
<head>
	<?php 
		include_once('conexao.php');
		$cpf = $_GET['cpf'];
	?>
	<title>Certificado</title>
	<style type="text/css">
		body{
			color: white;
			font-family: arial;
		}
		.corpo{
			background: linear-gradient(120deg, rgba(20,230, 90, 0.7), rgba(20,150, 90, 0.7));
			width: 99%;
			height: 630px;
			border:3px solid rgba(240,240,240,1);
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			border-radius: 20px;
			z-index: 990;
		}
		.img-1{
			width: 100px;
			position: absolute;
			left: 20px;
			top: 20px
		}
		.img-2{
			width: 100px;
			position: absolute;
			right: 20px;
			top: 20px
		}
		.corpo h1{
			text-align: center;
			font-size: 50px
		}
		.footer{
			width: 98%;
			height: 100px;
			position: absolute;
			top: 530px;
			left: 1%;
			border-top: 1px solid white;
			text-align: center;
		}
		.footer p {
			margin-top: 40px;
		}
		.main{
			margin-top: 100px;
			width: 60%;
			height: 50%;
			margin-left: 20%;
			color: white;
			font-size: 20px;
		}
		.modal{
			position: absolute;
			top: 50%;
			left: 50%;
			width: 500px;
			background-color: white;
			color: black;
			padding: 30px;
			margin:0 auto;
			z-index: 999;
			border-radius: 5px;
			transition: 0.25s;
			transform: translate(-50%,-50%);
		}
		.title{
			width: 100%;
			margin:0 auto;
			border-bottom: 1px solid rgba(0,0,0,0.2);
			padding: 5px;
			font-size: 18px;
		}
		.title b{
			margin-left: 10px;
		}
		.mensagem{
			margin-top: 20px;
			color: rgba(0,0,0,0.5);
		}
		.buttons{
			position: relative;
			left: 63%;
		}
		.imprimir {
			margin-top: 20px;
			width: 100px;
			height: 30px;
			border:2px solid rgba(20,170, 20, 0.8);
			border-radius: 2px;
			background-color: rgba(20,170, 20, 1);
			cursor: pointer;
			font-size: 15px;
			color: white;
			transition: 0.25s
		}
		.imprimir:hover{
			border:2px solid rgba(20,150, 20, 0.8);	
			background-color: rgba(20,150, 20, 1);		
		}

		.cancelar {
			margin-top: 20px;
			width: 100px;
			height: 30px;
			border:2px solid rgba(170,20, 20, 0.8);
			border-radius: 2px;
			background-color: rgba(170,20, 20, 1);
			cursor: pointer;
			font-size: 15px;
			color: white;
			transition: 0.25s
		}
		.cancelar:hover{
			border:2px solid rgba(150,20, 20, 0.8);	
			background-color: rgba(150,20, 20, 1);		
		}
		.assinatura{
			width: 400px;
			color: white;
			border-top: 1px white solid;
			text-align: center;
			font-size: 15px;
			padding-top: 5px;
			position: absolute;
			right: 200px;
			bottom: 30%;
		}
		.assinatura-agendamento {
			width: 400px;
			position: absolute;
			left: 200px;
			bottom: 30%;
			text-align: center
		}
		.assinatura-agendamento p{
			font-size: 14px;
			font-family: cursive;
			margin-bottom: -1px;
			color: rgba(10,10,140,0.8);
		}
		.assinatura-agendamento div{
				font-size: 15px;
				border-top: 1px white solid;
				padding-top:5px;
		}
		@media print{
			.corpo{
				transform: rotate(90deg);
				top: 15%;
				left: -200px;
				width: 1300px;
				height: 900px;
				background: linear-gradient(120deg, rgba(20,230, 90, 0.7), rgba(20,150, 90, 0.7));
				-webkit-print-color-adjust: exact;
			}
			.footer{
				top: 85%;
			}
			body{
				background-image: none;
			}
			.modal{
				display: none
			}
			img[alt='www.000webhost.com']{
				display:none;
			}
		}
	</style>
</head>
<body>
	<div class="modal" id="modal">
		<div class="title">
			<b>Atenção</b>
		</div>
		<div class="mensagem">
			Deseja imprimir o certificado?<br>
			(Certificado simplesmente simbolico)
		</div>
		<div class="buttons">
			<button class="imprimir" onclick="imprimir()"><b>Imprimir</b></button>
			<button class="cancelar" onclick="cancelar()"><b>Cancelar</b></button>
		</div>
	</div>
		<div class="corpo">
			<img src="../img/ceara.png" class="img-1">
			<h1>Certificado</h1>
			<img src="../img/ceara.png" class="img-2">
			<div class="main" align="justify">
				<?php
				$ano = date('Y');
					$sql = "SELECT USUARIO.NOME, USUARIO.SOBRENOME, COUNT(RESERVA.CODIGO) AS TOTAL FROM RESERVA INNER JOIN USUARIO ON RESERVA.USUARIO_CPF = USUARIO.CPF WHERE USUARIO.CPF = '$cpf' AND YEAR(DATA_ULTILIZAR) = $ano";
					$query = mysqli_query($con, $sql);
					while ($row = mysqli_fetch_array($query)) {
				?>
					Certificamos que <b><?php echo $row['NOME'] . " " . $row['SOBRENOME']?></b> utilizou o agendamento web "sistema de gerenciamento dos agendamentos na web" no ano de <b><?php echo $ano?></b>, sistema
					promovido pelo(a) gerenciador(a) de agendamentos, obtendo um total
					de <b><?php echo $row['TOTAL']?></b> agendamentos efetuados durante este ano. 
				<?php
					}
				?>
				<div class="assinatura-agendamento">
					<p>Agendamento web da EEEP Padre João Bosco de Lima</p>
					<div>Assinatura do realizador</div>
				</div>
				<div class="assinatura">Assinatura</div>
			</div>
			<div class="footer"><p>Certificado criado pelo sistema de agendamento web</p></div>
		</div>

		<script type="text/javascript">
			function imprimir(){
				document.getElementById('modal').style.display = 'none';
				window.print();
			}
			function cancelar(){
				document.getElementById('modal').style.display = 'none';
			}
			//window.print();
		</script>
</body>
</html>