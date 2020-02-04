<?php 
		session_start();
		$codigo = $_GET['codigo'];
		$codigo_original = $_SESSION['codigo_update_senha'];
		if ($codigo == $codigo_original) {
			$cpf = $_GET['CPF'];
?>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
	@media only screen and (min-width: 600px) {
		body{
			background-color: rgba(10,10,10,0.6);
			font-family: arial;
		}
		.corpo{
			width: 500px;
			height: 500px;
			background-color: rgba(10,10,10,0.7);
			transition: 0.25s;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			border-radius: 10px;
			color:rgba(240, 240, 240, 0.8);
		}
		.corpo h1{
			text-align: center;
			margin-top: 50px;
			font-size: 40px;
		}
		.corpo form{
			width: 100%;
			text-align: center
		}
		.corpo input[type=text], .corpo input[type=password]{
			width: 250px;
			padding: 15px;
			text-align: center;
			border-radius: 30px;
			border:2px solid rgba(10,200,30,0.8);
			background: none;
			transition: 0.25s;
			color:rgba(240, 240, 240, 0.8);
			margin-top:20px;
			font-size: 15px;
			outline: none;
		}
		.corpo input[type=text]:focus, .corpo input[type=password]:focus{
			border:2px solid rgba(50,50,240,0.8);
			width: 350px
		}
		.corpo input[type=button]{
			width: 350px;
			padding: 15px;
			text-align: center;
			border-radius: 30px;
			border:2px solid rgba(50,50,240,0.8);
			background: none;
			transition: 0.35s;
			color:rgba(240, 240, 240, 0.8);
			margin-top:20px;
			cursor: pointer;
			font-size: 15px;
			outline: none;
		}
		.corpo input[type=button]:hover{
			border:2px solid rgba(10,200,30,0.8);
			width: 380px;
		}
		.corpo form p{
			text-align: right;
			margin-right: 20px;
			font-size: 13px;
			margin-top: 20px;
		}
		.corpo a{
			text-decoration: none;
			color: rgba(10,200,30,0.8);
		}
	}
		@media only screen and ( max-width: 600px) {
  				body{
				background-color: rgba(10,10,10,0.6);
				font-family: arial;
			}
		.corpo{
			width:99%;
			height: 99%;
			background-color: rgba(10,10,10,0.7);
			transition: 0.25s;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			border-radius: 10px;
			color:rgba(240, 240, 240, 0.8);
		}
		.corpo h1{
			text-align: center;
			margin-top: 50px;
			font-size: 30px;
		}
		.corpo form{
			width: 100%;
			text-align: center
		}
		.corpo input[type=password]{
			width: 85%;
			padding: 15px;
			text-align: center;
			border-radius: 30px;
			border:2px solid rgba(10,200,30,0.8);
			background: none;
			transition: 0.25s;
			color:rgba(240, 240, 240, 0.8);
			margin-top:20px;
			font-size: 15px;
			outline: none;
		}
		.corpo input[type=text]:focus, .corpo input[type=password]:focus{
			border:2px solid rgba(50,50,240,0.8);
		}
		.corpo input[type=button]{
			width: 99%;
			padding: 15px;
			text-align: center;
			border-radius: 30px;
			border:2px solid rgba(50,50,240,0.8);
			background: none;
			transition: 0.35s;
			color:rgba(240, 240, 240, 0.8);
			margin-top:20px;
			cursor: pointer;
			font-size: 15px;
			outline: none;
		}
		.corpo input[type=button]:hover{
			border:2px solid rgba(10,200,30,0.8);
		}
		.corpo form p{
			text-align: right;
			margin-right: 20px;
			font-size: 13px;
			margin-top: 20px;
		}
		.corpo a{
			text-decoration: none;
			color: rgba(10,200,30,0.8);
		}
  		}
	</style>
	<meta name="viewport" content="width=300">
	<script src="../jquery-ui-1.12.1/jquery-3.3.1.js"></script>
</head>
<body>
		<div class="corpo">
			<h1>Alteração de senha</h1>
			<form>
				<input type="password" name="newSenha" id="senha" placeholder="Nova senha">
				<input type="password" name="confSenha" id="confirm" placeholder="Confime a senha">
				<input type="button" onclick="alterar()" value="Alterar">
			</form>
		</div>
		<script type="text/javascript">
			function alterar(){
				var senha = $('#senha').val();
				var confSenha = $('#confirm').val();
				var cpf = <?php echo json_encode(base64_decode($cpf)); ?>;
				var senhaAntiga = <?php echo json_encode($senha_antiga); ?>;
				var data = {newSenha: senha, senhaAntiga: senhaAntiga, cpf: cpf, confSenha: confSenha};

				$.post(
						"updateSenha.php",
						data,
						function(result){
							alert(result);
							window.location.href= '../';
						},
						'JSON'
					);
			}
		</script>
</body>
</html>
<?php
}else{
	?>
		<h1 align="center">Você não pode ter acesso a esta função</h1>
	<?php
}
?>