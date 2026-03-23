<?php
$headerImg1500 = $imgHeader1500 ?? $imgHeroSrc ?? '';
$headerImg1800 = $imgHeader1800 ?? $headerImg1500;
$headerImg2560 = $imgHeader2560 ?? $headerImg1800;
$headerInlineStyle = $headerImg1500 !== ''
    ? "background-image: url('" . $_ENV['RUTA'] . "/assets/img/vistas" . $headerImg1500 . "');"
    : '';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? '' ?></title>
    <meta name="description" content="<?= $description ?? '' ?>">
    <?php echo vite_tags('src/js/producto.js'); ?>
    <style>
        header {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        <?php if ($headerImg1800 !== ''): ?>
        @media only screen and (min-width: 768px) {
            header {
                background-image: url('<?=$_ENV['RUTA']?>/assets/img/vistas<?= $headerImg1800 ?>');
            }
        }
        <?php endif; ?>
        <?php if ($headerImg2560 !== ''): ?>
        @media only screen and (min-width: 1200px) {
            header {
                background-image: url('<?=$_ENV['RUTA']?>/assets/img/vistas<?= $headerImg2560 ?>');
            }
        }
        <?php endif; ?>
    </style>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?><?= $url ?>">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $title ?? '' ?>">
    <meta property="og:description" content="<?= $description ?? '' ?>">
    <meta property="og:url" content="<?=$_ENV['RUTA']?><?= $url ?>">
    <meta property="og:image" content="<?=$_ENV['RUTA']?><?= $seo_image ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $title ?? '' ?>">
    <meta name="twitter:description" content="<?= $description ?? '' ?>">
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
    <header style="<?= $headerInlineStyle ?>">
        <h1><?= $hero_h1 ?? '' ?></h1>
        <a href="<?= $hero_cta_href ?? '#' ?>" class="boton"><?= $hero_cta_text ?? '' ?></a>
    </header>

    <main>

        <section>

            <div class="h2Especial">
                <span></span>
                <h2><?= $section1_h2 ?? '' ?></h2>
            </div>

            <!-- Artículo 13-->
            <article class="art13">
                <img
                    alt="<?= $art13_1_img_alt ?? '' ?>"
                    title="<?= $art13_1_img_title ?? '' ?>"
                    srcset="
                    <?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgArt13_1_1500 ?? '' ?> 1500w,
                    <?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgArt13_1_1100 ?? '' ?> 1100w
                    "
                    sizes="
                    (max-width:800px) 900px,
                    1500px
                    "
                    src="<?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgArt13_1_src ?? '' ?>"
                >
                <div>
                    <h3><?= $art13_1_h3 ?? '' ?></h3>
                    <p><?= $art13_1_p1 ?? '' ?></p>
                    <p><?= $art13_1_p2 ?? '' ?></p>
                    <a href="<?= $art13_1_cta_href ?? '#' ?>" class="boton"><?= $art13_1_cta_text ?? '' ?></a>
                </div>
            </article>

            <!-- Artículo 13 invertido -->
            <article class="art13 upsidedown">
                <img
                    alt="<?= $art13_2_img_alt ?? '' ?>"
                    title="<?= $art13_2_img_title ?? '' ?>"
                    srcset="
                    <?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgArt13_2_1500 ?? '' ?> 1500w,
                    <?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgArt13_2_1100 ?? '' ?> 1100w
                    "
                    sizes="
                    (max-width:800px) 900px,
                    1500px
                    "
                    src="<?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgArt13_2_src ?? '' ?>"
                >
                <div>
                    <h3><?= $art13_2_h3 ?? '' ?></h3>
                    <p><?= $art13_2_p1 ?? '' ?></p>
                    <p><?= $art13_2_p2 ?? '' ?></p>
                    <a href="<?= $art13_2_cta_href ?? '#' ?>" class="boton"><?= $art13_2_cta_text ?? '' ?></a>
                </div>
            </article>

        </section>

        <section>

            <!-- artículo 09 -->
            <article class="art09">

                <div class="h2Especial">
                    <span></span>
                    <h2><?= $section2_h2 ?? '' ?></h2>
                </div>

                <div class="art09-content">
                    <div class="contenedor-lista">
                        <h3><?= $list1_h3 ?? '' ?></h3>
                        <ul>
                            <li>
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="<?= $list_icon_alt ?? '' ?>" title="<?= $list_icon_title ?? '' ?>">
                            <span><?= $list1_item_1 ?? '' ?></span>
                            </li>
                            <li>
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="<?= $list_icon_alt ?? '' ?>" title="<?= $list_icon_title ?? '' ?>">
                            <span><?= $list1_item_2 ?? '' ?></span>
                            </li>
                            <li>
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="<?= $list_icon_alt ?? '' ?>" title="<?= $list_icon_title ?? '' ?>">
                            <span><?= $list1_item_3 ?? '' ?></span>
                            </li>
                            <li>
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="<?= $list_icon_alt ?? '' ?>" title="<?= $list_icon_title ?? '' ?>">
                            <span><?= $list1_item_4 ?? '' ?></span>
                            </li>
                            <li>
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="<?= $list_icon_alt ?? '' ?>" title="<?= $list_icon_title ?? '' ?>">
                            <span><?= $list1_item_5 ?? '' ?></span>
                            </li>
                        </ul>
                    </div>

                    <div class="contenedor-lista">
                        <h3><?= $list2_h3 ?? '' ?></h3>
                        <ul>
                            <li>
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="<?= $list_icon_alt ?? '' ?>" title="<?= $list_icon_title ?? '' ?>">
                            <span><?= $list2_item_1 ?? '' ?></span>
                            </li>
                            <li>
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="<?= $list_icon_alt ?? '' ?>" title="<?= $list_icon_title ?? '' ?>">
                            <span><?= $list2_item_2 ?? '' ?></span>
                            </li>
                            <li>
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="<?= $list_icon_alt ?? '' ?>" title="<?= $list_icon_title ?? '' ?>">
                            <span><?= $list2_item_3 ?? '' ?></span>
                            </li>
                            <li>
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="<?= $list_icon_alt ?? '' ?>" title="<?= $list_icon_title ?? '' ?>">
                            <span><?= $list2_item_4 ?? '' ?></span>
                            </li>
                            <li>
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="<?= $list_icon_alt ?? '' ?>" title="<?= $list_icon_title ?? '' ?>">
                            <span><?= $list2_item_5 ?? '' ?></span>
                            </li>
                        </ul>
                    </div>

                </div>

            </article>

            <!-- Artículo 11 -->
            <article class="art11">
                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgGallery_1 ?? '' ?>" alt="<?= $gallery_img_1_alt ?? '' ?>">
                </div>

                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgGallery_2 ?? '' ?>" alt="<?= $gallery_img_2_alt ?? '' ?>">
                </div>

                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgGallery_3 ?? '' ?>" alt="<?= $gallery_img_3_alt ?? '' ?>">
                </div>

                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgGallery_4 ?? '' ?>" alt="<?= $gallery_img_4_alt ?? '' ?>">
                </div>

                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgGallery_5 ?? '' ?>" alt="<?= $gallery_img_5_alt ?? '' ?>">
                </div>

                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgGallery_6 ?? '' ?>" alt="<?= $gallery_img_6_alt ?? '' ?>">
                </div>

                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgGallery_7 ?? '' ?>" alt="<?= $gallery_img_7_alt ?? '' ?>">
                </div>

                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgGallery_8 ?? '' ?>" alt="<?= $gallery_img_8_alt ?? '' ?>">
                </div>

            </article>

        </section>

        <section>

            <div class="h2Especial">
                <span></span>
                <h2><?= $section3_h2 ?? '' ?></h2>
            </div>

            <!-- Artículo 03 -->
            <article class="art03">

                <h3><?= $art03_1_h3 ?? '' ?></h3>

                <p><?= $art03_1_p1 ?? '' ?></p>

                <p><?= $art03_1_p2 ?? '' ?></p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgArt03_1_src ?? '' ?>" alt="<?= $art03_1_img_alt ?? '' ?>" title="<?= $art03_1_img_title ?? '' ?>">

            </article>
            <!-- Artículo 03 -->
            <article class="art03">

                <h3><?= $art03_2_h3 ?? '' ?></h3>

                <p><?= $art03_2_p1 ?? '' ?></p>

                <p><?= $art03_2_p2 ?? '' ?></p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas<?= $imgArt03_2_src ?? '' ?>" alt="<?= $art03_2_img_alt ?? '' ?>" title="<?= $art03_2_img_title ?? '' ?>">

            </article>
        </section>



        <!-- CONTACTO GLOBAL -->
        <?php include $appRoot . '/includes/contactoGlobal.php' ?>


    </main>



    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
