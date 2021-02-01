<?php 
		session_start();
		if(isset($_SESSION['CPF'])){
			if($_SESSION['PERMISSAO'] == 0){
				header("location:user.php");
				}else if($_SESSION['PERMISSAO'] == 1){
					header("location:adm.php");
				}
				
			}
		include_once('content/nav.php');
		include_once('php/conexao.php');
		include_once('adm_files/html/init/enter/enter/enter/enter/insert_reservas_padroes.php');
	?>
<!DOCTYPE html>
<!-- saved from url=(0032)http://localhost/diego/usuarios/ -->
<html lang="pt-BR" class="has-offscreen"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="google-site-verification" content="f6S_53lYIUWuWT4P8GcdtonsI_A6r_bTuK4YCQvpSTk" />
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
    <title>Agendamento de equipamento</title>
    <link rel="icon" href="img/ceara.png">
<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist (1)/css/bootstrap.min.css">
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<link rel="dns-prefetch" href="http://s.w.org/">
<link rel="alternate" type="application/rss+xml" title="Feed para Agendamento de equipamento »" href="http://localhost/diego/feed/">
<link rel="alternate" type="application/rss+xml" title="Feed de comentários para Agendamento de equipamento »" href="http://localhost/diego/comments/feed/">
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/localhost\/diego\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
            !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
        </script><script src="./usuarios_files/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script>
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
<link rel="stylesheet" id="mesmerize-parent-css" href="./usuarios_files/style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="mesmerize-style-css" href="./usuarios_files/style.min(1).css" type="text/css" media="all">
<style id="mesmerize-style-inline-css" type="text/css">

img.logo.dark, img.custom-logo{width:auto;max-height:70px !important;}
/** cached kirki style */@media screen and (min-width: 768px){.header{background-position:center center;}}.header-homepage:not(.header-slide).color-overlay:before{background:#000000;}.header-homepage:not(.header-slide) .background-overlay,.header-homepage:not(.header-slide).color-overlay::before{opacity:0.7;}.header-homepage-arrow{font-size:calc( 50px * 0.84 );bottom:20px;background:rgba(255,255,255,0);}.header-homepage-arrow > i.fa{width:50px;height:50px;}.header-homepage-arrow > i{color:#ffffff;}.header-homepage .header-description-row{padding-top:20%;padding-bottom:20%;}.inner-header-description{padding-top:8%;padding-bottom:8%;}@media screen and (max-width:767px){.header-homepage .header-description-row{padding-top:15%;padding-bottom:15%;}}@media only screen and (min-width: 768px){.header-content .align-holder{width:80%!important;}.inner-header-description{text-align:center!important;}}
</style>
<style>
    
#preview{
    margin-top:50px;
        width:200px;
        height:200px;
        margin:0 auto;
        display:none;
        background-repeat:no-repeat;
        background-position:center center;
        background-size:80%;
    }

            @media print{
                .header,input, select, .btn, #page-top, .footer, .edit, #content-modal, .close {
                    width:0px;
                    display:none;
                }
                table{
                    border:1px black solid;
                }
                td, th{
                    border-bottom:1px black solid;
                    width:350px;
                    text-align:center;
                }
                tr{
                    border-bottom:1px black solid;
                }
                .td{
                     display:none;
                     height:100%;
                     border: none;
                 }
                 #cpf, #mail{
                    display: block;
                     height:100%;
                     border: none;                    
                 }
            }
            .btn{
                margin-top:3px;
            }
</style>
<link rel="stylesheet" id="mesmerize-style-bundle-css" href="./usuarios_files/theme.bundle.min.css" type="text/css" media="all">
<link rel="stylesheet" id="mesmerize-fonts-css" data-href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%7CMuli%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%7CPlayfair+Display%3A400%2C400italic%2C700%2C700italic&amp;subset=latin%2Clatin-ext" type="text/css" media="all" href="./usuarios_files/css">
<script type="text/javascript" src="./usuarios_files/jquery.js.download"></script>
<script type="text/javascript" src="jquery-ui-1.12.1/jquery-3.3.1.js"></script>
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
<script type="text/javascript" src="./usuarios_files/jquery-migrate.min.js.download"></script>
<link rel="https://api.w.org/" href="http://localhost/diego/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/diego/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost/diego/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.9.8">
<link rel="canonical" href="http://localhost/diego/usuarios/">
<link rel="shortlink" href="http://localhost/diego/?p=104">
<link rel="alternate" type="application/json+oembed" href="http://localhost/diego/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2Fdiego%2Fusuarios%2F">
<link rel="alternate" type="text/xml+oembed" href="http://localhost/diego/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2Fdiego%2Fusuarios%2F&amp;format=xml">
        <style data-name="header-gradient-overlay">
            .header .background-overlay {
                background: linear-gradient(135deg , rgba(60,200,60, 0.8) 0%, rgba(90,175,132,0.8) 100%);
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
        label{
            font-size: 18px;
        }
        #links{
        		position: absolute;
        		right: 10px;
        }
        #title{
        	font-size: 20px;
        	font-weight: bolder;
        }
        @media only screen and (max-width: 468px){
        	#links{
        		display: none;
        	}
        }
    </style>
    </head>

<body class="page-template-default page page-id-104 mesmerize-inner-page">

<div id="page-top" class="header-top">
        <div style="visibility: hidden; display: none;"></div><div class="navigation-bar coloured-nav" data-sticky="0" data-sticky-mobile="1" data-sticky-to="top" style="z-index: 10000;">

    <div class="navigation-wrapper ">
        <div class="row basis-auto">
            <div class="logo_col col-xs col-sm-fit col-12">
                <a class="text-logo" data-type="group" data-dynamic-mod="true" href="index.php">Agendamento<span style="font-weight: 300;" class="span12"> de</span> equipamento</a> 
            </div>
             <div class="main_menu_col col-xs" >
                <div id="mainmenu_container" class="row"></div>    <a href="#" data-component="offcanvas" data-target="#offcanvas-wrapper" data-direction="right" data-width="300px" data-push="false" data-loaded="true">
        <div class="bubble"></div>
        <i class="fa" id="menu"><img src="img/menu.png" alt="" width="75%"></i>
    </a>
    
  </div>

  					<div id="links">
			        	<a href="login.php" class="btn btn-success">Entrar</a>
			        	<a href="add_escola.html" class="btn btn-outline-info">Cadastrar-se</a>
			        </div>                   
                	 
            
        </div>
    </div>

</div>
       
</div>

<div id="page" class="site">
    <div class="header-wrapper">
        <div class="header color-overlay  custom-mobile-image" style="background-image: url(img/hero-inner.jpg); background-color: rgb(106, 115, 218); padding-top: 84.375px;" data-parallax-depth="20">
            <div class="background-overlay"></div>                                  <div class="inner-header-description gridContainer">
        <div class="row header-description-row">
    <div class="col-xs col-xs-12">
        <h1 class="hero-title">
               Agendamentos rápidos     </h1>
                    <p class="header-subtitle">Feito para você</p>
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
            <div id="post-104" class="post-104 page type-page status-publish hentry">
     <div>
        <div class="content" id="content-modal">    
		   	<div class="row">
		   		<div class="col-sm-12">
		   			<div class="row">
			   			<div class="col-sm-6" style="text-align: justify;">
			   				<div class="modal-title" id="title">
				   				Sobre o sistema
				   			</div>
			   				O nosso sistema permite o gerenciamento de agendamento de ambientes e equipamentos, de modo dinâmico, tornando a experiência cada dia mais atrativa! 
			   			</div>
			   			<div class="col-sm-6" align="center">
			   				<img src="img/gestao.png" width="300px">
			   			</div>
			   		</div>
			   		<br>
			   		<hr>
			   		<br>
			   		<div class="row">

			   			<div class="col-sm-6" align="center">
			   				<img src="img/plano-de-negocios.jpg" width="300px">
			   			</div>
			   			<div class="col-sm-6" style="text-align: justify;">
				   			<div class="modal-title" id="title" align="right">
				   				Como funciona o sistema de agendamento
				   			</div>
			   				O sistema de agendamento funciona fazendo o gerenciamento de modo mais fácil para os usuários, eliminando completamente a verificação de planilhas antes de efetuar agendamentos, e trazendo os dados de modo que se torne melhor a compreensão deles
			   			</div>
			   		</div>
			   		<br>
			   		<hr>
			   		<br>

			   		<div class="row">
			   			<div class="col-sm-6" style="text-align: justify;">
			   				<div class="modal-title" id="title">
				   				Depoimentos
				   			</div>
				   			<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/B0zgEh4gWo4/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B0zgEh4gWo4/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Ver essa foto no Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/B0zgEh4gWo4/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma publicação compartilhada por Try Developer (@trydeveloper)</a> em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2019-08-06T01:50:42+00:00">5 de Ago, 2019 às 6:50 PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
			   			</div>
			   			<div class="col-sm-6" align="center">
			   				<img src="img/depoimentos.png" width="300px">
			   			</div>
			   		</div>
			   		<br>
		   		</div>
		   	</div>
		<div>
		</div>
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
                        <p class="copyright">©&nbsp;&nbsp;2019&nbsp;Agendamento de equipamento.&nbsp;Construído Pela equipe de desenvolvimento <a target="_blank" href="https://www.instagram.com/trydeveloper/" class="mesmerize-theme-link">Try Developer</a></p>             </div>
            </div>
        </div>
    </div>
</div>  
    </div>
    <div id="offcanvas-wrapper" class="hide  offcanvas-right offcanvas col-12">
        <div class="offcanvas-top">
            <div class="logo-holder">
                <a class="text-logo" data-type="group" data-dynamic-mod="true"><span id="close" style="font-weight: 300;" class="btn btn-danger col-11"><b>X</b></span></a>            </div>
        </div>
        <div id="offcanvas-menu" class="menu-menu-do-topo-container"><ul id="offcanvas_menu" class="offcanvas_menu">
                    <li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-39"><a href="<?php echo $uri?>">Página inicial</a></li>
                    <li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-39"><a href="<?php echo $uri?>login.php">Entrar</a></li>
                    <li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-39"><a href="<?php echo $uri?>add_escola.html">Cadastrar-se</a></li>
</ul></div>
</div>
<script>
    $(function(){
        var opc = 0;
            $("#cadastrar").click(function(){
                if(opc == 1){
                        $('#content-modal').hide(500);
                        $("#cadastrar").text("Cadastrar");
                        $("#cadastrar").addClass('btn-dark');
                        $("#cadastrar").addClass('btn');
                        $("#cadastrar").removeClass('close');
                    opc = 0;
                    }else if(opc == 0){
                        $('#content-modal').show(500);
                        $("#cadastrar").text("X");
                        $("#cadastrar").removeClass('btn-dark');
                        $("#cadastrar").removeClass('btn');
                        $('#cadastrar').addClass('close');
                        opc = 1;
                        }
                });
            $("#imprimir").click(function(){
                window.print();
            });
            $('.fa').click(function(){
                $('#offcanvas-wrapper').show(500);
            });
            $("#close").click(function(){
                $('#offcanvas-wrapper').hide(500);
            });
            $('#file').change(function(){
                    readURL(this);
                    $('.label').text("foto selecionada!");
            });
                
   
    function readURL(input) {        

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview').show();
                $('#preview').css('background-image','url('+e.target.result+')');
               }

            reader.readAsDataURL(input.files[0]);
        }
        }
        });
</script>
<script type="text/javascript" defer="defer" src="./usuarios_files/imagesloaded.min.js.download"></script>
<script type="text/javascript" defer="defer" src="./usuarios_files/masonry.min.js.download"></script>
<script type="text/javascript" defer="defer" src="./usuarios_files/theme.bundle.min.js.download"></script>
<script type="text/javascript" src="./usuarios_files/theme-child.js.download"></script>
<script type="text/javascript" defer="defer" src="./usuarios_files/wp-embed.min.js.download"></script>

</body></html>
           