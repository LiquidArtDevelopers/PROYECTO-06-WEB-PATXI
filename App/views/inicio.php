<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo_title ?></title>
    <meta name="description" content="<?= $seo_description ?>">
    <?php echo vite_tags('src/js/inicio.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?><?= $url ?>">

    <!-- Indexacion y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $seo_title ?>">
    <meta property="og:description" content="<?= $seo_description ?>">
    <meta property="og:url" content="<?=$_ENV['RUTA']?><?= $url ?>">
    <meta property="og:image" content="<?=$_ENV['RUTA']?><?= $seo_image ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $seo_title ?>">
    <meta name="twitter:description" content="<?= $seo_description ?>">
    <meta name="twitter:url" content="<?=$_ENV['RUTA']?><?= $url ?>">
    <meta name="twitter:image" content="<?=$_ENV['RUTA']?><?= $seo_image ?>">

    <?php
    // Metadatos globales
    include $appRoot . '/includes/metadatos_globales.php'
    ?>

</head>
<body>

    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/body_global.php'
    ?>

    <!-- NAV -->
    <?php include $appRoot . '/includes/nav.php' ?>

    <!-- HERO01 -->
    <header>
        <h1>Pintura y restauración de madera en Donostialdea</h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logotipo.svg" alt="Patxi, pintor y restaurador de madera en Donostialdea" title="Pintura y restauración con Patxi">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton">Solicitar presupuesto</a>
    </header>

    <main>

        <!-- Seccion quienes somos -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Patxi, profesional de confianza para tu vivienda o comunidad</h2>
            </div>

            <!-- Articulo 01 Cercania y trato -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="Patxi trabajando en una vivienda" title="Trabajo de pintura en vivienda">
                <div>
                    <h3>Cercanía y trato directo</h3>
                    <p>Trabajo de forma cercana, con comunicación clara desde el primer día y un presupuesto detallado para que sepas exactamente qué se va a hacer en tu casa, comunidad o local.</p>
                    <a href="<?=$_ENV['RUTA']?>/es/sobre-mi" class="moduloBoton02">
                        <span>Conoce mi forma de trabajar</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a la página sobre mí" title="Sobre mí">
                    </a>
                </div>
            </article>

            <!-- Articulo 06 -->
            <article class="art06">
                <div>
                    <h3>Cuidado por el detalle y los acabados</h3>
                    <p>Cada trabajo se ejecuta con protección de superficies, orden y limpieza. El objetivo es un acabado uniforme, duradero y adaptado al uso real de cada espacio.</p>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" title="Solicitar presupuesto" class="boton">Pedir presupuesto</a>
                </div>
            </article>

        </section>

        <!-- Seccion servicios -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Servicios principales</h2>
            </div>

            <!-- Articulo 13 -->
            <article class="art13">
                <img
                    alt="Trabajos de pintura interior y exterior"
                    title="Servicios de pintura"
                    srcset="
                    https://dummyimage.com/1500x900 1500w,
                    https://dummyimage.com/1100x700 1100w
                    "
                    sizes="
                    (max-width:800px) 900px,
                    1500px
                    "
                    src="https://dummyimage.com/1200x900"
                >
                <div>
                    <h3>Trabajos de pintura para interiores y exteriores</h3>
                    <p>Realizo trabajos de <strong>pintura interior y exterior</strong> en pisos, viviendas completas, comunidades y zonas comunes. Evalúo el estado de paredes y techos para definir el sistema de aplicación más adecuado.</p>
                    <p>Planifico cada fase para reducir molestias, cumplir plazos y entregar un resultado limpio y resistente, tanto en espacios de uso diario como en áreas con más exposición.</p>
                    <a href="<?=$_ENV['RUTA']?>/es/pintor" class="boton">Ver servicios de pintura</a>
                </div>
            </article>

            <!-- Articulo 13 invertido -->
            <article class="art13 upsidedown">
                <img
                    alt="Restauración de muebles y elementos de madera"
                    title="Restauración de madera"
                    srcset="
                    https://dummyimage.com/1500x900 1500w,
                    https://dummyimage.com/1100x700 1100w
                    "
                    sizes="
                    (max-width:800px) 900px,
                    1500px
                    "
                    src="https://dummyimage.com/1200x900"
                >
                <div>
                    <h3>Restauración de muebles y elementos de madera</h3>
                    <p>También me especializo en <strong>restauración de madera</strong>: recuperación de muebles, puertas, barandillas y piezas con desgaste por uso o por paso del tiempo.</p>
                    <p>Aplico procesos de saneado, lijado y protección para devolver funcionalidad y estética, respetando el carácter de cada pieza y su contexto.</p>
                    <a href="<?=$_ENV['RUTA']?>/es/restaurador-muebles-madera" class="boton">Ver restauración de madera</a>
                </div>
            </article>
        </section>

        <!-- Seccion sectores -->
        <section>
            <article class="art02-bis">
                <div class="textos">
                    <div class="h2Especial">
                        <span></span>
                        <h2>Sectores con los que trabajo</h2>
                    </div>
                    <p>Trabajo en pisos particulares, comunidades y locales comerciales. En cada caso adapto el proceso para que el resultado responda a la necesidad real del espacio y su uso diario.</p>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" class="moduloBoton02">
                        <span>Cuéntame qué necesitas</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contacto">
                    </a>
                </div>

                <div class="imagenes">
                    <a href="<?=$_ENV['RUTA']?>/es/pintor/pintar-pisos" title="Pisos y viviendas particulares">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="Trabajos de pintura en pisos y viviendas particulares" title="Pisos y viviendas particulares">
                        <h3>Pisos y viviendas particulares</h3>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/pintor/pintar-balcones-fachadas" title="Comunidades y zonas comunes">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="Pintura en comunidades y zonas comunes" title="Comunidades y zonas comunes">
                        <h3>Comunidades y zonas comunes</h3>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/pintor/tratamientos-humedad" title="Locales comerciales">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="Tratamientos y pintura en locales comerciales" title="Locales comerciales">
                        <h3>Locales comerciales</h3>
                    </a>
                </div>
            </article>
        </section>

        <!-- CONTACTO GLOBAL -->
        <?php include $appRoot . '/includes/contactoGlobal.php' ?>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>