<?php 
    include_once('../../php/conexao.php');
    session_start();
    if(isset($_SESSION['CPF']) && $_SESSION['PERMISSAO'] == 0){
    $cpf = $_SESSION['CPF'];
    $permissao = $_SESSION['PERMISSAO'];
?>
<!DOCTYPE html>
<!-- saved from url=(0036)http://localhost/diego/agendamentos/ -->
<html lang="pt-BR" class="has-offscreen"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

	    <script>
        (function (exports, d) {
            var _isReady = false,
                _event,
                _fns = [];

            function onReady(event) {
                d.removeEventListener("DOMContentLoaded", onReady);
                _isReady = true;
                _event = event;
                _fns.forEach(function (_fn) {
                    var fn = _fn[0],
                        context = _fn[1];
                    fn.call(context || exports, window.jQuery);
                });
            }

            function onReadyIe(event) {
                if (d.readyState === "complete") {
                    d.detachEvent("onreadystatechange", onReadyIe);
                    _isReady = true;
                    _event = event;
                    _fns.forEach(function (_fn) {
                        var fn = _fn[0],
                            context = _fn[1];
                        fn.call(context || exports, event);
                    });
                }
            }

            d.addEventListener && d.addEventListener("DOMContentLoaded", onReady) ||
            d.attachEvent && d.attachEvent("onreadystatechange", onReadyIe);

            function domReady(fn, context) {
                if (_isReady) {
                    fn.call(context, _event);
                }

                _fns.push([fn, context]);
            }

            exports.mesmerizeDomReady = domReady;
        })(window, document);
    </script>
    <title>Agendamentos – Agendamento de equipamento</title>
    <link rel="icon" href="../../img/ceara.png">
<link rel="stylesheet" type="text/css" href="../../bootstrap-4.1.3-dist (1)/css/bootstrap.min.css">
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<link rel="dns-prefetch" href="http://s.w.org/">
<link rel="alternate" type="application/rss+xml" title="Feed para Agendamento de equipamento »" href="http://localhost/diego/feed/">
<link rel="alternate" type="application/rss+xml" title="Feed de comentários para Agendamento de equipamento »" href="http://localhost/diego/comments/feed/">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/localhost\/diego\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="./reservas_files/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script>
        <style type="text/css">
        input, select, label{margin-top:10px; height: 25px}
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="mesmerize-parent-css" href="./reservas_files/style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="mesmerize-style-css" href="./reservas_files/style.min(1).css" type="text/css" media="all">
<style id="mesmerize-style-inline-css" type="text/css">
img.logo.dark, img.custom-logo{width:auto;max-height:70px !important;}
/** cached kirki style */@media screen and (min-width: 768px){.header{background-position:center center;}}.header-homepage:not(.header-slide).color-overlay:before{background:#000000;}.header-homepage:not(.header-slide) .background-overlay,.header-homepage:not(.header-slide).color-overlay::before{opacity:0.7;}.header-homepage-arrow{font-size:calc( 50px * 0.84 );bottom:20px;background:rgba(255,255,255,0);}.header-homepage-arrow > i.fa{width:50px;height:50px;}.header-homepage-arrow > i{color:#ffffff;}.header-homepage .header-description-row{padding-top:20%;padding-bottom:20%;}.inner-header-description{padding-top:8%;padding-bottom:8%;}@media screen and (max-width:767px){.header-homepage .header-description-row{padding-top:15%;padding-bottom:15%;}}@media only screen and (min-width: 768px){.header-content .align-holder{width:80%!important;}.inner-header-description{text-align:center!important;}}
</style>
<link rel="stylesheet" id="mesmerize-style-bundle-css" href="./reservas_files/theme.bundle.min.css" type="text/css" media="all">
<link rel="stylesheet" id="mesmerize-fonts-css" data-href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%7CMuli%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%7CPlayfair+Display%3A400%2C400italic%2C700%2C700italic&amp;subset=latin%2Clatin-ext" type="text/css" media="all" href="./reservas_files/css">
<script type="text/javascript" src="./reservas_files/jquery.js.download"></script>
<script type="text/javascript">
    
        (function () {
            function setHeaderTopSpacing() {

                setTimeout(function() {
                  var headerTop = document.querySelector('.header-top');
                  var headers = document.querySelectorAll('.header-wrapper .header,.header-wrapper .header-homepage');

                  for (var i = 0; i < headers.length; i++) {
                      var item = headers[i];
                      item.style.paddingTop = headerTop.getBoundingClientRect().height + "px";
                  }

                    var languageSwitcher = document.querySelector('.mesmerize-language-switcher');

                    if(languageSwitcher){
                        languageSwitcher.style.top = "calc( " +  headerTop.getBoundingClientRect().height + "px + 1rem)" ;
                    }
                    
                }, 100);

             
            }

            window.addEventListener('resize', setHeaderTopSpacing);
            window.mesmerizeSetHeaderTopSpacing = setHeaderTopSpacing
            mesmerizeDomReady(setHeaderTopSpacing);
        })();
    
    
</script>
<script type="text/javascript" src="./reservas_files/jquery-migrate.min.js.download"></script>
<link rel="https://api.w.org/" href="http://localhost/diego/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/diego/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost/diego/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.9.8">
<link rel="canonical" href="http://localhost/diego/agendamentos/">
<link rel="shortlink" href="http://localhost/diego/?p=103">
<link rel="alternate" type="application/json+oembed" href="http://localhost/diego/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2Fdiego%2Fagendamentos%2F">
<link rel="alternate" type="text/xml+oembed" href="http://localhost/diego/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2Fdiego%2Fagendamentos%2F&amp;format=xml">
        <style data-name="header-gradient-overlay">
            .header .background-overlay {
                background: linear-gradient(135deg , rgba(60,200,60, 0.8) 0%, rgba(90,175,132,0.8) 100%);
            }
            @media(min-width : 350px){
            td, th{
                font-size:11px;
            }
            .td{
                display:none;
                height:100%;
            }
            }
            @media(min-width : 750px){
            
                td, th{
                font-size:15px;
                 }
                 .td{
                     display:block;
                     height:100%;
                     border: none;
                 }
            }
            @media print{
                .header,input, select, .btn, #page-top, .footer, .edit{
                    width:0px;
                    display:none;
                }
                table{
                    display: block;
                    border:1px black solid;
                }
                td, th{
                    border-bottom:1px black solid;
                    width:190px;
                    text-align:center;
                }
                
                .td{
                     display:block;
                     height:100%;
                     border: none;
                 }
            }
            .btn{
                margin-top:3px;
            }
            
        </style>
        <script type="text/javascript" data-name="async-styles">
        (function () {
            var links = document.querySelectorAll('link[data-href]');
            for (var i = 0; i < links.length; i++) {
                var item = links[i];
                item.href = item.getAttribute('data-href')
            }
        })();
    </script>
        <style data-name="background-content-colors">
        .mesmerize-inner-page .page-content,
        .mesmerize-inner-page .content,
        .mesmerize-front-page.mesmerize-content-padding .page-content {
            background-color: #F5FAFD;
        }
    </style>
    </head>

<body class="page-template-default page page-id-103 mesmerize-inner-page">

    <div id="page-top" class="header-top">
		<div style="visibility: hidden; display: none;"></div><div class="navigation-bar coloured-nav" data-sticky="0" data-sticky-mobile="1" data-sticky-to="top" style="z-index: 10000;">
    <div class="navigation-wrapper ">
    	<div class="row basis-auto">
	        <div class="logo_col col-xs col-sm-fit">
	            <a class="text-logo" data-type="group" data-dynamic-mod="true" href="../../user.php">Agendamento<span style="font-weight: 300;" class="span12"> de</span> equipamento</a>	        </div>
	        <div class="main_menu_col col-xs">
	            <div id="mainmenu_container" class="row"><ul id="main_menu" class="active-line-bottom main-menu dropdown-menu"><li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-39"><a href="../../user.php">Página inicial</a></li>
                    <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="reservas.php">Agendamentos</a></li>
                    <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="observacoes.php">Observações</a></li>
                    <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="dados_pessoais.php">Dados pessoais</a></li>
<li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="../../php/sair.php" >Sair</a></li>
</ul></div>    <a href="#" data-component="offcanvas" data-target="#offcanvas-wrapper" data-direction="right" data-width="300px" data-push="false" data-loaded="true">
        <div class="bubble"></div>
        <i class="fa"><img src="../../img/menu.png" alt="" width="75%"></i>
    </a>
    
    	        </div>
	    </div>
    </div>
</div>
</div>
<div id="page" class="site">
    <div class="header-wrapper">
        <div class="header  color-overlay  custom-mobile-image" style="background-image: url(&quot;../../img/hero-inner.jpg&quot;); background-color: rgb(106, 115, 218); padding-top: 84.375px;" data-parallax-depth="20">
            <div class="background-overlay"></div>								    <div class="inner-header-description gridContainer">
        <div class="row header-description-row">
    <div class="col-xs col-xs-12">
        <h1 class="hero-title">
            Agendamentos        </h1>
                    <p class="header-subtitle">Agendamentos rapidos</p>
            </div>
        </div>
    </div>
        <script>
        window.mesmerizeSetHeaderTopSpacing();
    </script>
                        </div>
    </div>

    <div class="page-content">
        <div class="gridContainer content">
            <div id="post-103" class="post-103 page type-page status-publish hentry">
    <div>
    <form action="reservas.php" method="post">
    <select id="filtro" class="col-12" name="aula">
		<option value="!= 0">Todas as aulas</option>
		<option value="= 1">Aula 1</option>
		<option value="= 2">Aula 2</option>
		<option value="= 3">Aula 3</option>
		<option value="= 4">Aula 4</option>
		<option value="= 5">Aula 5</option>
		<option value="= 6">Aula 6</option>
		<option value="= 7">Aula 7</option>
		<option value="= 8">Aula 8</option>
		<option value="= 9">Aula 9</option>
	</select>
	<input type="date" id="dia" value="<?php echo $_POST['dia']?>" class="col-12" name="dia">
	<?php 
		if(!isset($_POST['dia'])){
	?>
	<script >
		var g = new Date();
		var dia = g.getDate();
		var mes = g.getMonth()+1;
		var ano = g.getYear()+1900;
		if(dia < 10){
			dia = "0"+dia;
		}
		if(mes < 10){
			mes = "0"+mes;
		}
		document.getElementById('dia').value = ano+"-"+mes+"-"+ dia;
		
	</script>
	<?php 
		}
	?>
	<button type="submit" onclick="filtrar()" class="btn btn-success">
		fitrar
	</button>
	<a href="reservas.php"><button type="button" class="btn btn-danger">
		Remover filtro
	</button></a>
    
    <a href="reservas.php?id=1"><button type="button" class="btn btn-info">
		Historico 
	</button></a>
    <br>
   <a href="agendar.php"><button type="button" class="btn btn-outline-primary">
        Novo agendamento
    </button></a>
	<div id="print"  class="print btn btn-dark" style="cursor: pointer;">
	Imprimir
	</div>
    <br>
    <a href="reservas_files/table.php"><div class="btn btn-warning" style="cursor: pointer;">
        Gerar planinha
    </div></a>
</form>
<div style=" max-width: 100%;overflow: scroll">
<?php 
    if(!isset($_POST['dia']) && !isset($_GET['id'])){
?>
    <table class="table" style="margin-top:20px">
    <tr class="cabecario thead-dark">
      <th scope="col" id="icon">Aula</th>
      <th>Nome completo</th>
      <th scope="col">Turma</th>
      <th scope="col">Equipamento</th>
      <th scope="col">Dia</th>
      <th scope="col" class="td">Dia da efetuação</th>
      <th scope="col" class="edit">Cancelar</th>
    </tr>
  <tbody>
  <?php 
	$dia = date('Y-m-d');
	$sql = "SELECT RESERVA.CODIGO AS CODIGO,DATE_FORMAT(RESERVA.DATA_ULTILIZAR,'%d/%m/%Y') AS DATA, RESERVA.DATA AS EFETUOU, USUARIO.NOME AS NOME,USUARIO.SOBRENOME AS SOBRENOME, EQUIPAMENTO.DESCRICAO AS EQUIPAMENTO, AULA.DESCRICAO AS AULA,CONCAT(AULA.DESCRICAO,'-', RESERVA.DATA) AS ORDEM, TURMA.DESCRICAO AS TURMA FROM RESERVA
INNER JOIN EQUIPAMENTO ON EQUIPAMENTO.CODIGO = RESERVA.EQUIPAMENTO_CODIGO 
INNER JOIN USUARIO ON RESERVA.USUARIO_CPF = USUARIO.CPF
INNER JOIN AULA ON RESERVA.AULA_CODIGO = AULA.CODIGO
INNER JOIN TURMA ON RESERVA.TURMA_CODIGO = TURMA.CODIGO WHERE DATA_ULTILIZAR = '$dia' AND USUARIO_CPF = '$cpf' ORDER BY ORDEM ASC";

$queryAgendamento = mysqli_query($con,$sql);
while($rowList = mysqli_fetch_array($queryAgendamento)){
    ?>
    <tr>
      <th scope="row" id="aula"><?php echo $rowList["AULA"]?></th>
      <td id="desc"><?php echo $rowList["NOME"]. " ".  $rowList["SOBRENOME"]?></td>
      <td id="desc"><?php echo $rowList["TURMA"]?></td>
      <td id="desc"><?php echo $rowList["EQUIPAMENTO"]?></td>
      <td id="desc"><?php echo $rowList["DATA"]?></td>
      <td id="desc" class="td"><?php echo $rowList["EFETUOU"]?></td>
      <td><a href="../../php/delete agendamento.php?codigo=<?php echo $rowList['CODIGO']?>" title="deletar equipamento" class="edit btn btn-outline-danger cancelar">Cancelar</a></td>
    </tr>
    <?php 
        }
    ?>
  </tbody>
</table>
<?php 
    }else if(isset($_GET['id'])){
        ?>
        <table class="table" style="margin-top:20px">
    <tr class="cabecario thead-dark">
      <th scope="col" id="icon">Aula</th>
      <th>Nome completo</th>
      <th scope="col">Turma</th>
      <th scope="col">Equipamento</th>
      <th scope="col">Dia</th>
      <th scope="col" class="td">Dia da efetuação</th>
      <th scope="col" class="edit">Cancelar</th>
    </tr>
  <tbody>
  <?php 
	$sql = "SELECT RESERVA.CODIGO AS CODIGO,DATE_FORMAT(RESERVA.DATA_ULTILIZAR,'%d/%m/%Y') AS DATA, RESERVA.DATA AS EFETUOU, USUARIO.NOME AS NOME,USUARIO.SOBRENOME AS SOBRENOME, EQUIPAMENTO.DESCRICAO AS EQUIPAMENTO, AULA.DESCRICAO AS AULA,  TURMA.DESCRICAO AS TURMA FROM RESERVA
INNER JOIN EQUIPAMENTO ON EQUIPAMENTO.CODIGO = RESERVA.EQUIPAMENTO_CODIGO 
INNER JOIN USUARIO ON RESERVA.USUARIO_CPF = USUARIO.CPF
INNER JOIN AULA ON RESERVA.AULA_CODIGO = AULA.CODIGO
INNER JOIN TURMA ON RESERVA.TURMA_CODIGO = TURMA.CODIGO WHERE USUARIO_CPF = '$cpf' ORDER BY EFETUOU DESC";

$queryAgendamento = mysqli_query($con,$sql);
echo mysqli_error($con);
while($rowList = mysqli_fetch_array($queryAgendamento)){
    ?>
    <tr>
      <th scope="row" id="aula"><?php echo $rowList["AULA"]?></th>
      <td id="desc"><?php echo $rowList["NOME"]. " ".  $rowList["SOBRENOME"]?></td>
      <td id="desc"><?php echo $rowList["TURMA"]?></td>
      <td id="desc"><?php echo $rowList["EQUIPAMENTO"]?></td>
      <td id="desc"><?php echo $rowList["DATA"]?></td>
      <td id="desc" class="td"><?php echo $rowList["EFETUOU"]?></td>
      <td><a href="../../php/delete agendamento.php?codigo=<?php echo $rowList['CODIGO']?>" title="deletar equipamento" class="edit btn btn-outline-danger cancelar">Cancelar</a></td>
    </tr>
    <?php 
        }
    ?>
  </tbody>
</table>    
<?php
    }else{
        ?>
        <table class="table" style="margin-top:20px">
    <tr class="cabecario thead-dark">
      <th scope="col" id="icon">Aula</th>
      <th>Nome completo</th>
      <th scope="col">Turma</th>
      <th scope="col">Equipamento</th>
      <th scope="col">Dia</th>
      <th scope="col" class="td">Dia da efetuação</th>
      <th scope="col" class="edit">Cancelar</th>
    </tr>
  <tbody>
  <?php 
    $dia = $_POST['dia'];
    $aula = $_POST['aula'];
	$sql = "SELECT RESERVA.CODIGO AS CODIGO,DATE_FORMAT(RESERVA.DATA_ULTILIZAR,'%d/%m/%Y') AS DATA, RESERVA.DATA AS EFETUOU, USUARIO.NOME AS NOME,USUARIO.SOBRENOME AS SOBRENOME, EQUIPAMENTO.DESCRICAO AS EQUIPAMENTO, AULA.DESCRICAO AS AULA, CONCAT(AULA.DESCRICAO,'-', RESERVA.DATA) AS ORDEM, TURMA.DESCRICAO AS TURMA FROM RESERVA
INNER JOIN EQUIPAMENTO ON EQUIPAMENTO.CODIGO = RESERVA.EQUIPAMENTO_CODIGO 
INNER JOIN USUARIO ON RESERVA.USUARIO_CPF = USUARIO.CPF
INNER JOIN AULA ON RESERVA.AULA_CODIGO = AULA.CODIGO
INNER JOIN TURMA ON RESERVA.TURMA_CODIGO = TURMA.CODIGO WHERE AULA_CODIGO ". $aula ." AND  DATA_ULTILIZAR = '$dia'  AND USUARIO_CPF = '$cpf' ORDER BY ORDEM ASC";

$queryAgendamento = mysqli_query($con,$sql);
echo mysqli_error($con);
while($rowList = mysqli_fetch_array($queryAgendamento)){
    ?>
    <tr>
      <th scope="row" id="aula"><?php echo $rowList["AULA"]?></th>
      <td id="desc"><?php echo $rowList["NOME"]. " ".  $rowList["SOBRENOME"]?></td>
      <td id="desc"><?php echo $rowList["TURMA"]?></td>
      <td id="desc"><?php echo $rowList["EQUIPAMENTO"]?></td>
      <td id="desc"><?php echo $rowList["DATA"]?></td>
      <td id="desc" class="td"><?php echo $rowList["EFETUOU"]?></td>
      <td><a href="../../php/delete agendamento.php?codigo=<?php echo $rowList['CODIGO']?>" title="deletar equipamento" class="edit btn btn-outline-danger cancelar">Cancelar</a></td>
    </tr>
    <?php 
        }
    ?>
  </tbody>
</table>      
        <?php

    }
?>
</div>
     </div>
    </div>
        </div>
    </div>

	
	</div>
<script type="text/javascript" defer="defer" src="./reservas_files/imagesloaded.min.js.download"></script>
<script type="text/javascript" defer="defer" src="./reservas_files/masonry.min.js.download"></script>
<script type="text/javascript" defer="defer" src="./reservas_files/theme.bundle.min.js.download"></script>
<script type="text/javascript" src="./reservas_files/theme-child.js.download"></script>
<script type="text/javascript" defer="defer" src="./reservas_files/wp-embed.min.js.download"></script>
<script type="text/javascript" src="../../jquery-ui-1.12.1/jquery-3.3.1.js"></script>
<script>
    $(function(){
        
        $('.fa').click(function(){
                $('#offcanvas-wrapper').show(500);
            });
            $("#close").click(function(){
                $('#offcanvas-wrapper').hide(500);
            });
        $('.print').click(function(){
            window.print();
        });
            
    })
</script>

<script type="text/javascript">
	document.getElementsByClassName('site-info').item(0).style.display = 'none';
</script>
<div id="offcanvas-wrapper" class="hide  offcanvas-right offcanvas col-12">
        <div class="offcanvas-top">
            <div class="logo-holder">
                <a class="text-logo" data-type="group" data-dynamic-mod="true"><span id="close" style="font-weight: 300;" class="btn btn-danger col-11"><b>X</b></span></a>            </div>
        </div>
        <div id="offcanvas-menu" class="menu-menu-do-topo-container"><ul id="offcanvas_menu" class="offcanvas_menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-39"><a href="../../user.php">Página inicial</a></li>
        <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="reservas.php">Agendamentos</a></li>
        <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="observacoes.php">Observações</a></li>
                    <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="dados_pessoais.php">Dados pessoais</a></li>
                    <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="../../php/sair.php">Sair</a></li>
</ul></div>
</div></body></html>
<?php 
    }else{
        header("location:../../");
    }
?>