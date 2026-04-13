<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo_title ?? '' ?></title>
    <meta name="description" content="<?= $seo_description ?? '' ?>">
    <?php echo vite_tags('src/js/productos.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?><?= $url ?>">

    <!-- Indexacion y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $seo_title ?? '' ?>">
    <meta property="og:description" content="<?= $seo_description ?? '' ?>">
    <meta property="og:url" content="<?=$_ENV['RUTA']?><?= $url ?>">
    <meta property="og:image" content="<?=$_ENV['RUTA']?><?= $seo_image ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $seo_title ?? '' ?>">
    <meta name="twitter:description" content="<?= $seo_description ?? '' ?>">
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
            <img src="https://dummyimage.com/500x300" alt="<?= $hero_img_alt ?? '' ?>" title="<?= $hero_img_title ?? '' ?>">
        </div>
        <a href="<?=$_ENV['RUTA']?><?= $linkContacto ?? '#' ?>" class="boton"><?= $hero_cta_text ?? '' ?></a>
    </header>

    <main>


        <section>

            <div class="h2Especial">
                <span></span>
                <h2><?= $section1_h2 ?? '' ?></h2>
            </div>

            <?php foreach (($work_items ?? []) as $index => $item): ?>
            <!-- Articulo 01 -->
            <article class="art01<?= $index === 1 ? ' upsidedown' : '' ?>">
                <img src="<?= $item->img_src ?? 'https://dummyimage.com/1000x700' ?>" alt="<?= $item->img_alt ?? '' ?>" title="<?= $item->img_title ?? '' ?>">
                <div>
                    <h3><?= $item->h3 ?? '' ?></h3>
                    <p><?= $item->p ?? '' ?></p>
                    <a href="<?=$_ENV['RUTA']?><?= $item->href ?? '#' ?>" class="moduloBoton02">
                        <span><?= $item->cta_text ?? '' ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?= $item->cta_icon_alt ?? '' ?>" title="<?= $item->cta_icon_title ?? '' ?>">
                    </a>
                </div>
            </article>
            <?php endforeach; ?>

        </section>


        <section>

            <div class="h2Especial">
                <span></span>
                <h2><?= $section2_h2 ?? '' ?></h2>
            </div>

            <?php foreach (($surface_items ?? []) as $item): ?>
            <!-- Articulo 03 -->
            <article class="art03">

                <h3><?= $item->h3 ?? '' ?></h3>

                <p><?= $item->p1 ?? '' ?></p>

                <p><?= $item->p2 ?? '' ?></p>

                <img src="<?= $item->img_src ?? 'https://dummyimage.com/1500x900' ?>" alt="<?= $item->img_alt ?? '' ?>" title="<?= $item->img_title ?? '' ?>">

            </article>
            <?php endforeach; ?>

        </section>

        <!-- Experiencia -->
        <section>
            <!-- Articulo 10-->
            <article class="art10">
                <div class="h2Especial">
                    <span></span>
                    <h2><?= $section3_h2 ?? '' ?></h2>
                </div>
                <p><?= $section3_p ?? '' ?></p>
                <div class="matrix-items">
                    <?php foreach (($space_items ?? []) as $item): ?>
                    <div class="ficha">
                        <img src="<?= $item->img_src ?? 'https://dummyimage.com/50x50' ?>" alt="<?= $item->img_alt ?? '' ?>">
                        <h3><?= $item->h3 ?? '' ?></h3>
                        <p><?= $item->p ?? '' ?></p>
                    </div>
                    <?php endforeach; ?>
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
