<?php
	$db_name = "agendamento";
	$db_user = "root";

	$con = mysqli_connect("localhost",$db_user,"",$db_name);
	mysqli_set_charset($con,'utf8');
	date_default_timezone_set('America/Sao_Paulo');
?>