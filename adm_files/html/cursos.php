<?php 
    include_once('../../php/conexao.php');
    session_start();
    if(isset($_SESSION['CPF']) && $_SESSION['PERMISSAO'] == 1){
    $cpf = $_SESSION['CPF'];
    $permissao = $_SESSION['PERMISSAO'];
?>
<!DOCTYPE html>
<!-- saved from url=(0032)http://localhost/diego/usuarios/ -->
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
    <title>Equipamentos – Agendamento de equipamento</title>
<link rel="icon" href="../../img/ceara.png">
<link rel="stylesheet" type="text/css" href="../../bootstrap-4.1.3-dist (1)/css/bootstrap.min.css">
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
                .header,input, select, .btn, #page-top, .footer, .edit, #content-modal, .close{
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
    </style>
    </head>

<body class="page-template-default page page-id-104 mesmerize-inner-page">

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
<li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="../../php/sair.php">Sair</a></li>
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
            <div class="background-overlay"></div>                                  <div class="inner-header-description gridContainer">
        <div class="row header-description-row">
    <div class="col-xs col-xs-12">
        <h1 class="hero-title">
            Cursos      
         </h1>
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
            <div id="post-104" class="post-104 page type-page status-publish hentry">
     <div>
        <button class="btn btn-dark" id="cadastrar">Cadastrar</button>
        <button class="btn btn-primary" id="imprimir">Imprimir</button>
        <div class="content" id="content-modal" style="display:none">    
    <div class="form">
        <form action="../../php/addCurso.php" method="post" enctype="multipart/form-data">
            <p>Adicionar curso</p>
            <input type="text" required name="descricao" placeholder="Descrição equipamento" class="form-control" >
            
            <input type="submit" value="Cadastrar" class="btn btn-success">
        </form>
    </div>
<div>

     </div>
    </div>
        </div>
    </div>
<div style=" max-width: 100%;overflow: scroll">
<table class="table" style="margin-top:20px">
  <thead class="thead-dark">
    <tr>
      <th scope="col" id="icon">Codigo</th>
      <th scope="col" id="desc">Descrição</th>
      <th scope="col" class="td">Remover</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        $sql = "SELECT * FROM TURMA ORDER BY DESCRICAO  ASC";
        $query = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($query)){
      ?>
    <tr>
      <th scope="row" id="icon"><?php echo $row['CODIGO'] ?></th>
      <td id="desc"><?php echo $row['DESCRICAO'] ?></td>
      <td class="td"><a href="../../php/delete turma.php?codigo=<?php echo $row['CODIGO'] ?>" title="deletar equipamento" class="btn btn-outline-danger">Remover</a></td>
    </tr>
    <?php 
        }
    ?>
  </tbody>
</table>
</div>
</div>
</div>
</div>
    
    </div>
<script type="text/javascript" defer="defer" src="./usuarios_files/imagesloaded.min.js.download"></script>
<script type="text/javascript" defer="defer" src="./usuarios_files/masonry.min.js.download"></script>
<script type="text/javascript" defer="defer" src="./usuarios_files/theme.bundle.min.js.download"></script>
<script type="text/javascript" src="./usuarios_files/theme-child.js.download"></script>
<script type="text/javascript" defer="defer" src="./usuarios_files/wp-embed.min.js.download"></script>
<script type="text/javascript" src="../../jquery-ui-1.12.1/jquery-3.3.1.js"></script>
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
<script>
    
        
    function fMasc(objeto,mascara) {
        obj=objeto
        masc = mascara
        setTimeout("fMascEx()",1)
    }
    function fMascEx() {
        obj.value=masc(obj.value)
    }
    function mTel(tel) {
        tel=tel.replace(/\D/g,"")
        tel=tel.replace(/^(\d)/,"($1")
        tel=tel.replace(/(.{3})(\d)/,"$1)$2")
        if(tel.length == 9) {
            tel=tel.replace(/(.{1})$/,"-$1")
        } else if (tel.length == 10) {
            tel=tel.replace(/(.{2})$/,"-$1")
        } else if (tel.length == 11) {
            tel=tel.replace(/(.{3})$/,"-$1")
        } else if (tel.length == 12) {
            tel=tel.replace(/(.{4})$/,"-$1")
        } else if (tel.length > 12) {
            tel=tel.replace(/(.{4})$/,"-$1")
        }
        return tel;
    }
    function mCNPJ(cnpj){
        cnpj=cnpj.replace(/\D/g,"")
        cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
        cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
        cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
        cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
        return cnpj
    }
    function mCPF(cpf){
        cpf=cpf.replace(/\D/g,"")
        cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
        cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
        cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
        return cpf
    }
    function mCEP(cep){
        cep=cep.replace(/\D/g,"")
        cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
        cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
        return cep
    }
    function mNum(num){
        num=num.replace(/\D/g,"")
        return num
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