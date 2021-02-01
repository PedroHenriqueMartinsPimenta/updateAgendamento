<?php
    session_start();
    if(isset($_SESSION['CPF'])){
        ?>
            <!DOCTYPE html>
            <html>
            <head>
                <title>Live - Agendamento de equipamentos</title>
                <meta name="viewport" content="width=device-width">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <style>
                    iframe{
                        position: fixed;
                        left:0;
                        width: 100%;
                        height: 100%;
                        z-index:0;
                        margin:0 auto;
                        border:0;
                    }
                    div {
                        z-index:1
                    }
                </style>
            </head>
            <body>
                <div class="container-fluid">
                    <div class="row" id="container-link">
                        <div class="col-12">
                        	<iframe src="" allow="camera;microphone" ></iframe>
                        </div>
                    </div>
                </div>
                <script>
                	console.log(navigator)
                	var max = 100000000;
                	var min = 10000;
                	var sala = Math.random() * (max - min) + min;
                	document.querySelector('iframe').src = "https://meet.jit.si/" + sala;
                </script>
            </body>
            </html>
        <?php
    }else{
        ?>
        <h1>404 - Arquivo não encontrado</h1>
        <?php
    }
?>