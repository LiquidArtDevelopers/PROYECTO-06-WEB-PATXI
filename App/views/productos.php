<?php
$contactUrl = $_ENV['RUTA'] . (($lang ?? 'es') === 'eu' ? '/eu/kontaktua' : '/es/contacto');
$pintarPisosUrl = $_ENV['RUTA'] . (($lang ?? 'es') === 'eu' ? '/eu/margolaria/zoruak-margotu' : '/es/pintura/pintar-pisos');
$balconesUrl = $_ENV['RUTA'] . (($lang ?? 'es') === 'eu' ? '/eu/margolaria/balkoiak-eta-fatxadak-margotu' : '/es/pintura/pintar-balcones-fachadas');
$humedadUrl = $_ENV['RUTA'] . (($lang ?? 'es') === 'eu' ? '/eu/margolaria/hezetasun-tratamenduak' : '/es/pintura/tratamientos-humedad');
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo_title ?? 'Servicios de pintura para viviendas y comunidades en Donostialdea' ?></title>
    <meta name="description" content="<?= $seo_description ?? 'Trabajos de pintura interior y exterior para viviendas, comunidades y zonas comunes en Donostialdea. Preparación de superficies, acabados duraderos y ejecución limpia.' ?>">
    <?php echo vite_tags('src/js/productos.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?><?= $url ?>">

    <!-- Indexacion y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $seo_title ?? 'Servicios de pintura para viviendas y comunidades en Donostialdea' ?>">
    <meta property="og:description" content="<?= $seo_description ?? 'Trabajos de pintura interior y exterior para viviendas, comunidades y zonas comunes en Donostialdea.' ?>">
    <meta property="og:url" content="<?=$_ENV['RUTA']?><?= $url ?>">
    <meta property="og:image" content="<?=$_ENV['RUTA']?><?= $seo_image ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $seo_title ?? 'Servicios de pintura para viviendas y comunidades en Donostialdea' ?>">
    <meta name="twitter:description" content="<?= $seo_description ?? 'Trabajos de pintura interior y exterior para viviendas, comunidades y zonas comunes en Donostialdea.' ?>">
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
            <img src="https://dummyimage.com/500x300" alt="Servicio profesional de pintura para viviendas y comunidades" title="Trabajos de pintura en Donostialdea">
        </div>
        <a href="<?= $contactUrl ?>" class="boton">Solicitar presupuesto de pintura</a>
    </header>

    <main>


        <section>

            <div class="h2Especial">
                <span></span>
                <h2>Qué trabajos de pintura realizo</h2>
            </div>

            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="Pintura de pisos paredes y techos" title="Pintura de interiores">
                <div>
                    <h3>Pintura de pisos, paredes y techos</h3>
                    <p>Realizo trabajos de pintura interior en pisos completos y viviendas habitadas, adaptando la planificación para reducir molestias y mantener un ritmo de trabajo ordenado. Antes de aplicar pintura reviso el estado de paredes y techos para corregir pequeñas irregularidades, mejorar adherencia y conseguir una base uniforme. Esta fase previa marca la diferencia entre un resultado que dura y un acabado que se degrada en poco tiempo. Mi objetivo es que cada estancia quede visualmente equilibrada, luminosa y preparada para el uso diario real de la vivienda.</p>
                    <a href="<?= $pintarPisosUrl ?>" class="moduloBoton02">
                        <span>Ver servicio de pintar pisos</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a pintar pisos" title="Pintar pisos">
                    </a>
                </div>
            </article>

            <!-- Artículo 01 -->
            <article class="art01 upsidedown">
                <img src="https://dummyimage.com/1000x700" alt="Pintura de balcones fachadas y garajes" title="Pintura de exteriores">
                <div>
                    <h3>Pintura de balcones, fachadas y garajes</h3>
                    <p>También trabajo en superficies exteriores y zonas expuestas donde la exigencia técnica es mayor por lluvia, cambios de temperatura y desgaste continuo. En balcones, fachadas y garajes selecciono el sistema de pintura según el soporte y el nivel de exposición para mejorar protección y durabilidad. No se trata solo de renovar la imagen: una intervención bien planteada ayuda a conservar la superficie y reduce futuros costes de mantenimiento. Por eso combino preparación previa, aplicación cuidada y control de acabados en cada fase del trabajo.</p>
                    <a href="<?= $balconesUrl ?>" class="moduloBoton02">
                        <span>Ver balcones y fachadas</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a balcones y fachadas" title="Balcones y fachadas">
                    </a>
                </div>
            </article>

            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="Pintura de zonas de uso frecuente" title="Superficies de alto tránsito">
                <div>
                    <h3>Pintura de superficies y zonas de uso frecuente</h3>
                    <p>Intervengo en áreas con mucho tránsito, roces constantes o uso intensivo, como pasillos, escaleras, portales y espacios comunes. En estos casos no basta con cubrir la superficie: hay que valorar resistencia, facilidad de limpieza y comportamiento del acabado con el paso del tiempo. Defino materiales y proceso de aplicación en función de esas necesidades para evitar repintados prematuros y mantener una imagen cuidada durante más tiempo. Esto permite que el espacio funcione bien a nivel práctico sin renunciar a una estética coherente con el entorno.</p>
                    <a href="<?= $humedadUrl ?>" class="moduloBoton02">
                        <span>Ver tratamientos de humedad</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a tratamientos de humedad" title="Tratamientos de humedad">
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

                <p>Cuando una pared presenta manchas, descamación o pérdida de adherencia por humedad, la prioridad es identificar el alcance real del problema antes de pintar. Actúo sobre la superficie afectada con una secuencia de saneado y preparación orientada a estabilizar el soporte y evitar que el daño vuelva a aparecer en poco tiempo. Esta intervención es clave en zonas expuestas o con ventilación limitada, donde un repintado directo suele fallar. Trabajar bien esta fase mejora el resultado visual y evita rehacer la misma pared en cada temporada.</p>

                <p>Además, selecciono productos de protección acordes al entorno de uso para que la pintura final mantenga su rendimiento y su aspecto más tiempo. El objetivo es resolver la causa visible y dejar una superficie preparada para un acabado duradero.</p>

                <img src="https://dummyimage.com/1500x900" alt="Tratamiento de humedad en pared" title="Humedades y protección de superficies">

            </article>

            <!-- Artículo 03 -->
            <article class="art03">

                <h3>Eliminación de gotelé y alisado</h3>

                <p>Si quieres actualizar una vivienda con paredes lisas, realizo eliminación de gotelé y alisado adaptando la técnica al relieve existente y al estado del paramento. Este trabajo requiere precisión y continuidad en toda la superficie para evitar cortes, ondas o transiciones irregulares entre paños. Por eso dedico tiempo a nivelar, repasar y verificar luz rasante antes de entrar en fase de pintura. Un buen alisado no solo mejora la estética de la estancia, también facilita el mantenimiento y potencia la percepción de amplitud y limpieza visual.</p>

                <p>Al finalizar, la pared queda preparada para recibir el color elegido con una base homogénea que permite acabados más finos y uniformes. Así el cambio no es solo decorativo, también funcional para el uso cotidiano del espacio.</p>

                <img src="https://dummyimage.com/1500x900" alt="Proceso de alisado de pared" title="Eliminación de gotelé y alisado">

            </article>

            <!-- Artículo 03 -->
            <article class="art03">

                <h3>Preparación y saneado antes de pintar</h3>

                <p>La preparación previa es la parte menos visible, pero también la más importante para que un trabajo de pintura funcione a medio y largo plazo. Incluye limpieza de soporte, corrección de pequeñas fisuras, sellado puntual y regularización de zonas con absorción desigual. Si esta base no se resuelve bien, el acabado pierde uniformidad, aparecen marcas y la durabilidad baja de forma notable. Por eso estructuro cada intervención con tiempos de secado y comprobaciones intermedias, incluso cuando la superficie parece estar en buen estado.</p>

                <p>Con este enfoque, la aplicación final se realiza sobre una base estable que mejora cobertura, adherencia y resistencia al uso diario. El resultado es un acabado más limpio, más regular y con menor necesidad de retoques prematuros.</p>

                <img src="https://dummyimage.com/1500x900" alt="Preparación y saneado de superficies antes de pintar" title="Preparación antes de pintar">

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
                <p>Cada espacio pide una solución distinta y por eso adapto el servicio de pintura al contexto real de uso, al nivel de tránsito y al mantenimiento esperado. No es lo mismo intervenir en una vivienda habitada que en una comunidad con circulación diaria o en un garaje expuesto a humedad y roce constante. Mi forma de trabajar combina diagnóstico inicial, propuesta técnica clara y ejecución ordenada para que el resultado sea estético, resistente y viable dentro del presupuesto disponible. Esta metodología permite tomar decisiones con criterio y evitar trabajos genéricos que no responden a la necesidad concreta del cliente.</p>
                <div class="matrix-items">
                    <div class="ficha">
                        <img src="https://dummyimage.com/50x50" alt="Pintura para viviendas particulares">
                        <h3>Viviendas particulares</h3>
                        <p>Pinto pisos y casas organizando el trabajo por estancias para reducir impacto en tu rutina, mantener orden durante la obra y entregar acabados uniformes pensados para el día a día.</p>
                    </div>
                    <div class="ficha">
                        <img src="https://dummyimage.com/50x50" alt="Pintura para comunidades y zonas comunes">
                        <h3>Comunidades y zonas comunes</h3>
                        <p>Actúo en portales, escaleras y espacios compartidos coordinando accesos y tiempos para minimizar molestias, mejorar la imagen del edificio y conservar las superficies frente al uso intensivo.</p>
                    </div>
                    <div class="ficha">
                        <img src="https://dummyimage.com/50x50" alt="Pintura para garajes y exteriores">
                        <h3>Garajes y espacios exteriores</h3>
                        <p>Intervengo en garajes y áreas exteriores con sistemas de pintura adaptados a condiciones exigentes, priorizando protección, limpieza y durabilidad para mantener el espacio funcional y bien conservado.</p>
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