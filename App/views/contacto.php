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
        <h1>Contacto y presupuesto</h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logotipo.svg" alt="Contacto para servicios de pintura y restauración" title="Pedir presupuesto con Patxi">
        </div>
        <a href="<?= $contactPhone ?>" class="boton">Llamar ahora</a>
    </header>

    <main>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Datos de contacto</h2>
            </div>

            <!-- intro -->
            <!-- artículo 05 -->
            <article class="art05">
                <h3>Artículo 05</h3>
                <p>Si necesitas pintar una vivienda, renovar zonas comunes o restaurar madera, puedes contactar directamente conmigo y te responderé lo antes posible. Trabajo con presupuestos claros, explicación previa de la intervención y una planificación realista para que sepas desde el principio qué se hará y en qué plazos.</p>
                <p>Puedes escribirme por correo, llamarme por teléfono o enviarme el formulario para revisar tu caso con más detalle. Si me compartes fotos, ubicación y tipo de trabajo, podré orientarte mejor desde el primer contacto.</p>
                <a href="#hitoForm" class="boton">Contactar</a>
            </article>
            
        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Cuéntame qué necesitas</h2>
            </div>

            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="Consulta para trabajo de pintura" title="Trabajo de pintura">
                <div>
                    <h3>Trabajo de pintura</h3>
                    <p>Indícame si se trata de vivienda, comunidad, local o garaje, el estado de las superficies y el tipo de acabado que buscas. Con esa información te podré orientar sobre el enfoque más adecuado y preparar una propuesta ajustada.</p>
                </div>
            </article>

            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="Consulta para restauración de madera" title="Trabajo de restauración">
                <div>
                    <h3>Trabajo de restauración</h3>
                    <p>Si quieres recuperar un mueble, una puerta o una pieza de madera, cuéntame su estado actual y el resultado que esperas. Te explicaré qué opciones de restauración son viables y qué solución encaja mejor en tu caso.</p>
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