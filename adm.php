<?php 
    include_once('php/conexao.php');
    session_start();
    if(isset($_SESSION['CPF']) && $_SESSION['PERMISSAO'] == 1){
    $cpf = $_SESSION['CPF'];
    $permissao = $_SESSION['PERMISSAO'];
?>
<!DOCTYPE html>
<!-- saved from url=(0023)http://localhost/diego/ -->
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
    <title>Agendamento de equipamento – Agendamentos rapidos</title>
    <link rel="icon" href="img/ceara.png">
<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist (1)/css/bootstrap.min.css">
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<link rel="dns-prefetch" href="http://s.w.org/">

        <script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg"};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="./adm_files/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script>
		<style type="text/css">
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
<link rel="stylesheet" id="mesmerize-parent-css" href="./adm_files/style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="mesmerize-style-css" href="./adm_files/style.min(1).css" type="text/css" media="all">
<style id="mesmerize-style-inline-css" type="text/css">
img.logo.dark, img.custom-logo{width:auto;max-height:70px !important;}
/** cached kirki style */@media screen and (min-width: 768px){.header{background-position:center center;}}.header-homepage:not(.header-slide).color-overlay:before{background:#000000;}.header-homepage:not(.header-slide) .background-overlay,.header-homepage:not(.header-slide).color-overlay::before{opacity:0.7;}.header-homepage-arrow{font-size:calc( 50px * 0.84 );bottom:20px;background:rgba(255,255,255,0);}.header-homepage-arrow > i.fa{width:50px;height:50px;}.header-homepage-arrow > i{color:#ffffff;}.header-homepage .header-description-row{padding-top:20%;padding-bottom:20%;}.inner-header-description{padding-top:8%;padding-bottom:8%;}@media screen and (max-width:767px){.header-homepage .header-description-row{padding-top:15%;padding-bottom:15%;}}@media only screen and (min-width: 768px){.header-content .align-holder{width:80%!important;}.inner-header-description{text-align:center!important;}}
</style>
<link rel="stylesheet" id="mesmerize-style-bundle-css" href="./adm_files/theme.bundle.min.css" type="text/css" media="all">
<link rel="stylesheet" id="mesmerize-fonts-css" data-href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%7CMuli%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%7CPlayfair+Display%3A400%2C400italic%2C700%2C700italic&amp;subset=latin%2Clatin-ext" type="text/css" media="all" href="./adm_files/css">
<script type="text/javascript" src="./adm_files/jquery.js.download"></script>
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
<script type="text/javascript" src="./adm_files/jquery-migrate.min.js.download"></script>
<meta name="generator" content="WordPress 4.9.8">

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

<body class="home page-template-default page page-id-26 mesmerize-front-page mesmerize-content-padding">


<div id="page-top" class="header-top homepage">
        <div class="navigation-bar homepage">
    <div class="navigation-wrapper ">
    	<div class="row basis-auto" >
	        <div class="logo_col col-xs col-sm-fit" >
	            <a class="text-logo" data-type="group" data-dynamic-mod="true" href="#">Agendamento<span style="font-weight: 300;" class="span12"> de</span> equipamento</a>	        </div>
	        <div class="main_menu_col col-xs" >
	            <div id="mainmenu_container" class="row"><ul id="main_menu" class="active-line-bottom main-menu dropdown-menu" style="background-color:rgba(0,0,0,0)"><li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-39"><a href="#">Página inicial</a></li>
<li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="adm_files/html/reservas.php">Agendamentos</a></li>
<li id="menu-item-111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111"><a href="adm_files/html/equipamentos.php">Equipamentos</a></li>
<li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="adm_files/html/usuarios.php">Usuarios</a></li>
                    <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="adm_files/html/cursos.php">Cursos</a></li>
<li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="adm_files/html/dados_pessoais.php">Dados pessoais</a></li>
<li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="php/sair.php">Sair</a></li>
</ul></div>    <a href="#" data-component="offcanvas" data-target="#offcanvas-wrapper" data-direction="right" data-width="300px" data-push="false" data-loaded="true">
        <div class="bubble"></div>
        <i class="fa" id="menu"><img src="img/menu.png" alt="" width="75%"></i>
    </a>
    
    	        </div>
	    </div>
    </div>
</div>
</div>


<div id="page" class="site">

            <div class="header-wrapper">
            <div class="header-homepage  color-overlay" style="min-height: 100vh; position: relative; z-index: 0; padding-top: 84.375px; background-image: none;">
                                                
    <div class="header-description gridContainer content-on-center">
        <div class="row header-description-row middle-sm">
    <div class="header-content header-content-centered col-md col-xs-12">
        <div class="align-holder center">
            <h1 class="hero-title">Seja bem vindo administrador</h1><p class="header-subtitle">Agendamentos rápidos </p><div data-dynamic-mod-container="" class="header-buttons-wrapper"><a class="button big color1 round" target="_self" href="adm_files/html/reservas.php">AGENDAMENTOS DE HOJE</a></div>        </div>
    </div>
</div>
    </div>
    
        <script>
        window.mesmerizeSetHeaderTopSpacing();
    </script>
                    
                                        <div class="header-homepage-arrow-c">
            <span class="header-homepage-arrow move-down-bounce"> <i class="fa arrow" aria-hidden="true"><img src="adm_files/seta.png" alt=""></i>
            </span>
        </div>
                    <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 760px; width: 1499px; z-index: -999998; position: absolute;"><div class="backstretch-item deleteable" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; z-index: -999999;"><img alt="" src="./adm_files/hero-1.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1499px; height: 993.087px; max-width: none; left: 0px; top: -116.544px; right: auto; bottom: auto;"></div><div class="backstretch-item" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; z-index: -999999; opacity: 0.556428;"><img alt="" src="adm_files/hero-3.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1499px; height: 999.333px; max-width: none; left: 0px; top: -119.667px; right: auto; bottom: auto;"></div></div></div>
        </div>
        
    <div class="page-content">
        <div class="gridContainer content">
            <div id="post-26" class="post-26 page type-page status-publish hentry">
  <div>
   <div class="row">
<div class="col-md-12">
<div class="row">
<div class="progress progress1">
		                <span class="progress-left"><br>
		                    <span class="progress-bar"></span><br>
		                </span><br>
						<span class="progress-right"><br>
		                    <span class="progress-bar"></span><br>
		                </span><p></p>
<div class="progress-value">98% Evolução na logística de agendamento</div>
<p></p></div>
<h6 class="category"></h6>
<p>O nosso sistema promete ao usuario uma evolução de 98% na logistica de agendamento dos equipamentos </p>
<p></p></div>
</div>
</div>
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
<script type="text/javascript" defer="defer" src="./adm_files/imagesloaded.min.js.download"></script>
<script type="text/javascript" defer="defer" src="./adm_files/masonry.min.js.download"></script>
<script type="text/javascript">
/* <![CDATA[ */
var mesmerize_backstretch = {"images":["img/hero-1.jpg","img/hero-2.jpg","img/hero-5.jpg","img/hero-6.jpg"],"duration":"3000","transitionDuration":"1000","animateFirst":""};
/* ]]> */
</script>
<script type="text/javascript" defer="defer" src="./adm_files/theme.bundle.min.js.download"></script>
<script type="text/javascript" src="./adm_files/theme-child.js.download"></script>
<script type="text/javascript" defer="defer" src="./adm_files/wp-embed.min.js.download"></script>
<script type="text/javascript" src="jquery-ui-1.12.1/jquery-3.3.1.js"></script>
<script>
$(function(){
    
    $('#menu').click(function(){
                $('#offcanvas-wrapper').show(500);
            });
            $("#close").click(function(){
                $('#offcanvas-wrapper').hide(500);
            });
})
</script>

<script type="text/javascript">
	document.getElementsByClassName('site-info').item(0).style.display = 'none'
</script>
<div id="offcanvas-wrapper" class="hide  offcanvas-right offcanvas col-12">
        <div class="offcanvas-top">
            <div class="logo-holder">
                <a class="text-logo" data-type="group" data-dynamic-mod="true"><span id="close" style="font-weight: 300;" class="btn btn-danger col-11"><b>X</b></span></a>            </div>
        </div>
        <div id="offcanvas-menu" class="menu-menu-do-topo-container"><ul id="offcanvas_menu" class="offcanvas_menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-39"><a href="#">Página inicial</a></li>
                    <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="adm_files/html/reservas.php">Agendamentos</a></li>
                    <li id="menu-item-111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111"><a href="adm_files/html/equipamentos.php">Equipamentos</a></li>
                    <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="adm_files/html/usuarios.php">Usuarios</a></li>
                    <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="adm_files/html/cursos.php">Cursos</a></li>
                    <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="adm_files/html/dados_pessoais.php">Dados pessoais</a></li>
                    <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="php/sair.php">Sair</a></li>
</ul></div>
</div></body></html>
<?php 
    }else{
        header("location:index.php");
    }
?>