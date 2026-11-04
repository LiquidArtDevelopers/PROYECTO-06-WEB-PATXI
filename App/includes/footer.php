<footer>
    <!-- caja superior de información -->
    <div>
        <div class="cajaInfo">
            <?php
            // enlaces de la web
            include $appRoot . '/includes/enlaces_menu.php'
            ?>
        </div>

        <div class="cajaInfo">
            <ul>
                <li>
                    <a href="tel:+34626107076" title="<?= $footerTelefonoTitle ?? '' ?>" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/call.svg" alt="<?= $footerTelefonoAlt ?? '' ?>" title="<?= $footerTelefonoTitle ?? '' ?>" width="20" height="20">
                        <span><?= $footerTelefono ?></span>
                    </a>
                </li>

                <li>
                    <a href="https://api.whatsapp.com/send/?phone=34626107076" title="<?= $footerWhatsappTitle ?? '' ?>" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-whatsapp.svg" alt="<?= $footerWhatsappAlt ?? '' ?>" title="<?= $footerWhatsappTitle ?? '' ?>" width="20" height="20">
                        <span><?= $footerWhatsapp ?></span>
                    </a>
                </li>

                <li>
                    <a href="mailto:<?= $footerEmail ?>" title="<?= $footerEmailTitle ?? '' ?>" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="<?= $footerEmailAlt ?? '' ?>" title="<?= $footerEmailTitle ?? '' ?>" width="20" height="20">
                        <span><?= $footerEmail ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- caja inferior de info -->
    <div>
        <img src="<?=$_ENV['RUTA']?>/assets/img/logos/logotipo.svg" alt="<?= $footerLogoAlt ?? '' ?>" title="<?= $footerLogoTitle ?? '' ?>" width="200" height="80">
        <div>
            <p><?= $footerDescripcion ?></p>
            <div id="zonaTerminos">
                <a href="<?=$_ENV['RUTA']?><?= $linkTerminosLegales ?>#legalZona"><?= $footerAvisoLegal ?></a>
                <a href="<?=$_ENV['RUTA']?><?= $linkTerminosLegales ?>#cookiesZona"><?= $footerCookies ?></a>
                <a href="<?=$_ENV['RUTA']?><?= $linkTerminosLegales ?>#privacidadZona"><?= $footerPrivacidad ?></a>
            </div>
            <p>© <?php echo $anio?> <?= $footerDerechos ?></p>
        </div>
    </div>
</footer>
