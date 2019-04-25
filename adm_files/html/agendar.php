<?php 
    include_once('../../php/conexao.php');
    session_start();
    if(isset($_SESSION['CPF']) && $_SESSION['PERMISSAO'] == 1){
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
            .carregando{
                position: fixed;
                top:0px;
                width: 100%;
                height: 100%;
                background-color: rgba(2,2,2,0.5);
                z-index: 9999;
                background-image: url(../../img/progress.gif);
                background-repeat: no-repeat;
                background-size: 50%;
                background-position: center center;
                display: none
            }
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
	            <a class="text-logo" data-type="group" data-dynamic-mod="true" href="../../adm.php">Agendamento<span style="font-weight: 300;" class="span12"> de</span> equipamento</a>	        </div>
	        <div class="main_menu_col col-xs">
	            <div id="mainmenu_container" class="row"><ul id="main_menu" class="active-line-bottom main-menu dropdown-menu"><li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-39"><a href="../../adm.php">Página inicial</a></li>
                    <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="reservas.php">Agendamentos</a></li>
                    <li id="menu-item-111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111"><a href="equipamentos.php">Equipamentos</a></li>
                    <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="usuarios.php">Usuarios</a></li>
                    <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="cursos.php">Cursos</a></li>
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
            Efetuar agendamento        </h1>
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

        <a href="reservas.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
            <form method="post" action="" id="form">
                <?php 
                    $dia = date("Y-m-d");
                ?>
                 <div class="col-9" id="selectEquipamento" style="margin: 0 auto; text-align: center">
               <label for="dia">Selecionar dia de ultlização</label> <input type="date" id="dia" name="dia" value="<?php echo $dia ?>" class="form-control col-11" style="margin:5px auto" id="dia">
                    <?php 
                        $sql = "SELECT * FROM EQUIPAMENTO ORDER BY DESCRICAO ASC";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <input type="checkbox" name="equipamento" id="campo<?php echo $row['CODIGO']?>" value="<?php echo $row['CODIGO']?>" style="display: none;">
                    <label  onclick="selecionar(this, <?php echo $row['CODIGO']?>)" id="label<?php echo $row['CODIGO']?>" class="btn btn-primary col-2" style="max-width: 90px;
                     min-height: 80px; margin: 4px" for="campo<?php echo $row['CODIGO']?>" title="<?php echo $row['DESCRICAO']?>"><img src="<?php echo $row['ICON']?>" width="80px"></label>
                 <?php } ?><br>
                 <button type="button" class="btn btn-outline-success proximo_equipamento" disabled>Proximo</button>
                </div>


                 <div class="col-9 form-check" id="selectAula" style="margin: 0 auto; text-align: center; display: none">
                               <?php 
                               $sql = "SELECT * FROM AULA ORDER BY DESCRICAO ASC";
                               $query = mysqli_query($con, $sql);
                               while ($row = mysqli_fetch_array($query)) {
                                
                               ?>
                               <div class="custom-control custom-checkbox">
                                     <input type="checkbox" onclick="selectAula(this)" name="aula" class="custom-control-input" id="aula<?php echo $row['CODIGO']?>" value="<?php echo $row['CODIGO']?>">
                                     <label class="custom-control-label" for="aula<?php echo $row['CODIGO']?>"><?php echo $row['DESCRICAO']?></label>
                                </div>
                            <?php } ?>
                 <button type="button" class="btn btn-outline-danger voltar_aula">Voltar</button>                
                 <button type="button" class="btn btn-outline-success proximo_aula" disabled>Proximo</button>
                </div>


                 <div class="col-9 form-check" id="selectTurma" style="margin: 0 auto; text-align: center; display: none">
                    <div>
                    </div>
                 <button type="button" class="btn btn-outline-danger voltar_turma">Voltar</button>                
                 <button type="button" class="btn btn-outline-success proximo_turma" disabled>Proximo</button>
                </div>


                 <div class="col-9 form-check" id="selectConfirm" style="margin: 0 auto; text-align: center; display: none">
                       <table class="table" style="margin-top:20px">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col" id="icon">Equipamento</th>
                              <th scope="col" id="desc">Aula</th>
                              <th scope="col" id="qtd">Turma</th>
                              <th scope="col" id="qtd">Dia</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                        </tbody>
                     </table>
                 <button type="button" class="btn btn-outline-danger Cancelar_confirm">Refazer</button>                
                 <button type="button" class="btn btn-outline-success proximo_confirm" onclick="agendar()">Confirmar</button>
                </div>
            </form>
    </div>
        </div>
    </div>
</div>
	<div class="footer footer-simple">
    <div class="footer-content center-xs">
        <div class="gridContainer">
	        <div class="row middle-xs footer-content-row">
	            <div class="footer-content-col col-xs-12">
                <p class="copyright">©&nbsp;&nbsp;2019&nbsp;Agendamento de equipamento.&nbsp;Construído Pela equipe de desenvolvimento <a target="_blank" href="#" class="mesmerize-theme-link">Try Developer</a></p>	            </div>
	        </div>
	    </div>
    </div>
</div>
	</div>
<div class="carregando"></div>
<script type="text/javascript" defer="defer" src="./reservas_files/imagesloaded.min.js.download"></script>
<script type="text/javascript" defer="defer" src="./reservas_files/masonry.min.js.download"></script>
<script type="text/javascript" defer="defer" src="./reservas_files/theme.bundle.min.js.download"></script>
<script type="text/javascript" src="./reservas_files/theme-child.js.download"></script>
<script type="text/javascript" defer="defer" src="./reservas_files/wp-embed.min.js.download"></script>
<script type="text/javascript" src="../../jquery-ui-1.12.1/jquery-3.3.1.js"></script>
<script type="text/javascript" src="../../js/js/funcoes usuario comum.js"></script>
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
        $('.proximo_equipamento').click(function(){
            $("#selectEquipamento").hide();
            for(var i in equipamentosSelected){
                pesquisarAulas(equipamentosSelected[i]);
            }
            $("#selectAula").show('slow');
        });
        $('.voltar_aula').click(function(){
            $('#selectAula').hide();
            for(var i = 0; i < document.getElementsByClassName('custom-control-input').length; i++){
                document.getElementsByClassName('custom-control-input').item(i).checked = false;
                document.getElementsByClassName('custom-control-input').item(i).disabled = false;
                $('.proximo_aula').attr('disabled','');
            }
            $('#selectEquipamento').show('slow');
        });
        $('.proximo_aula').click(function(){
            $('#selectAula').hide();
            $("#selectTurma").show('slow');
            for(var i = 1; i <= 9; i++){
                var checked = document.getElementById('aula'+i).checked;
                        if(checked){
                    var html = '<label>'+i+'° aula: </label><select onchange="selectTurma(this)" id="turma'+i+'"><option value="null">Selecionar turma</option><?php $sql = "SELECT * FROM TURMA ORDER BY DESCRICAO ASC"; $query = mysqli_query($con, $sql); while ($row = mysqli_fetch_array($query)) { ?> <option value="<?php echo $row["CODIGO"]?>"><?php echo $row["DESCRICAO"]?></option> <?php } ?> </select><br><br>';
                    $("#selectTurma div").html($("#selectTurma div").html()+html);
                        }
            }
        });
        $('.voltar_turma').click(function(){
            $("#selectTurma").hide();
            $('#selectAula').show('slow');
            $("#selectTurma div").html("");

        });
        $('.proximo_turma').click(function(){
            $('#selectTurma').hide();
            $('#selectConfirm').show('slow');
            vereficarAgendamento(equipamentosSelected);
        });
        $('.Cancelar_confirm').click(function(){
            var c = confirm("reiniciar o agendamento?");
            if (c) {
                window.location.href = "agendar.php";
            }      
      });
        
            
    });
        
        
</script>
<script type="text/javascript">
    var dia = getData();
    document.getElementById('dia').setAttribute('min',dia[0]);
    document.getElementById('dia').setAttribute('max',dia[1]);
    document.getElementById('dia').value = dia[0];
    var equipamentosS = <?php echo json_encode( $_SESSION['equipamentos'])?>;
    var equipamentosSelected = equipamentosS;
    for(var i = 1; i <= <?php echo count( $_SESSION['equipamentos'])?>;i++){
        if(equipamentosS[i] != null){
        document.getElementById("campo"+equipamentosS[i]).checked = true;
        $("#label"+equipamentosS[i]).addClass('btn-success');
        $('.proximo_equipamento').removeAttr('disabled');
    }
    }
    function selecionar(label, codigo){
        if($(label).hasClass("btn-success")){
            var data = {"equipamento" : codigo};
            $.post(
                "../../php/removeRequestEquipamento.php",
                data,
                function(result){
                    equipamentosSelected = result;
                        $(label).removeClass("btn-success");
                        if(document.getElementsByClassName('btn-success').length == 0){
                            $('.proximo_equipamento').attr("disabled",""); 
                        }
                    },
                    'JSON'
                );
            
        }else{
            var data = {"equipamento" : codigo};
            $.post(
                "../../php/requestEquipamento.php",
                data,
                function(result){
                    equipamentosSelected = result;
                    if (equipamentosSelected != null) {
                         $(label).addClass("btn-success");
                         $('.proximo_equipamento').removeAttr("disabled"); 
                    }
                },
                'JSON'
                );           
        }
    }

        
    function selectAula(input){
        var checado = false;
        for(var i = 0; i < document.getElementsByClassName('custom-control-input').length;i++){
            if(document.getElementsByClassName('custom-control-input').item(i).checked){
                checado = true;
                break;
            }
        }
        if(checado){
            $('.proximo_aula').removeAttr('disabled');
        }else{
            $('.proximo_aula').attr('disabled','');

        }
    }
    function pesquisarAulas(codigo){
        $('.carregando').show();
        var diaA = $('#dia').val();
        var data = {equi:codigo, dia:diaA};
        $.post(
            "../../php/pesquisaEquipamentos.php",
            data,
            function(page){
                var arrayPage = page;
                for(var i = 0; i < arrayPage.length;i++){
                  document.getElementById('aula'+arrayPage[i]).disabled = true;
                }
                    $('.carregando').hide();
                },'JSON'
            )
        
        
    }
    function selectTurma(select){
        if($(select).val() != 'null'){
            $('.proximo_turma').removeAttr('disabled');
        }else{
            $('.proximo_turma').attr('disabled','');
        }
    }


    function vereficarAgendamento( equii){
        var table = $('table tbody').html();
            for(var i = 1; i <= 9; i++){
                var checked = document.getElementById('aula'+i).checked;
                if(checked){
                    var sala = $('#turma'+i+' option:selected').text();
                    for(var key in equipamentosSelected){
                        if(equipamentosSelected[key] != null){
                        var equi = document.getElementById('campo'+equipamentosSelected[key]).checked;
                        if(equi){
                            var dia = $("#dia").val();
                            var equipamento = $("#label"+equipamentosSelected[key]).attr('title');
                            table+="<tr><th scope='row'>"+equipamento+"</th><td scope='row'>"+i+"º Aula</td><td scope='row'>"+sala+"</td><td scope='row'>"+dia+"</td></tr>";
                            $('table tbody').html(table);
                            }
                        }
                    }
                    }
                }
            }

     function agendar(){
        $('.carregando').show();
        var erroEquipamento = "";
        var aula;
        var equipamento;
        var e = "";
        var turma;
        var dia = $('#dia').val();
        for(var i = 1; i <= 9; i++){
            var checked = document.getElementById('aula'+i).checked;
            if (checked) {
                aula = i;
                for(var key in equipamentosSelected){
                    console.log(key);
                    if(equipamentosSelected[key] != null){
                    var equi = document.getElementById('campo'+equipamentosSelected[key]).checked;
                    if(equi){
                        turma = turma =  $('#turma'+i+' option:selected').val();
                        equipamento = document.getElementById('campo'+equipamentosSelected[key]).value;
                        var data = {equipamento: equipamento, aula: aula, sala: turma, data_ultilizar: dia};
                        $.post(
                            "../../php/agendar.php",
                            data,
                            function(result){
                                if(typeof result == "number"){
                                    alert("sucesso");
                                }else if(typeof result == "string"){
                                      e = $("#label"+result).attr('title');       
                                     alert("ERRO:\n O equipamento ("+e+") foi reservado enquanto peenchia-se o seu formulario");
                                }
                            },
                            'JSON'
                            );

                            }
                        }
                    }
                }
            }
            alert("Agendamento finalizado!");
            $("#selectConfirm").html('<a href="agendar.php"><button type="button" class="btn btn-outline-danger Cancelar_confirm">Novo agendamento</button></a><a href="reservas.php"><button type="button" class="btn btn-outline-success">Ir para os agendamentos</button></a>');

        $('.carregando').hide();
        
     }
</script>

<div id="offcanvas-wrapper" class="hide  offcanvas-right offcanvas col-12">
        <div class="offcanvas-top">
            <div class="logo-holder">
                <a class="text-logo" data-type="group" data-dynamic-mod="true"><span id="close" style="font-weight: 300;" class="btn btn-danger col-11"><b>X</b></span></a>            </div>
        </div>
        <div id="offcanvas-menu" class="menu-menu-do-topo-container"><ul id="offcanvas_menu" class="offcanvas_menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-39"><a href="../../adm.php">Página inicial</a></li>
        <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="reservas.php">Agendamentos</a></li>
                    <li id="menu-item-111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111"><a href="equipamentos.php">Equipamentos</a></li>
                    <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="usuarios.php">Usuarios</a></li>
                    <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="cursos.php">Cursos</a></li>
                    <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="dados_pessoais.php">Dados pessoais</a></li>
                    <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="../../php/sair.php">Sair</a></li>
</ul></div>
</div></body></html>
<?php 
    }else{
        header("location:../../");
    }
?>