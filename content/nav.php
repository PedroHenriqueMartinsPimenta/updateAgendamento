<?php
/*
 * Horarios - aulas.php
 * Locais de utlização = cursos.php
*/
	$uri = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/updateAgendamento/";
	function nav($uri){
		if ($_SESSION['PERMISSAO'] == 1) {
			?>
				<li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-39"><a href="<?php echo $uri?>">Página inicial</a></li>
	            <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="<?php echo $uri?>adm_files/html/reservas.php">Agendamentos</a></li>
	            <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="<?php echo $uri?>live/recorder.php">Live/video conferencia</a></li>
	            <li id="menu-item-111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111"><a href="<?php echo $uri?>adm_files/html/equipamentos.php">Equipamentos</a></li>
	            <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="<?php echo $uri?>adm_files/html/usuarios.php">Usuarios</a></li>
	            <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="<?php echo $uri?>adm_files/html/aulas.php">Horarios</a></li>
	            <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="<?php echo $uri?>adm_files/html/cursos.php">Locais de utilização</a></li>
	            <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="<?php echo $uri?>adm_files/html/dados_pessoais.php">Dados pessoais</a></li>
	            <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="<?php echo $uri?>php/sair.php">Sair</a></li>
			<?php
		}else if ($_SESSION['PERMISSAO'] == 0) {
			?>
				 <li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-39"><a href="<?php echo $uri?>">Página inicial</a></li>
	            <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="<?php echo $uri?>user_files/html/reservas.php">Agendamentos</a></li>
	            <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="<?php echo $uri?>live/recorder.php">Live/video conferencia</a></li>
	            <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="<?php echo $uri?>user_files/html/dados_pessoais.php">Dados pessoais</a></li>
	            <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="<?php echo $uri?>php/sair.php">Sair</a></li>
			<?php
		}
	}
?>