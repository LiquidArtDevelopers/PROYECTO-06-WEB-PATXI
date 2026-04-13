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
                <li><a href="https://profe.webda.eus/" title="<?= $footerPortfolioTitle ?? '' ?>"><?= $footerPortfolio ?></a></li>
                <li><a href="https://www.areafor.com/" title="<?= $footerAcademiaTitle ?? '' ?>"><?= $footerAcademia ?></a></li>
            </ul>
            <div class="rrss">
                <a href="" title="<?= $footerFacebookTitle ?? '' ?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-facebook.svg" alt="<?= $footerFacebookAlt ?? '' ?>" title="<?= $footerFacebookTitle ?? '' ?>" width="30" height="30">
                </a>

                <a href="https://www.linkedin.com/in/igor-aranaz-pastor/" title="<?= $footerLinkedinTitle ?? '' ?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-linkedin.svg" alt="<?= $footerLinkedinAlt ?? '' ?>" title="<?= $footerLinkedinTitle ?? '' ?>" width="30" height="30">
                </a>

                <a href="" title="<?= $footerInstagramTitle ?? '' ?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-instagram.svg" alt="<?= $footerInstagramAlt ?? '' ?>" title="<?= $footerInstagramTitle ?? '' ?>" width="30" height="30">
                </a>

                <a href="https://www.youtube.com/@LiquidArtDevelopers" title="<?= $footerYoutubeTitle ?? '' ?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-youtube.svg" alt="<?= $footerYoutubeAlt ?? '' ?>" title="<?= $footerYoutubeTitle ?? '' ?>" width="30" height="30">
                </a>
            </div>
        </div>

        <div class="cajaInfo">
            <ul>
                <li>
                    <a href="tel:+34943123123" title="<?= $footerTelefonoTitle ?? '' ?>" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/call.svg" alt="<?= $footerTelefonoAlt ?? '' ?>" title="<?= $footerTelefonoTitle ?? '' ?>" width="20" height="20">
                        <span><?= $footerTelefono ?></span>
                    </a>
                </li>

                <li>
                    <a href="https://api.whatsapp.com/send/?phone=34628749350" title="<?= $footerWhatsappTitle ?? '' ?>" target="_blank" class="telefono">
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

                <li>
                    <a href="https://maps.app.goo.gl/EB3bPiGW1yfoJg3p9" title="<?= $footerDireccionTitle ?? '' ?>" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/location.svg" alt="<?= $footerDireccionAlt ?? '' ?>" title="<?= $footerDireccionTitle ?? '' ?>" width="20" height="20">
                        <span><?= $footerDireccionLinea1 ?><br><?= $footerDireccionLinea2 ?></span>
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
