<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo_title ?></title>
    <meta name="description" content="<?= $seo_description ?>">
    <?php echo vite_tags('src/js/quienesSomos.js'); ?>

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
        <a href="<?=$_ENV['RUTA']?><?= $linkContacto ?? '#' ?>" class="boton"><?= $hero_cta_text ?? '' ?></a>
    </header>

    <main>

        <!-- Cercania -->
        <section>

            <!-- articulo 07 -->
            <article class="art07">
                <div class="h2Especial">
                    <span></span>
                    <h2><?= $section1_h2 ?? '' ?></h2>
                </div>

                <img
                srcset="
                <?=$_ENV['RUTA']?>/assets/img/vistas/trato-cercano-1500.avif 1500w,
                <?=$_ENV['RUTA']?>/assets/img/vistas/trato-cercano-1800.avif 1800w,
                <?=$_ENV['RUTA']?>/assets/img/vistas/trato-cercano-2560.avif 2560w
                "
                sizes="
                (width <= 900px) 1500px,
                (width <= 1500px) 1800px,
                2560px
                "
                src="https://dummyimage.com/900x900"
                width="900"
                alt="<?= $section1_img_alt ?? '' ?>"
                title="<?= $section1_img_title ?? '' ?>">

                <p><?= $section1_p1 ?? '' ?></p>

                <p><?= $section1_p2 ?? '' ?></p>

                <a href="<?=$_ENV['RUTA']?><?= $linkContacto ?? '#' ?>" class="boton"><?= $section1_cta_text ?? '' ?></a>

            </article>

        </section>

        <!-- Compromiso -->
        <section>
            <!-- articulo 09 -->
            <article class="art09">

                <div class="h2Especial">
                    <span></span>
                    <h2><?= $section2_h2 ?? '' ?></h2>
                </div>

                <div class="art09-content">

                    <?php foreach (($about_list_groups ?? []) as $group): ?>
                    <div class="contenedor-lista">
                        <h3><?= $group->h3 ?? '' ?></h3>
                        <ul>
                            <?php foreach (($group->items ?? []) as $item): ?>
                            <li>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="<?= $group->icon_alt ?? '' ?>" title="<?= $group->icon_title ?? '' ?>">
                                <span><?= $item ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>

                </div>

            </article>
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
                    <?php foreach (($experience_items ?? []) as $item): ?>
                    <div class="ficha">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system<?= $item->icon ?? '' ?>" alt="<?= $item->img_alt ?? '' ?>">
                        <h3 class="sub-header"><?= $item->h3 ?? '' ?></h3>
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
