<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros productos panaderos</title>
    <meta name="description" content="">
    <?php echo vite_tags('src/js/productos.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?><?= $url ?>">

    <!-- Indexacion y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Nuestros productos panaderos">
    <meta property="og:description" content="">
    <meta property="og:url" content="<?=$_ENV['RUTA']?><?= $url ?>">
    <meta property="og:image" content="<?=$_ENV['RUTA']?><?= $seo_image ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Nuestros productos panaderos">
    <meta name="twitter:description" content="">
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
        <h1>Servicios de pintura para viviendas y comunidades</h1>
        <div>            
            <img src="https://dummyimage.com/500x300" alt="">
        </div>
        <a href="" class="boton">CTA</a>    
    </header>

    <main>


        <section>
            
            <div class="h2Especial">
                <span></span>
                <h2>Qué trabajos de pintura realizo</h2>
            </div>

            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Pintura de pisos, paredes y techos</h3>
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
                    <h3>Pintura de balcones, fachadas y garajes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Módulo Botón 02</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Pintura de superficies y zonas de uso frecuente</h3>
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
                <h2>Tratamientos y preparación de superficies</h2>
            </div>

            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Humedades y protección de paredes expuestas</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro impedit deleniti cupiditate laudantium facere explicabo quo doloremque amet, molestias molestiae cum beatae, dolorum temporibus similique itaque dolore. Assumenda, possimus laborum.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae dolor a asperiores recusandae necessitatibus. Consequatur, molestiae ducimus? Eum, assumenda labore.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>

            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Eliminación de gotelé y alisado</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro impedit deleniti cupiditate laudantium facere explicabo quo doloremque amet, molestias molestiae cum beatae, dolorum temporibus similique itaque dolore. Assumenda, possimus laborum.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae dolor a asperiores recusandae necessitatibus. Consequatur, molestiae ducimus? Eum, assumenda labore.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>

            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Preparación y saneado antes de pintar</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro impedit deleniti cupiditate laudantium facere explicabo quo doloremque amet, molestias molestiae cum beatae, dolorum temporibus similique itaque dolore. Assumenda, possimus laborum.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae dolor a asperiores recusandae necessitatibus. Consequatur, molestiae ducimus? Eum, assumenda labore.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

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
                    <h2>Aplicaciones según el tipo de espacio</h2>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus ipsum libero saepe voluptatem unde sequi quas corporis quibusdam debitis odit ea, asperiores facere ullam ab dolores perspiciatis sapiente aliquid officia nisi corrupti voluptatibus provident laboriosam similique deleniti. Consequuntur, explicabo id amet corrupti at reiciendis, ullam eaque asperiores est officiis sint?</p>
                <div class="matrix-items">
                    <div class="ficha">
                        <img src="https://dummyimage.com/50x50" alt="">
                        <h3>Viviendas particulares</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt totam excepturi officia ipsam aut illo recusandae placeat, neque ut inventore.</p>
                    </div>
                    <div class="ficha">
                        <img src="https://dummyimage.com/50x50" alt="">
                        <h3>Comunidades y zonas comunes</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt totam excepturi officia ipsam aut illo recusandae placeat, neque ut inventore.</p>
                    </div>
                    <div class="ficha">
                        <img src="https://dummyimage.com/50x50" alt="">
                        <h3>Garajes y espacios exteriores</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt totam excepturi officia ipsam aut illo recusandae placeat, neque ut inventore.</p>
                    </div>                    
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

