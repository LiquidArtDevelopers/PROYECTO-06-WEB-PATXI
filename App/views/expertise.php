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
        <h1>Trabajos realizados</h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logotipo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton">CTA</a>
    </header>


    <main>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Donostia - San Sebastián</h2>
            </div>


            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

            <!-- Artículo 01 -->
            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Andoain</h2>
            </div>


            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

            <!-- Artículo 01 -->
            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

        </section>


        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Lasarte-Oria</h2>
            </div>


            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

            <!-- Artículo 01 -->
            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Usurbil - Aginaga - Txokoalde</h2>
            </div>


            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

            <!-- Artículo 01 -->
            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Orio</h2>
            </div>


            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

            <!-- Artículo 01 -->
            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Zarautz</h2>
            </div>


            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

            <!-- Artículo 01 -->
            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Artículo 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
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

