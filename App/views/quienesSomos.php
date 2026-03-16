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
        <h1>Patxi, profesional de pintura y restauración</h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logotipo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton">CTA</a>
    </header>

    <main>

        <!-- Cercanía -->
        <section>

            <!-- artículo 07 -->
            <article class="art07">
                <!-- <h2>Trato cercano y atención directa</h2> -->
                <!-- H2 especial -->
                <div class="h2Especial">
                    <span></span>
                    <h2>Trato cercano y atención directa</h2>
                </div>

                <img
                srcset="
                https://dummyimage.com/900x900 900w,
                https://dummyimage.com/1800x1100 1800w,
                https://dummyimage.com/2560x1200 2560w
                "
                sizes="
                (width <= 900px) 800px,
                (width <= 1500px) 1200px,
                2560px
                "
                src="https://dummyimage.com/900x900"
                width="900"
                alt="" 
                title="">

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum voluptatum natus ea veritatis harum qui eaque atque exercitationem laudantium? Inventore illum explicabo vero error laborum beatae atque eligendi fugit possimus repudiandae, dolor cupiditate itaque tempore! Et maxime, laboriosam consectetur, similique sunt corporis eum eveniet officia rerum ducimus molestias dolorum libero.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas pariatur necessitatibus optio inventore esse ipsum ad eveniet sequi iusto distinctio enim assumenda nostrum explicabo facere quo numquam, quod eius hic.</p>

                <a href="" class="boton">CTA</a>

            </article>

        </section>

        <!-- Compromiso -->
        <section>
            <!-- artículo 09 -->
            <article class="art09">

                <!-- <h3>Artículo 09</h3> -->
                <!-- H2 especial -->
                <div class="h2Especial">
                    <span></span>
                    <h2>Compromiso con cada trabajo</h2>
                </div>

                <div>

                    <div class="contenedor-lista">
                    <h3>Cuidado por el detalle</h3>
                    <ul>
                        <li>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="" title="">
                        <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="" title="">
                        <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="" title="">
                        <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="" title="">
                        <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="" title="">
                        <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                    </ul>
                    </div>

                    <div class="contenedor-lista">
                    <h3>Respeto por la vivienda o el espacio de trabajo</h3>
                    <ul>
                        <li>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="" title="">
                        <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="" title="">
                        <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="" title="">
                        <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="" title="">
                        <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                        <li>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="" title="">
                        <span>Lorem ipsum dolor sit amet.</span>
                        </li>
                    </ul>
                    </div>

                </div>

            </article>
        </section>

        <!-- Experiencia -->
        <section>
            <!-- Artículo 10-->
            <article class="art10">
                <!-- <h3>Artículo 10</h3> -->
                    <!-- H2 especial -->
                <div class="h2Especial">
                    <span></span>
                    <h2>Experiencia en pintura y restauración</h2>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus ipsum libero saepe voluptatem unde sequi quas corporis quibusdam debitis odit ea, asperiores facere ullam ab dolores perspiciatis sapiente aliquid officia nisi corrupti voluptatibus provident laboriosam similique deleniti. Consequuntur, explicabo id amet corrupti at reiciendis, ullam eaque asperiores est officiis sint?</p>
                <div class="matrix-items">
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="">
                    <h3>Viviendas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt totam excepturi officia ipsam aut illo recusandae placeat, neque ut inventore.</p>
                    </div>
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="">
                    <h3>Comunidades</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt totam excepturi officia ipsam aut illo recusandae placeat, neque ut inventore.</p>
                    </div>
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="">
                    <h3>Pisos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt totam excepturi officia ipsam aut illo recusandae placeat, neque ut inventore.</p>
                    </div>
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="">
                    <h3>Garajes</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt totam excepturi officia ipsam aut illo recusandae placeat, neque ut inventore.</p>
                    </div>
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="">
                    <h3>Locales</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt totam excepturi officia ipsam aut illo recusandae placeat, neque ut inventore.</p>
                    </div>
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="">
                    <h3>Trasteros</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt totam excepturi officia ipsam aut illo recusandae placeat, neque ut inventore.</p>
                    </div>
                    <!-- <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="">
                    <h3>Encabezado h3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt totam excepturi officia ipsam aut illo recusandae placeat, neque ut inventore.</p>
                    </div>
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="">
                    <h3>Encabezado h3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt totam excepturi officia ipsam aut illo recusandae placeat, neque ut inventore.</p>
                    </div>
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="">
                    <h3>Encabezado h3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt totam excepturi officia ipsam aut illo recusandae placeat, neque ut inventore.</p>
                    </div> -->
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

