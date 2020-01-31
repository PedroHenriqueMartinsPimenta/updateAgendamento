<?php 
		session_start();
		if(isset($_SESSION['CPF'])){
			if($_SESSION['PERMISSAO'] == 0){
				header("location:user.php");
				}else if($_SESSION['PERMISSAO'] == 1){
					header("location:adm.php");
				}
				
			}
		include_once('php/conexao.php');
		include_once('adm_files/html/init/enter/enter/enter/enter/insert_reservas_padroes.php');
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Agendamento de equipamentos</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Agendamento online, fazendo seus agendamentos de modo rápido e eficiente!">
	<meta name="keywords" content="EEEP, agendamento, online, Agendamento online EEEP, Ceará, EEEP Ceará, Agendamento EEEP">
	<meta name="google-site-verification" content="f6S_53lYIUWuWT4P8GcdtonsI_A6r_bTuK4YCQvpSTk" />
    	<link rel="stylesheet" type="text/css" href="css/jquery.mobile.css">
    	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist (1)/css/bootstrap.min.css">
    	<style type="text/css">
    		input[type=button]{
    			margin-top: 10px
    		}

            img[alt='www.000webhost.com']{
                display: none
            }
    	</style>
	
<link rel="icon" href="img/ceara.png">
</head>
<body>
    <div class="corpo">
		<div class="texto">
			<img src="img/userPadrao.png" class="icon" draggable="false">
		</div>
		
		<form method="post">
			<table>
				<tr>
					<td><label class="cpf">CPF</label></td>
					<td><input type="text" name="cpf" maxlength="14" id="cpf" autocomplete="off" onkeydown="javascript: fMasc( this, mCPF );" class="input"></td>
				</tr>
				<tr>
					<td><label>Senha</label></td>
					<td><input type="password" name="senha" class="input" id="senha" minlength="6" maxlength="16"></td>
				</tr>
				<input type="button" class="entrar button" value="Entrar">
		</table>
		</form>
		<div class="col-10" style="position: relative; top: 50%; margin: 0 auto">
				<a href="recuperar.html">Esqueci minha senha</a>
			</div>
			<div class="alert alert-danger col-10" style="position: relative; top: 50%; display: none; margin: 0 auto">
				<strong>Atenção</strong><br> aguarde a autenticação <img src="img/loader.gif" width="25px">
			</div>
	</div>
	<style type="text/css">
		.add_escola{
			position: fixed;
			right: 10px;
			bottom: 10px;
			width: 50px;
			height: 50px;
			border-radius: 25px;
			background-image: url(img/add.png);
			background-repeat: no-repeat;
			background-size: 100%;
			background-color: white;
			transition: 0.25s;
		}
		.add_escola:hover{
			transform: rotate(90deg);
			background-color: rgba(20,200,20,0.5);
		}
	</style>
	<a href="add_escola.html" class="add_escola" title="Cadastrar-se">
		
	</a>
	<script type="text/javascript" src="jquery-ui-1.12.1/jquery-3.3.1.js"></script>
	<script type="text/javascript"> $(document).ready(function(){
	$('input[type=text], input[type=password]').keypress(function(e){ if
	(e.keyCode == 13) {$('.alert').html('<strong>Atenção</strong><br> aguarde a autenticação <img src="img/loader.gif" width="25px">');  entrar(); } }); }); 
	$('input[type=button]').click(function(){
$('.alert').html('<strong>Atenção</strong><br> aguarde a autenticação <img src="img/loader.gif" width="25px">');  entrar(); }); </script>
	<script type="text/javascript" src="js/js/entrar.js"></script>
	<script type="text/javascript" src="js/js/jquery.mobile.js"></script>
</body>
</html>