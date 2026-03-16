

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>">
    <?php echo vite_tags('src/js/producto.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?><?= $url ?>">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="<?=$description?>">
    <meta property="og:url" content="<?=$_ENV['RUTA']?><?= $url ?>">
    <meta property="og:image" content="<?=$_ENV['RUTA']?><?= $seo_image ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?=$title?>">
    <meta name="twitter:description" content="<?=$description?>">
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
        <h1>h1 variable</h1>
        <div>            
            <img src="https://dummyimage.com/500x300" alt="">
        </div>
        <a href="" class="boton">CTA</a>    
    </header>

    <main>

        <section>

            <div class="h2Especial">
                <span></span>
                <h2>h2 variable</h2>
            </div>

            <!-- Artículo 13-->
            <article class="art13">
                <img
                    alt="" 
                    title=""
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
                    <h3>Artículo 13</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe et harum exercitationem nihil quam repellat itaque maiores inventore, nulla earum cumque, optio quibusdam repudiandae nesciunt aliquam? Nisi nam asperiores optio omnis eaque blanditiis totam iusto, magnam enim tenetur soluta quo nemo? Libero voluptatum ullam labore doloribus eius veritatis corrupti in.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ullam quam delectus error quis nihil fugiat cupiditate officiis esse, dicta praesentium illo ducimus. Dolorum adipisci, nesciunt expedita non officia ratione, saepe soluta nihil eius odit neque eaque vitae illo deserunt.</p>
                    <a href="#" class="boton">CTA</a>
                </div>
            </article>

            <!-- Artículo 13 invertido -->
            <article class="art13 upsidedown">
                <img
                    alt="" 
                    title=""
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
                    <h3>Articulo 13 invertido (class upsidedown)</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe et harum exercitationem nihil quam repellat itaque maiores inventore, nulla earum cumque, optio quibusdam repudiandae nesciunt aliquam? Nisi nam asperiores optio omnis eaque blanditiis totam iusto, magnam enim tenetur soluta quo nemo? Libero voluptatum ullam labore doloribus eius veritatis corrupti in.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ullam quam delectus error quis nihil fugiat cupiditate officiis esse, dicta praesentium illo ducimus. Dolorum adipisci, nesciunt expedita non officia ratione, saepe soluta nihil eius odit neque eaque vitae illo deserunt.</p>
                    <a href="#" class="boton">CTA</a>
                </div>
            </article>

        </section>

        <section>

            <!-- artículo 09 -->
            <article class="art09">

                <!-- <h3>Artículo 09</h3> -->
                <div class="h2Especial">
                    <span></span>
                    <h2>h2 variable</h2>
                </div>

                <div>
                    <div class="contenedor-lista">
                        <h3>Atención personalizada</h3>
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
                        <h3>Los mejores ingredientes</h3>
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

            <!-- Artículo 11 -->
            <article class="art11">
                <div>
                    <img src="https://dummyimage.com/900x900" alt="">
                </div>

                <div>
                    <img src="https://dummyimage.com/900x900" alt="">
                </div>

                <div>
                    <img src="https://dummyimage.com/900x900" alt="">
                </div>

                <div>
                    <img src="https://dummyimage.com/900x900" alt="">
                </div>

                <div>
                    <img src="https://dummyimage.com/900x900" alt="">
                </div>

                <div>
                    <img src="https://dummyimage.com/900x900" alt="">
                </div>

                <div>
                    <img src="https://dummyimage.com/900x900" alt="">
                </div>

                <div>
                    <img src="https://dummyimage.com/900x900" alt="">
                </div>

            </article>

        </section>

        <section>

            <div class="h2Especial">
                <span></span>
                <h2>h2 variable</h2>
            </div>

            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Artículo 03</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro impedit deleniti cupiditate laudantium facere explicabo quo doloremque amet, molestias molestiae cum beatae, dolorum temporibus similique itaque dolore. Assumenda, possimus laborum.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae dolor a asperiores recusandae necessitatibus. Consequatur, molestiae ducimus? Eum, assumenda labore.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>
            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Artículo 03</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro impedit deleniti cupiditate laudantium facere explicabo quo doloremque amet, molestias molestiae cum beatae, dolorum temporibus similique itaque dolore. Assumenda, possimus laborum.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae dolor a asperiores recusandae necessitatibus. Consequatur, molestiae ducimus? Eum, assumenda labore.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>
        </section>
    


        <!-- CONTACTO GLOBAL -->
        <?php include $appRoot . '/includes/contactoGlobal.php' ?>


    </main>
    


    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
