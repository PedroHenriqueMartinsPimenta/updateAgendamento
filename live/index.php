<?php
    if(isset($_GET['sala'])){
        $sala = $_GET['sala'];
        ?>
            <!DOCTYPE html>
            <html>
            <head>
                <meta name="viewport" content="width=device-width">
                <title>Live - Agendamento de equipamentos</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <script src="https://meet.jit.si/external_api.js"></script>
                <style>
                    iframe{
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        width: 90%;
                        height: 90%;
                    }
                </style>
                <script>
                    window.screen = null;
                    console.log(window.documentElements);
                </script>
            </head>
            <body>
                   <?php
                        if($_GET['type'] == 1){
                            ?>
                            <script>
                                var api;
                                 function gerateFrame(sala){
                                    var domain = "meet.jit.si";
                                    var options = {
                                        roomName: sala,
                                        width: '90%',
                                        height: '90%',
                                        parentNode: undefined,
                                        configOverwrite: {
                                            disableDeepLinking: true
                                        },
                                        interfaceConfigOverwrite: {
                                            filmStripOnly: false
                                        },
                                        devices: [ false ? 'video' : 'desktop' ]
                                    }
                                     api = new JitsiMeetExternalAPI(domain, options);
                                     setInterval(() => {
                                        api.isAudioMuted().then(available => {
                                            if(!available){
                                                api.executeCommand('toggleAudio');
                                            }
                                        });
                                     }, 500);
                                }
                                gerateFrame("<?php echo $sala?>");
                            </script>
                            <?php
                        }else{
                            ?>
                            <script>
                                 function gerateFrame(sala){
                                    var domain = "meet.jit.si";
                                    var options = {
                                        roomName: sala,
                                        width: '90%',
                                        height: '90%',
                                        parentNode: undefined,
                                        configOverwrite: {
                                            disableDeepLinking: true
                                        },
                                        interfaceConfigOverwrite: {
                                            filmStripOnly: false
                                        },
                                        devices: [ false ? 'video' : 'desktop' ]
                                    }
                                    var api = new JitsiMeetExternalAPI(domain, options);
                                }
                                gerateFrame("<?php echo $sala?>");
                            </script>
                            <?php
                        }
                   ?>
            </body>
            </html>            
        <?php
    }else{
        ?>
        <h1>404 - Arquivo não encontrado</h1>
        <?php
    }
?>