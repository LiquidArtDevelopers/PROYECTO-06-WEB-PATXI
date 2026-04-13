<?php
$contactPhone = 'tel:+34943123123';
$contactEmail = 'mailto:aranaz@webda.eus';
$contactUrl = $_ENV['RUTA'] . (($lang ?? 'es') === 'eu' ? '/eu/kontaktua' : '/es/contacto');
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo_title ?></title>
    <meta name="description" content="<?= $seo_description ?>">

    <!-- ASIGNACION DE ARCHIVO CSS (MINIFICADO) A ESTE HTML -->
    <?php echo vite_tags('src/js/contacto.js'); ?>

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

    <!-- HERO -->
    <header>
        <h1><?= $hero_h1 ?? '' ?></h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logotipo.svg" alt="<?= $hero_logo_alt ?? '' ?>" title="<?= $hero_logo_title ?? '' ?>">
        </div>
        <a href="<?= $contactPhone ?>" class="boton"><?= $hero_cta_text ?? '' ?></a>
    </header>

    <main>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $section1_h2 ?? '' ?></h2>
            </div>

            <!-- intro -->
            <!-- artículo 05 -->
            <article class="art05">
                <h3><?= $art05_h3 ?? '' ?></h3>
                <p><?= $art05_p1 ?? '' ?></p>
                <p><?= $art05_p2 ?? '' ?></p>
                <a href="#hitoForm" class="boton"><?= $art05_cta_text ?? '' ?></a>
            </article>
            
        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $section2_h2 ?? '' ?></h2>
            </div>

            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="<?= $art01_1_img_alt ?? '' ?>" title="<?= $art01_1_img_title ?? '' ?>">
                <div>
                    <h3><?= $art01_1_h3 ?? '' ?></h3>
                    <p><?= $art01_1_p ?? '' ?></p>
                </div>
            </article>

            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="<?= $art01_2_img_alt ?? '' ?>" title="<?= $art01_2_img_title ?? '' ?>">
                <div>
                    <h3><?= $art01_2_h3 ?? '' ?></h3>
                    <p><?= $art01_2_p ?? '' ?></p>
                </div>
            </article>
        </section>

        <div id="hitoForm"></div>
        <!-- CONTACTO GLOBAL -->
        <?php include $appRoot . '/includes/contactoGlobal.php' ?>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>


</html>
