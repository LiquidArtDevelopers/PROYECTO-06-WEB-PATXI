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
        <h1><?= $hero_h1 ?? '' ?></h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logotipo.svg" alt="<?= $hero_logo_alt ?? '' ?>" title="<?= $hero_logo_title ?? '' ?>">
        </div>
        <a href="<?=$_ENV['RUTA']?><?= $linkContacto ?? '#' ?>" class="boton" id="ctaHeader"><?= $hero_cta_text ?? '' ?></a>
        <video autoplay muted loop playsinline preload="metadata" style="width: 100vw;">
            <source src="<?=$_ENV['RUTA']?>/assets/img/videos/6474072-uhd_2560_1440_25fps.webm" type="video/webm">
        </video>
    </header>

    <main>

        <!-- TODO: Dar de alta una nueva apikey en el gestor de cookies cookie lad, e implementar aquí el script -->

        <!-- TODO: Imágenes pendientes. Bajar de Unsplash, maquear y subir al proyecto, sino, mientras tanto usar links directos de unsplash según el contexto -->

        <!-- TODO: Configurar TagManager y GA4 para que funcione bien con el gestor de cookies y respete la normativa-->

        <!-- Seccion quienes somos -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $intro_section_h2 ?? '' ?></h2>
            </div>

            <!-- Articulo 01 Cercania y trato -->
            <article class="art01">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/profesional-de-confianza-1500.avif" alt="<?= $art01_img_alt ?? '' ?>" title="<?= $art01_img_title ?? '' ?>">
                <div>
                    <h3><?= $art01_h3 ?? '' ?></h3>
                    <p><?= $art01_p ?? '' ?></p>
                    <a href="<?=$_ENV['RUTA']?><?= $linkQuienesSomos ?? '#' ?>" class="moduloBoton02">
                        <span><?= $art01_cta_text ?? '' ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?= $art01_cta_icon_alt ?? '' ?>" title="<?= $art01_cta_icon_title ?? '' ?>">
                    </a>
                </div>
            </article>

            <!-- Articulo 06 -->
            <article class="art06">
                <div>
                    <h3><?= $art06_h3 ?? '' ?></h3>
                    <p><?= $art06_p ?? '' ?></p>
                    <a href="<?=$_ENV['RUTA']?><?= $linkContacto ?? '#' ?>" title="<?= $art06_cta_title ?? '' ?>" class="boton"><?= $art06_cta_text ?? '' ?></a>
                </div>
            </article>

        </section>

        <!-- Seccion servicios -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $services_section_h2 ?? '' ?></h2>
            </div>

            <!-- Articulo 13 -->
            <article class="art13">
                <img
                    alt="<?= $painting_img_alt ?? '' ?>"
                    title="<?= $painting_img_title ?? '' ?>"
                    srcset="
                    <?=$_ENV['RUTA']?>/assets/img/vistas/trabajos-de-pintura-para-interiores-y-exteriores-v2-1500.avif 1500w,
                    <?=$_ENV['RUTA']?>/assets/img/vistas/trabajos-de-pintura-para-interiores-y-exteriores-v2-1100.avif 1100w
                    "
                    sizes="
                    (max-width:800px) 900px,
                    1500px
                    "
                    src="<?=$_ENV['RUTA']?>/assets/img/vistas/trabajos-de-pintura-para-interiores-y-exteriores-1100.avif"
                >
                <div>
                    <h3><?= $painting_h3 ?? '' ?></h3>
                    <p><?= $painting_p1 ?? '' ?></p>
                    <p><?= $painting_p2 ?? '' ?></p>
                    <a href="<?=$_ENV['RUTA']?><?= $linkPintor ?? '#' ?>" class="boton"><?= $painting_cta_text ?? '' ?></a>
                </div>
            </article>

            <!-- Articulo 13 invertido -->
            <article class="art13 upsidedown">
                <img
                    alt="<?= $wood_img_alt ?? '' ?>"
                    title="<?= $wood_img_title ?? '' ?>"
                    srcset="
                    <?=$_ENV['RUTA']?>/assets/img/vistas/Restauracion-de-muebles-y-elementos-de-madera-1500.avif 1500w,
                    <?=$_ENV['RUTA']?>/assets/img/vistas/Restauracion-de-muebles-y-elementos-de-madera-1100.avif 1100w
                    "
                    sizes="
                    (max-width:800px) 900px,
                    1500px
                    "
                    src="<?=$_ENV['RUTA']?>/assets/img/vistas/Restauracion-de-muebles-y-elementos-de-madera-1100.avif"
                >
                <div>
                    <h3><?= $wood_h3 ?? '' ?></h3>
                    <p><?= $wood_p1 ?? '' ?></p>
                    <p><?= $wood_p2 ?? '' ?></p>
                    <a href="<?=$_ENV['RUTA']?><?= $linkRestaurador ?? '#' ?>" class="boton"><?= $wood_cta_text ?? '' ?></a>
                </div>
            </article>
        </section>

        <!-- Seccion sectores -->
        <section>
            <article class="art02-bis">
                <div class="textos">
                    <div class="h2Especial">
                        <span></span>
                        <h2><?= $sectors_section_h2 ?? '' ?></h2>
                    </div>
                    <p><?= $sectors_p ?? '' ?></p>
                    <a href="<?=$_ENV['RUTA']?><?= $linkContacto ?? '#' ?>" class="moduloBoton02">
                        <span><?= $sectors_cta_text ?? '' ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?= $sectors_cta_icon_alt ?? '' ?>" title="<?= $sectors_cta_icon_title ?? '' ?>">
                    </a>
                </div>

                <div class="imagenes">
                    <a href="<?=$_ENV['RUTA']?><?= $linkPintorPisos ?? '#' ?>" title="<?= $sector_housing_title ?? '' ?>">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/pisos-y-viviendas-particulares-1200.avif" alt="<?= $sector_housing_img_alt ?? '' ?>" title="<?= $sector_housing_title ?? '' ?>">
                        <h3><?= $sector_housing_title ?? '' ?></h3>
                    </a>
                    <a href="<?=$_ENV['RUTA']?><?= $linkPintorBalcones ?? '#' ?>" title="<?= $sector_communities_title ?? '' ?>">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/comunidades-zonas-comunes-1200.avif" alt="<?= $sector_communities_img_alt ?? '' ?>" title="<?= $sector_communities_title ?? '' ?>">
                        <h3><?= $sector_communities_title ?? '' ?></h3>
                    </a>
                    <a href="<?=$_ENV['RUTA']?><?= $linkPintorHumedad ?? '#' ?>" title="<?= $sector_commercial_title ?? '' ?>">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/locales-comerciales-oficinas-1200.avif" alt="<?= $sector_commercial_img_alt ?? '' ?>" title="<?= $sector_commercial_title ?? '' ?>">
                        <h3><?= $sector_commercial_title ?? '' ?></h3>
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
