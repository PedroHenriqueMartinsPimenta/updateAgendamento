<?php 
    include_once('../../php/conexao.php');
    session_start();
    if(isset($_SESSION['CPF']) && $_SESSION['PERMISSAO'] == 0){
    $cpf = $_SESSION['CPF'];
    $permissao = $_SESSION['PERMISSAO'];
?>
<!DOCTYPE html>
<!-- saved from url=(0038)http://localhost/diego/dados-pessoais/ -->
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
    <title>Dados pessoais – Agendamento de equipamento</title>
    <link rel="icon" href="../../img/ceara.png">
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<link rel="stylesheet" type="text/css" href="../../bootstrap-4.1.3-dist (1)/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../css/atualizar_senha.css">
<link rel="dns-prefetch" href="http://s.w.org/">
<link rel="alternate" type="application/rss+xml" title="Feed para Agendamento de equipamento »" href="http://localhost/diego/feed/">
<link rel="alternate" type="application/rss+xml" title="Feed de comentários para Agendamento de equipamento »" href="http://localhost/diego/comments/feed/">
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/localhost\/diego\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
            !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
        </script><script src="./dados_pessoais_files/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script>
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
.editar{
    width: 50px;
    height: 50px;
    background-image: url(../../img/edit_foto.png);
    background-size: 100%;
    background-position:center center;
    background-repeat: no-repeat;
    cursor: pointer;
}
.editar:hover{
    transform:  rotate(15deg);
}
</style>
<link rel="stylesheet" id="mesmerize-parent-css" href="./dados_pessoais_files/style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="mesmerize-style-css" href="./dados_pessoais_files/style.min(1).css" type="text/css" media="all">
<style id="mesmerize-style-inline-css" type="text/css">
img.logo.dark, img.custom-logo{width:auto;max-height:70px !important;}
/** cached kirki style */@media screen and (min-width: 768px){.header{background-position:center center;}}.header-homepage:not(.header-slide).color-overlay:before{background:#000000;}.header-homepage:not(.header-slide) .background-overlay,.header-homepage:not(.header-slide).color-overlay::before{opacity:0.7;}.header-homepage-arrow{font-size:calc( 50px * 0.84 );bottom:20px;background:rgba(255,255,255,0);}.header-homepage-arrow > i.fa{width:50px;height:50px;}.header-homepage-arrow > i{color:#ffffff;}.header-homepage .header-description-row{padding-top:20%;padding-bottom:20%;}.inner-header-description{padding-top:8%;padding-bottom:8%;}@media screen and (max-width:767px){.header-homepage .header-description-row{padding-top:15%;padding-bottom:15%;}}@media only screen and (min-width: 768px){.header-content .align-holder{width:80%!important;}.inner-header-description{text-align:center!important;}}
</style>
<link rel="stylesheet" id="mesmerize-style-bundle-css" href="./dados_pessoais_files/theme.bundle.min.css" type="text/css" media="all">
<link rel="stylesheet" id="mesmerize-fonts-css" data-href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%7CMuli%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%7CPlayfair+Display%3A400%2C400italic%2C700%2C700italic&amp;subset=latin%2Clatin-ext" type="text/css" media="all" href="./dados_pessoais_files/css">
<script type="text/javascript" src="./dados_pessoais_files/jquery.js.download"></script>
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

<script type="text/javascript" src="./dados_pessoais_files/jquery-migrate.min.js.download"></script>
<link rel="https://api.w.org/" href="http://localhost/diego/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/diego/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost/diego/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.9.8">
<link rel="canonical" href="http://localhost/diego/dados-pessoais/">
<link rel="shortlink" href="http://localhost/diego/?p=98">
<link rel="alternate" type="application/json+oembed" href="http://localhost/diego/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2Fdiego%2Fdados-pessoais%2F">
<link rel="alternate" type="text/xml+oembed" href="http://localhost/diego/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2Fdiego%2Fdados-pessoais%2F&amp;format=xml">
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
    </style>
    </head>

<body class="page-template-default page page-id-98 mesmerize-inner-page">

    <div id="page-top" class="header-top">
        <div style="visibility: hidden; display: none;"></div><div class="navigation-bar coloured-nav" data-sticky="0" data-sticky-mobile="1" data-sticky-to="top" style="z-index: 10000;">
    <div class="navigation-wrapper ">
        <div class="row basis-auto">
            <div class="logo_col col-xs col-sm-fit">
                <a class="text-logo" data-type="group" data-dynamic-mod="true" href="../../adm.php">Agendamento<span style="font-weight: 300;" class="span12"> de</span> equipamento</a>            </div>
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
        </div></div>
    </div>
</div>
</div>


     <?php 
        $sql = "SELECT * FROM USUARIO WHERE CPF = '$cpf'";
        $query = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($query)){
     ?>
<div id="page" class="site">
    <div class="header-wrapper">
        <div class="header  color-overlay  custom-mobile-image" style="background-image: url(&quot;../../img/hero-inner.jpg&quot;); background-color: rgb(106, 115, 218); padding-top: 84.375px;" data-parallax-depth="20">
            <div class="background-overlay"></div>                                  <div class="inner-header-description gridContainer">
        <div class="row header-description-row">
    <div class="col-xs col-xs-12">
        <h1 class="hero-title">
            Dados pessoais        </h1>
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
            <div id="post-98" class="post-98 page type-page status-publish hentry">
     <div  style="text-align:center">
            <style type="text/css">
                .perfil{
                    width: 150px;
                    min-height: 150px;
                    margin:0 auto;
                    background-image: url(<?php echo $row['FOTO']?>);
                    background-repeat: no-repeat;
                    background-size: 100%;
                    background-position: center center;     
                }
            </style>
            <div class="perfil">
                <div class="editar"></div>
            </div>
            <div class="btn btn-dark col-11" style="margin-top:10px"><?php echo $row['CPF']?></div>
            <div class="btn btn-dark col-11" style="margin-top:10px"><?php echo $row['NOME'] . " " . $row['SOBRENOME']?></div>
            <div class="btn btn-dark col-11" style="margin-top:10px"><a href="mailto:<?php echo $row['EMAIL']?>"><?php echo $row['EMAIL']?></a></div>
            <div class="btn btn-dark col-11" style="margin-top:10px" id="update"><a style="color:white">Alterar senha</a></div>
   
     </div>
    </div>
        </div>
    </div>

    
    </div>
<div class="escuro col-12">
   
    </div>

        <div class="modal col-10">
            <div class="x btn  close">X</div>
            <h3 class="titulo">Altera senha</h3>
            <form >
                <input type="password" name="senhaantiga" id="antiga" placeholder="Senha atual" onkeyup="criptografar(this)" class="form-control"><br>
                <input type="password" name="novasenha" id="nova" placeholder="Nova senha" class="form-control"><br>
                <input type="password" name="confirmacao" id="confirmar" placeholder="Confirme sua senha" class="form-control"><br>
                <input type="button" value="Alterar" id="botao" class="btn btn-success">
            </form>
            <hr>
            <h3 class="titulo">Alterar foto</h3>
            <form action="../../php/updateFoto.php" method="post" enctype="multipart/form-data">
                <label class="label btn btn-primary form-control"  for="file">Selecionar foto de usuario:</label>
                    <input type="file" required name="foto" accept="image/png, image/jpeg" style="display:none" id="file">
                    <div id="preview" class="perfil"></div>
                <input type="submit" value="Alterar" class="btn btn-success" style="width: 100%; margin-top: 10px">
            </form>
            <hr>
            <h3 class="titulo">Alterar dados pessoais</h3>
            <form action="../../php/update dados.php" method="post">
                <label>Nome</label>
                <input type="text" name="nome" required value="<?php echo $row['NOME']?>">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" required value="<?php echo $row['SOBRENOME']?>">
                <label>E-mail</label>
                <input type="mail" name="email" required value="<?php echo $row['EMAIL']?>">
                <input type="submit" value="Alterar" class="btn btn-success" style="width: 100%; margin-top: 10px">
            </form>
        </div>
         <?php
        }
    ?>
<script type="text/javascript" defer="defer" src="./dados_pessoais_files/imagesloaded.min.js.download"></script>
<script type="text/javascript" defer="defer" src="./dados_pessoais_files/masonry.min.js.download"></script>
<script type="text/javascript" defer="defer" src="./dados_pessoais_files/theme.bundle.min.js.download"></script>
<script type="text/javascript" src="./dados_pessoais_files/theme-child.js.download"></script>
<script type="text/javascript" defer="defer" src="./dados_pessoais_files/wp-embed.min.js.download"></script>
<script type="text/javascript" src="../../jquery-ui-1.12.1/jquery-3.3.1.js"></script>
<script>
$(function(){
    $('.fa').click(function(){
                $('#offcanvas-wrapper').show(500);
            });
            $("#close").click(function(){
                $('#offcanvas-wrapper').hide(500);
            });
            
                $('#update').click(function (){
                                    $(".escuro").fadeIn(1000);
                                    $(".modal").fadeIn(1000);
                });
        
        $(".escuro").hide();    
            $(".x").click(function(){
                $(".escuro").hide("slow");
                $(".modal").hide("slow");
            });
            $(".aparecer").click(function(){
                $(".escuro").fadeIn(1000);
                $(".modal").fadeIn(1000);
            });
            $(".escuro").click(function(){
                $(this).hide("slow");
                $(".modal").hide("slow");
            });
                window.onkeydown = function(){
                var ke  =String.fromCharCode(window.event.keyCode);
                if(ke == ''){
                        $(".escuro").hide("slow");
                        $(".modal").hide("slow");
                    }
                }
            $('#botao').click(function(){
                updateSenha();
                });

            $('.editar').click(function(){
                    $('.modal').show('slow');
                    $('.escuro').show('slow');
            });
            $('.x_img').click(function(){
                     $('.modal').hide('slow');
                    $('.escuro').hide('slow');
            });
            $('#file').change(function(){
                    readURL(this);
                    $('.label').text("foto selecionada!");
            });
})
</script>

<script type="text/javascript">
    document.getElementsByClassName('site-info').item(0).style.display = 'none'
</script>
<script>
    var senha = '<?php echo json_encode($_SESSION["senha"])?>';
    var senhaAtual;
function updateSenha(){
    var nova = $('#nova').val();
    var conf = $('#confirmar').val();
    var cpf = <?php echo json_encode($cpf)?>;
    if (nova.length >= 6) {
    if(senha == senhaAtual){
    var data = {senhaAntiga:senhaAtual,newSenha:nova,confSenha:conf,cpf:cpf};
    
    if(nova == conf){

        $.post(
            "../../php/updateSenha.php",
            data,
            function(msg){
                alert(msg);
                $('.x').click();
                criptografia(nova);
                },"JSON"
        );
        }else{
            alert("Senhas incompativeis!");
            }
    }else{
        alert("Esta não é sua senha atual \n necessario informar sua atual senha. \n Caso perda de senha informar ao administrador");
        }
    }else{
        alert("Nova senha tem que ter no minimo 6 caracteres");
    }
}

    function criptografar(campo){
        var dado = campo.value;
        var data = {dado:dado};
        $.post(
            "../../php/criptografar.php",
            data,
            function(senhaCriptografada){
                senhaAtual = senhaCriptografada;
            }
            );
        
    }
    function criptografia(campo){
        var dado = campo;
        var data = {dado:dado};
        $.post(
            "../../php/criptografar.php",
            data,
            function(senhaCriptografada){
                senha = senhaCriptografada;
            }
            );

    }
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