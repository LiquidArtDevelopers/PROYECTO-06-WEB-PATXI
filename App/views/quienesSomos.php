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
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logotipo.svg" alt="Patxi, especialista en pintura y restauración en Donostialdea" title="Patxi, profesional de pintura y restauración">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton">Solicitar presupuesto</a>
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
                alt="Patxi realizando trabajos de pintura con detalle en una vivienda"
                title="Atención directa en cada proyecto de pintura y restauración">

                <p>Trabajo de tú a tú contigo, sin intermediarios y con una comunicación clara desde la primera visita. Si necesitas pintar tu vivienda, renovar una zona común o recuperar una pieza de madera, mi prioridad es que entiendas cada paso antes de empezar. Reviso el estado del soporte, te explico qué tratamiento conviene y te presento un presupuesto detallado con tiempos, materiales y acabados previstos. Así sabes qué vas a recibir, cuánto durará el trabajo y cómo se organizará para afectar lo mínimo a tu rutina diaria. Esta forma de trabajar evita dudas, evita sorpresas de última hora y permite que la decisión se tome con tranquilidad, con información útil y realista.</p>

                <p>La cercanía también se nota durante la ejecución: mantengo un seguimiento constante contigo para resolver cambios puntuales, confirmar avances y ajustar detalles sin perder el enfoque técnico. Me implico en proyectos pequeños y grandes con el mismo criterio, porque en ambos casos lo importante es que el resultado encaje con el uso real del espacio y con tus expectativas. No busco soluciones rápidas que queden bien solo al principio; prefiero un trabajo bien preparado, limpio y coherente, pensado para durar y para que te sientas cómodo desde el primer día al volver a utilizar cada estancia.</p>

                <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton">Cuéntame tu proyecto</a>

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

                <div class="art09-content">

                    <div class="contenedor-lista">
                        <h3>Cuidado por el detalle</h3>
                        <ul>
                            <li>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="Punto de control de calidad" title="Cuidado por el detalle">
                                <span>Protejo suelos, muebles y zonas de paso antes de comenzar para evitar daños y mantener el espacio en condiciones durante todo el proceso.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="Punto de control de calidad" title="Cuidado por el detalle">
                                <span>Analizo grietas, desconchados y problemas de adherencia para preparar bien la superficie y asegurar que el acabado se mantenga estable con el tiempo.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="Punto de control de calidad" title="Cuidado por el detalle">
                                <span>Selecciono materiales según el uso real de cada zona, priorizando resistencia, limpieza y durabilidad en lugar de elegir solo por apariencia inmediata.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="Punto de control de calidad" title="Cuidado por el detalle">
                                <span>Respeto tiempos de secado entre capas y aplico el sistema adecuado para lograr uniformidad visual, cobertura correcta y un resultado técnicamente sólido.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="Punto de control de calidad" title="Cuidado por el detalle">
                                <span>Antes de finalizar hago una revisión contigo para validar remates, cantos y encuentros, y dejar todo listo con un estándar profesional coherente.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="contenedor-lista">
                        <h3>Respeto por la vivienda o el espacio de trabajo</h3>
                        <ul>
                            <li>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="Punto de organización de obra" title="Respeto por el espacio">
                                <span>Planifico la intervención por fases para reducir molestias y permitir que la vivienda, la comunidad o el local siga funcionando con normalidad.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="Punto de organización de obra" title="Respeto por el espacio">
                                <span>Mantengo orden diario, retirada de residuos y limpieza de herramientas para que el entorno de trabajo esté controlado en cada jornada.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="Punto de organización de obra" title="Respeto por el espacio">
                                <span>Cuido la ventilación y la seguridad en zonas interiores, especialmente en espacios habitados o con tránsito frecuente de personas.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="Punto de organización de obra" title="Respeto por el espacio">
                                <span>Te mantengo informado del avance real, de los plazos y de cualquier ajuste necesario para tomar decisiones con criterio y sin improvisaciones.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/checkmark-circle.svg" alt="Punto de organización de obra" title="Respeto por el espacio">
                                <span>Al terminar, retiro protecciones, reviso acabados y dejo el espacio preparado para su uso, con una entrega clara y profesional.</span>
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
                <p>Llevo años trabajando en proyectos de pintura y restauración en Donostialdea, combinando técnica, planificación y un trato directo que facilita cada fase del proceso. Esa experiencia me permite adaptar el servicio a contextos distintos: viviendas con uso intensivo, comunidades con coordinación entre vecinos, locales que no pueden detener su actividad y piezas de madera que requieren intervención cuidadosa. Mi enfoque siempre parte de un diagnóstico previo del estado real de cada superficie para decidir qué conviene hacer y qué no merece la pena prometer. De esta manera se consigue un resultado equilibrado entre estética, resistencia y presupuesto, con soluciones pensadas para durar y para reducir mantenimientos innecesarios a medio plazo.</p>
                <div class="matrix-items">
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="Icono de servicio en viviendas">
                    <h3>Viviendas</h3>
                    <p>Trabajo en pisos y casas particulares con planificación por estancias, protecciones completas y acabados uniformes para que puedas volver a usar tu hogar con rapidez y sin complicaciones.</p>
                    </div>
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="Icono de servicio en comunidades">
                    <h3>Comunidades</h3>
                    <p>Actúo en portales, escaleras y zonas comunes coordinando tiempos y accesos para minimizar molestias, mantener la seguridad y entregar un resultado resistente al uso diario.</p>
                    </div>
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="Icono de restauración de madera">
                    <h3>Muebles y elementos de madera</h3>
                    <p>Restauro muebles, puertas y barandillas mediante saneado, lijado y protección final, recuperando funcionalidad y aspecto sin perder el carácter original de cada pieza.</p>
                    </div>
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="Icono de trabajo en portales y escaleras">
                    <h3>Portales y escaleras</h3>
                    <p>Renuevo zonas de paso con materiales adecuados al roce constante, cuidando la imagen del edificio y mejorando la conservación con un mantenimiento más sencillo.</p>
                    </div>
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="Icono de trabajo en locales comerciales">
                    <h3>Locales comerciales</h3>
                    <p>Planifico trabajos fuera de horas críticas cuando hace falta para reducir impacto en la actividad y asegurar una ejecución limpia, rápida y alineada con tu imagen de marca.</p>
                    </div>
                    <div class="ficha">
                    <img src="https://dummyimage.com/50x50" alt="Icono de trabajo en garajes y trasteros">
                    <h3>Garajes y trasteros</h3>
                    <p>Intervengo en superficies exigentes con sistemas de pintura duraderos, pensados para humedad, tránsito y desgaste, mejorando protección y funcionalidad del espacio.</p>
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