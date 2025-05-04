<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animation_box.css">
    <link rel="stylesheet" href="carrusel_img_principal.css">
    <link rel="stylesheet" href="carrusel_personal_box.css">
    <link rel="stylesheet" href="../../Encabezado/Style-encabezado.css">
    <link rel="stylesheet" href="../../Encabezado/menu.css">
    <link rel="stylesheet" href="../Encabezado/carpeta/Style - Buttom.css">
    <!--<link rel="stylesheet" href="../archivos css/carrusel_artic_principal.css">-->
    <!--<script src="../archivos Javascript/script_carrusel.js"></script>-->
    <!--<script src="../archivos Javascript/script_prueba.js"></script>-->
    <title>Capybara</title>
</head>
<body>
    

    <div>
        <?php include '../Encabezado/encabezado.php'; ?>
    </div>



    <div class="carrusel_img">
        <div class="carrusel-container-img">
            <div class="carrusel-item02 active">
                <div class="container_items_carrusel con1">
                    <!--Se espera a cambiar esta estructura por un img-->
                </div>
            </div>
            <div class="carrusel-item02">
                <div class="container_items_carrusel con2">
                    <!--Se espera a cambiar esta estructura por un img-->
                </div>
            </div>
            <div class="carrusel-item02">
                <div class="container_items_carrusel con3">
                    <!--Se espera a cambiar esta estructura por un img-->
                </div>
            </div>
        </div>
        <button class="boton boton-prev">&lt;</button>
        <button class="boton boton-next">&gt;</button>
    </div>
    <div class="barra_separadora_informat">
        <!--Es solo una barra objeto-->
    </div>
    <div class="barra_button_carrusel">
        <!--Es solo una barra objeto-->
    </div>
    <section class="Text_information_personal">
        <div class="title_personal">
            <h1><b>Descubre nuestro equipo</b></h1>
        </div>
        <div class="text_personal">
            <p>Aqui puedes hechar un vistaso al perfil de nuestro personal calificado</p>
        </div>
    </section>
    <main>
        <div class="main_box_carrusel">
            <button class="button prev" onclick="prevSlide()">&#10094;</button>
            <div class="carousel-container">
                <div class="carousel-content" id="carousel">
                    <div class="carousel-item">
                        <div class="contenedor">
                            <div class="caja">
                                <div class="circulo"><a href=""></a></div>
                                <div class="texto">¿quieres saber de nuestra historia?</div>
                            </div>
                            <div class="caja">
                                <div class="circulo"><a href=""></a></div>
                                <div class="texto">Descubre la importancia de esta empresa</div>
                            </div>
                            <div class="caja">
                                <div class="circulo"><a href=""></a></div>
                                <div class="texto">¿quieres saber de nuestra historia?</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="contenedor">
                            <div class="caja">
                                <div class="circulo"><a href=""></a></div>
                                <div class="texto">¿quieres saber de nuestra historia?</div>
                            </div>
                            <div class="caja">
                                <div class="circulo"><a href=""></a></div>
                                <div class="texto">Descubre la importancia de esta empresa</div>
                            </div>
                            <div class="caja">
                                <div class="circulo"><a href=""></a></div>
                                <div class="texto">¿quieres saber de nuestra historia?</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="button next" onclick="nextSlide()">&#10095;</button>
        </div>
        <section class="content_argumentes">
            
        </section>
    </main>
    <div class="barra_bottom_main">
        <!--Es solo una barra objeto-->
    </div>
    <div class="barra_top_informat">
        <!--Es solo una barra objeto-->
    </div>

    <section class="Subsection_informat">
        <div class="box_informat">
            <section class="section_box_informat">
                <h2 class="title_informat">
                    Articulo de difucion
                </h2>
                <p class="text_informat">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis voluptatem natus maxime saepe molestiae quibusdam. Necessitatibus cumque nulla tenetur? Vero fugit nam culpa recusandae in, voluptatum beatae iste exercitationem? Quidem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, nobis dolorum aperiam excepturi, esse odit neque porro dolore est fugiat ab. Voluptatibus omnis quod impedit neque in molestiae. Quasi, aliquid?</p>
            </section>
            <aside class="aside_box_informat">

            </aside>
        </div>
        <div class="box_informat">
            <aside class="aside_box_informat">

            </aside>
            <section class="section_box_informat">
                <h2 class="title_informat delado">
                    Articulo de difucion
                </h2>
                <p class="text_informat">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis voluptatem natus maxime saepe molestiae quibusdam. Necessitatibus cumque nulla tenetur? Vero fugit nam culpa recusandae in, voluptatum beatae iste exercitationem? Quidem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, nobis dolorum aperiam excepturi, esse odit neque porro dolore est fugiat ab. Voluptatibus omnis quod impedit neque in molestiae. Quasi, aliquid?</p>
            </section>
        </div>
        <div class="box_informat">
            <section class="section_box_informat">
                <h2 class="title_informat">
                    Articulo de difucion
                </h2>
                <p class="text_informat">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis voluptatem natus maxime saepe molestiae quibusdam. Necessitatibus cumque nulla tenetur? Vero fugit nam culpa recusandae in, voluptatum beatae iste exercitationem? Quidem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, nobis dolorum aperiam excepturi, esse odit neque porro dolore est fugiat ab. Voluptatibus omnis quod impedit neque in molestiae. Quasi, aliquid?</p>
            </section>
            <aside class="aside_box_informat">
                
            </aside>
        </div>
    </section>
    <div class="barra_contactos">
        <!--Es solo una barra objeto-->
    </div>
    <div class="barra_contactos_small">
        <!--Es solo una barra objeto-->
    </div>
    <section class="contactos_calificaciones">
        <div class="contendedor_contactos box_small">
            <div class="box_content_ordinal contacto">

            </div>
            <div class="box_content_ordinal contacto">

            </div>
            <div class="box_content_ordinal contacto">

            </div>
        </div>
        <div class="contenedor_calificaciones box_small">
            <div class="box_content_ordinal calificaciones">

            </div>
            <div class="box_content_ordinal calificaciones">

            </div>
            <div class="box_content_ordinal calificaciones">

            </div>
        </div>
    </section>
    <!--codigo del carrusel principal de la informacion personal-->
    <script src="script_personal_box.js"></script>
    <!--codigo del carrusel principal de imagenes-->
    <script src="scrip_carru_img_principal.js"></script>
    <script src="../Encabezado/carpeta/modo_oscuro.js"></script>
</body>
</html>