<?php
$contactUrl = $_ENV['RUTA'] . (($lang ?? 'es') === 'eu' ? '/eu/kontaktua' : '/es/contacto');
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
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logotipo.svg" alt="Trabajos de pintura y restauración realizados en Donostialdea" title="Proyectos reales de Patxi">
        </div>
        <a href="<?= $contactUrl ?>" class="boton">Solicitar un presupuesto similar</a>
    </header>


    <main>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Donostia - San Sebastián</h2>
            </div>

            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="Trabajo de pintura interior en vivienda de Donostia" title="Vivienda particular en Donostia">
                <div>
                    <h3>Trabajo realizado #1</h3>
                    <p>Reforma completa de pintura interior en una vivienda familiar con paredes castigadas por uso y pequeños desconchados en techos. Se realizó saneado previo, reparación de fisuras y aplicación de acabado lavable para facilitar mantenimiento. El resultado mejoró luminosidad y uniformidad de todo el piso, manteniendo la vivienda operativa durante la obra con una planificación por estancias.</p>
                    <a href="<?= $contactUrl ?>" class="moduloBoton02">
                        <span>Quiero un resultado similar</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contactar">
                    </a>
                </div>
            </article>

            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="Pintura de portal y escalera comunitaria en Donostia" title="Comunidad en Donostia">
                <div>
                    <h3>Trabajo realizado #2</h3>
                    <p>Intervención en portal y caja de escalera de comunidad con alto tránsito diario. Se prepararon zonas de roce, se eligió pintura resistente al uso continuo y se ejecutó por fases para no bloquear accesos. Este trabajo permitió renovar imagen del edificio y mejorar conservación de superficies comunes con una solución más duradera y fácil de limpiar.</p>
                    <a href="<?= $contactUrl ?>" class="moduloBoton02">
                        <span>Solicitar valoración para mi comunidad</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contactar">
                    </a>
                </div>
            </article>

        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Andoain</h2>
            </div>

            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="Pintura de cocina y salón en Andoain" title="Vivienda en Andoain">
                <div>
                    <h3>Trabajo realizado #1</h3>
                    <p>Proyecto de actualización de salón y cocina en una vivienda de Andoain con objetivo de ganar claridad y uniformidad visual. Se retiraron zonas con pintura degradada, se regularizó absorción y se aplicó un esquema cromático neutro de alta cobertura. La intervención se completó en plazos ajustados sin comprometer limpieza ni calidad de remates en encuentros y techos.</p>
                    <a href="<?= $contactUrl ?>" class="moduloBoton02">
                        <span>Consultar presupuesto para vivienda</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contactar">
                    </a>
                </div>
            </article>

            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="Recuperación de barandilla de madera en Andoain" title="Restauración de madera en Andoain">
                <div>
                    <h3>Trabajo realizado #2</h3>
                    <p>Restauración de barandilla y elementos de madera interior con desgaste por paso del tiempo. Se saneó la superficie, se realizó lijado técnico y se aplicó protección final adaptada al uso diario de la vivienda. La pieza recuperó estabilidad y presencia sin perder su carácter original, reduciendo además el riesgo de deterioro prematuro por humedad ambiental.</p>
                    <a href="<?= $contactUrl ?>" class="moduloBoton02">
                        <span>Quiero restaurar una pieza de madera</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contactar">
                    </a>
                </div>
            </article>

        </section>


        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Lasarte-Oria</h2>
            </div>

            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="Pintura exterior de balcón en Lasarte-Oria" title="Balcón renovado en Lasarte-Oria">
                <div>
                    <h3>Trabajo realizado #1</h3>
                    <p>Renovación de balcones expuestos a lluvia y orientación de sol directo en una vivienda de Lasarte-Oria. Se ejecutó limpieza profunda, reparación de puntos debilitados y aplicación de sistema exterior de alta resistencia. El trabajo mejoró imagen de fachada y reforzó la protección de superficies frente a intemperie, evitando desconchados que se repetían cada temporada.</p>
                    <a href="<?= $contactUrl ?>" class="moduloBoton02">
                        <span>Necesito renovar mi balcón</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contactar">
                    </a>
                </div>
            </article>

            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="Pintura integral de local comercial en Lasarte-Oria" title="Local comercial en Lasarte-Oria">
                <div>
                    <h3>Trabajo realizado #2</h3>
                    <p>Pintura integral de local comercial con necesidad de minimizar tiempos de cierre al público. Se planificó por franjas horarias y se adaptó el proceso para mantener zonas operativas mientras avanzaba la obra. Se consiguió un acabado uniforme, moderno y resistente al uso intensivo, alineado con la imagen de marca del negocio y su actividad diaria.</p>
                    <a href="<?= $contactUrl ?>" class="moduloBoton02">
                        <span>Planificar pintura para mi local</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contactar">
                    </a>
                </div>
            </article>

        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Usurbil</h2>
            </div>

            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="Pintura de zonas comunes en Usurbil" title="Comunidad en Usurbil">
                <div>
                    <h3>Trabajo realizado #1</h3>
                    <p>Actuación en zonas comunes de comunidad residencial en Usurbil, incluyendo portal, rellanos y pasillos de acceso a viviendas. Se reforzaron áreas de mayor roce y se seleccionó pintura de fácil limpieza para mantenimiento posterior. El proyecto se ejecutó por fases, con comunicación previa a vecinos, logrando una mejora visible de imagen sin interferir de forma crítica en el tránsito habitual.</p>
                    <a href="<?= $contactUrl ?>" class="moduloBoton02">
                        <span>Solicitar propuesta para comunidad</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contactar">
                    </a>
                </div>
            </article>

            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="Recuperación de puerta de madera en Usurbil" title="Restauración de puerta en Usurbil">
                <div>
                    <h3>Trabajo realizado #2</h3>
                    <p>Recuperación de puerta principal de madera con desgaste por exposición y uso continuo. Se eliminó acabado deteriorado, se repararon pequeñas imperfecciones y se aplicó protección específica para exteriores. La intervención permitió conservar la pieza original y mejorar su rendimiento frente a humedad y variaciones térmicas, con un acabado final equilibrado y coherente con la fachada.</p>
                    <a href="<?= $contactUrl ?>" class="moduloBoton02">
                        <span>Valorar restauración de madera</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contactar">
                    </a>
                </div>
            </article>

        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Orio</h2>
            </div>

            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="Pintura de vivienda cerca de zona costera en Orio" title="Vivienda en Orio">
                <div>
                    <h3>Trabajo realizado #1</h3>
                    <p>Renovación de pintura interior en vivienda próxima a entorno costero en Orio, donde la humedad ambiental influía en el estado de paredes. Se realizó preparación técnica del soporte, corrección de zonas sensibles y aplicación de sistema compatible con ese contexto. El resultado fue una mejora clara de uniformidad y estabilidad, reduciendo aparición de marcas y problemas recurrentes en estancias críticas.</p>
                    <a href="<?= $contactUrl ?>" class="moduloBoton02">
                        <span>Quiero revisar mi vivienda</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contactar">
                    </a>
                </div>
            </article>

            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="Pintura exterior de fachada en Orio" title="Fachada renovada en Orio">
                <div>
                    <h3>Trabajo realizado #2</h3>
                    <p>Proyecto de pintura de fachada con necesidad de mejorar protección frente a exposición exterior constante. Se abordó limpieza inicial, saneado de zonas degradadas y aplicación por capas para asegurar adherencia y resistencia. La fachada recuperó presencia visual y mejor comportamiento frente a intemperie, evitando soluciones rápidas que en este tipo de entorno suelen deteriorarse de forma acelerada.</p>
                    <a href="<?= $contactUrl ?>" class="moduloBoton02">
                        <span>Consultar pintura de fachada</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contactar">
                    </a>
                </div>
            </article>

        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Zarautz</h2>
            </div>

            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="Pintura de garaje comunitario en Zarautz" title="Garaje en Zarautz">
                <div>
                    <h3>Trabajo realizado #1</h3>
                    <p>Intervención en garaje comunitario de Zarautz con superficies castigadas por roce, suciedad y humedad. Se eligió un sistema de pintura adaptado a uso intensivo y mantenimiento periódico, priorizando resistencia y facilidad de limpieza. El trabajo mejoró lectura visual del espacio, reforzó protección de paramentos y permitió una explotación más cómoda de la zona por parte de los usuarios.</p>
                    <a href="<?= $contactUrl ?>" class="moduloBoton02">
                        <span>Necesito pintar un garaje</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contactar">
                    </a>
                </div>
            </article>

            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="Restauración de mueble antiguo en Zarautz" title="Mueble recuperado en Zarautz">
                <div>
                    <h3>Trabajo realizado #2</h3>
                    <p>Restauración completa de mueble antiguo con valor sentimental para la familia propietaria. Se repararon uniones, se estabilizó la estructura y se aplicó acabado final respetando su estética original. Esta intervención devolvió funcionalidad a la pieza y la integró de nuevo en la vivienda con un resultado duradero, equilibrado y coherente con el estilo del entorno doméstico.</p>
                    <a href="<?= $contactUrl ?>" class="moduloBoton02">
                        <span>Quiero recuperar un mueble</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a contacto" title="Contactar">
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