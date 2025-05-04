<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">
    <link rel="stylesheet" href="../Encabezado/Style-encabezado.css">
    <link rel="stylesheet" href="../Encabezado/menu.css">
    <link rel="stylesheet" href="../Encabezado/carpeta/Style - Buttom.css">
    <link rel="stylesheet" href="Style.css">
    
    <title>Capybara</title>

</head>
<body>

    <div>
        <?php include '../Encabezado/encabezado.php'; ?>
    </div>


    <div class="vidio" style="margin-top: 10%;">

        <div class="videoPrincipal">
            <video controls class="video" id="videoPlayer">
                <source id="videoSource" src="" type="video/mp4">
            </video>
        </div>


        <div class="tituloVideo" id="TituloPlayer">
            <p id="TituloSource"></p>
        </div>
        

        <div class="descripcion" id="descripcionPlayer">
            <p id="descripcionSource"></p>
        </div>
        
    </div>

    
        <div class="recomendaciones" style="margin-top: 10%;">
        <div>

            <p class="NoticiasRecomendadas"> VIDEOS RECOMENDADAS </p>

            <div class="separacionNoticias">
                <a href="VideoPrincipal.php" onclick="selectVideo('../../Imagenes/Y2meta.app - DAN DA DAN Opening _ Otonoke by Creepy Nuts.mp4');
                                                       selectTitulo('DanDaDan');
                                                       selectDescripcion('descripcion')">

                    <div class="contenedr-ti-articulo">
                        <div class="articulo">
                            <video class="imgArticulos" poster="../../Imagenes/DAN DA DAN Opening _ Otonoke by Creepy Nuts - frame at 0m2s.jpg">
                                <source src="../../Imagenes/Y2meta.app - DAN DA DAN Opening _ Otonoke by Creepy Nuts.mp4">
                            </video>
                        </div>
                    
                        <div class="tituloArticulo">
                            <p class="ti">El openig de DanDaDan es "tendencia"</p>
                            <p class="tagss">Musica</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="separacionNoticias">
                <a href="VideoPrincipal.php" onclick="selectVideo('../../Imagenes/Y2meta.app-d4vd - Feel It (Lyrics_Sub Español).mp4');
                                                        selectTitulo('El tema de d4vd llamdo fell it es tendencia en Tik Tok');
                                                        selectDescripcion('descripcion')">

                    <div class="contenedr-ti-articulo">
                        <div class="articulo">
                            <video class="imgArticulos" poster="../../Imagenes/Y2meta.app-d4vd - Feel It (Lyrics_Sub Español) - frame at 0m3s.jpg">
                                <source src="../../Imagenes/Y2meta.app-d4vd - Feel It (Lyrics_Sub Español).mp4">
                            </video>
                        </div>
                    
                        <div class="tituloArticulo">
                            <p class="ti">El tema de "d4vd" llamdo "fell it" es tentencia en Tik Tok</p>
                            <p class="tagss">Musica</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="separacionNoticias">
                <a href="VideoPrincipal.php" onclick="selectVideo('../../Imagenes/Peter La Anguila CHILENO OFICIAL!! 2013 - elias muñoz (360p, h264, youtube).mp4')">
                    <div class="contenedr-ti-articulo">
                        <div class="articulo">
                            <video class="imgArticulos">
                                <source src="../../Imagenes/Peter La Anguila CHILENO OFICIAL!! 2013 - elias muñoz (360p, h264, youtube).mp4">
                            </video>
                        </div>
                    
                        <div class="tituloArticulo">
                            <p class="ti">No tengo mas videos de prueba</p>
                            <p class="tagss">Musica</p>
                        </div>
                    </div>
                </a>
            </div>



        </div>
    </div>

    <script src="../Video/Script.js"></script>
    <script src="../Video/Script2.js"></script>
    <script src="../Encabezado/carpeta/modo_oscuro.js"></script>
    
</body>
</html>