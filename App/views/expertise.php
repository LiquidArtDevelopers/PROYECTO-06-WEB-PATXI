<?php
$headerImg1500 = $imgHeader1500 ?? '';
$headerImg1800 = $imgHeader1800 ?? $headerImg1500;
$headerImg2560 = $imgHeader2560 ?? $headerImg1800;
$headerInlineStyle = $headerImg1500 !== ''
    ? "--header-img-1500: url('" . $_ENV['RUTA'] . "/assets/img/vistas" . $headerImg1500 . "'); --header-img-1800: url('" . $_ENV['RUTA'] . "/assets/img/vistas" . $headerImg1800 . "'); --header-img-2560: url('" . $_ENV['RUTA'] . "/assets/img/vistas" . $headerImg2560 . "');"
    : '';

function expertise_asset_url($src) {
    $src = (string)($src ?? '');

    if ($src === '') {
        return 'https://dummyimage.com/1000x700';
    }

    if (str_starts_with($src, '/assets/')) {
        return rtrim($_ENV['RUTA'] ?? '', '/') . $src;
    }

    return $src;
}
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo_title ?></title>
    <meta name="description" content="<?= $seo_description ?>">
    <?php echo vite_tags('src/js/expertise.js'); ?>

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

    <style>
        <?php if ($headerImg1500 !== ''): ?>
        header {
            background-image: var(--header-img-1500);
        }
        <?php endif; ?>
        <?php if ($headerImg1800 !== ''): ?>
        @media only screen and (min-width: 768px) {
            header {
                background-image: var(--header-img-1800);
            }
        }
        <?php endif; ?>
        <?php if ($headerImg2560 !== ''): ?>
        @media only screen and (min-width: 1200px) {
            header {
                background-image: var(--header-img-2560);
            }
        }
        <?php endif; ?>
    </style>

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
    <header style="<?= $headerInlineStyle ?>">
        <h1><?= $hero_h1 ?? '' ?></h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logotipo.svg" alt="<?= $hero_logo_alt ?? '' ?>" title="<?= $hero_logo_title ?? '' ?>">
        </div>
        <a href="<?=$_ENV['RUTA']?><?= $linkContacto ?? '#' ?>" class="boton"><?= $hero_cta_text ?? '' ?></a>
    </header>


    <main>

        <?php foreach (($expertise_sections ?? []) as $section): ?>
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $section->h2 ?? '' ?></h2>
            </div>

            <?php foreach (($section->items ?? []) as $index => $item): ?>
            <article class="art01<?= $index === 1 ? ' upsidedown' : '' ?>">
                <img src="<?= expertise_asset_url($item->img_src ?? '') ?>" alt="<?= $item->img_alt ?? '' ?>" title="<?= $item->img_title ?? '' ?>">
                <div>
                    <h3><?= $item->h3 ?? '' ?></h3>
                    <p><?= $item->p ?? '' ?></p>
                    <a href="<?=$_ENV['RUTA']?><?= $linkContacto ?? '#' ?>" class="moduloBoton02">
                        <span><?= $item->cta_text ?? '' ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?= $item->cta_icon_alt ?? '' ?>" title="<?= $item->cta_icon_title ?? '' ?>">
                    </a>
                </div>
            </article>
            <?php endforeach; ?>

        </section>
        <?php endforeach; ?>

        <!-- CONTACTO GLOBAL -->
        <?php include $appRoot . '/includes/contactoGlobal.php' ?>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
