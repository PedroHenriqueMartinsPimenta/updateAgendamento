<!DOCTYPE html>
<html>
<head>
	<?php 
		include_once('php/conexao.php');
		include_once('adm_files/html/init/enter/enter/enter/enter/insert_reservas_padroes.php');
	?>
	<title>Login - Agendamento de equipamentos EEEP</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Agendamento online das EEEPs, fazendo seus agendamentos de modo rápido e eficiente!">
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
	<?php 
		session_start();
		if(isset($_SESSION['CPF'])){
			if($_SESSION['PERMISSAO'] == 0){
				header("location:user.php");
				}else if($_SESSION['PERMISSAO'] == 1){
					header("location:adm.php");
				}
				
			}
	?>
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
				<input type="button" class="entrar button" onclick="entrar()" value="Entrar">
		</table>
		</form>
		<div class="col-10" style="position: relative; top: 50%; margin: 0 auto">
				<a href="recuperar.html">Esqueci minha senha</a>
			</div>
			<div class="alert alert-danger col-10" style="position: relative; top: 50%; display: none; margin: 0 auto">
				<strong>Atenção</strong><br> aguarde a autenticação <img src="img/loader.gif" width="25px">
			</div>
	</div>
	<script type="text/javascript" src="jquery-ui-1.12.1/jquery-3.3.1.js"></script>
	<script type="text/javascript"> $(document).ready(function(){
	$('input[type=text], input[type=password]').keypress(function(e){ if
	(e.keyCode == 13) { entrar(); } }); }); </script>
	<script type="text/javascript" src="js/js/entrar.js"></script>
	<script type="text/javascript" src="js/js/jquery.mobile.js"></script>
</body>
</html>