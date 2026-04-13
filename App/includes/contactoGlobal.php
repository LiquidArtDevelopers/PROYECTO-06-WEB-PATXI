<section>

    <!-- artForm02 ajax -->
    <article class="artForm02">

        <h3><?= $contact_form_h3 ?? '' ?></h3>
        <div>
            <div class="contenedor-form">

                <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="<?= $contact_form_icon_alt ?? '' ?>">

                <!-- MODAL CUANDO EL ENVIO ES CORRECTO -->
                <div id="modal_envio">
                    <h3 id="h3_modal_envio"><?= $contact_form_modal_h3 ?? '' ?></h3>
                    <p id="p_modal_envio"><?= $contact_form_modal_p ?? '' ?></p>
                    <div class="boton" id="boton_modal_envio"><?= $contact_form_modal_button ?? '' ?></div>
                </div>

                <form id="idForAjax">

                    <p class="error" id="errorForm02"></p>

                    <label for="nombreAjax"><?= $contact_form_label_nombre ?? '' ?></label>
                    <input type="text" id="nombreAjax" name="nombre" placeholder="<?= $contact_form_placeholder_nombre ?? '' ?>">

                    <label for="telefonoAjax"><?= $contact_form_label_telefono ?? '' ?></label>
                    <input type="tel" id="telefonoAjax" name="telefono" placeholder="<?= $contact_form_placeholder_telefono ?? '' ?>">

                    <label for="emailAjax"><?= $contact_form_label_email ?? '' ?></label>
                    <input type="email" id="emailAjax" name="email" placeholder="<?= $contact_form_placeholder_email ?? '' ?>">

                    <label for="mensajeAjax"><?= $contact_form_label_mensaje ?? '' ?></label>
                    <textarea name="mensaje" id="mensajeAjax" placeholder="<?= $contact_form_placeholder_mensaje ?? '' ?>"></textarea>

                    <div class="horizontal">
                        <label for="terminosAjax"><?= $contact_form_label_terminos ?? '' ?></label>
                        <input type="checkbox" name="terminos" id="terminosAjax">
                    </div>

                    <label for="respuesta"><?= $contact_form_label_respuesta ?? '' ?></label>
                    <div class="horizontal">
                        <span id="num1ajax"></span>
                        <span id="operadorajax"></span>
                        <span id="num2ajax"></span>
                        <input type="text" name="respUser" id="respuestaajax" placeholder="<?= $contact_form_placeholder_respuesta ?? '' ?>" autocomplete="off">
                        <input type="hidden" name="respSystem" id="respSystemajax" value="">
                    </div>

                    <input type="hidden" name="url" value="<?= $url ?>">
                    <input type="hidden" name="lang" value="<?= $lang ?>">

                    <input type="submit" class="boton" value="<?= $contact_form_submit ?? '' ?>" id="botonEnviarAjax">
                </form>

                <div class="moduloLoader01" id="moduloLoader01">
                    <svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <path fill="#000000" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
                        c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
                            <animateTransform
                            attributeName="transform"
                            attributeType="XML"
                            type="rotate"
                            dur="2s"
                            from="0 50 50"
                            to="360 50 50"
                            repeatCount="indefinite" />
                        </path>
                    <path fill="#000000" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                        c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
                            <animateTransform
                            attributeName="transform"
                            attributeType="XML"
                            type="rotate"
                            dur="1s"
                            from="0 50 50"
                            to="-360 50 50"
                            repeatCount="indefinite" />
                        </path>
                    <path fill="#000000" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                        L82,35.7z">
                            <animateTransform
                            attributeName="transform"
                            attributeType="XML"
                            type="rotate"
                            dur="2s"
                            from="0 50 50"
                            to="360 50 50"
                            repeatCount="indefinite" />
                        </path>
                    </svg>
                </div>

            </div>

            <div class="contenedor-info">
                <ul>
                    <li>
                        <a href="tel:+34943123123" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/tel.svg" alt="<?= $contact_info_phone_alt ?? '' ?>" title="<?= $contact_info_phone_title ?? '' ?>">
                            <span>943 123 123</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:aranaz@webda.eus" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="<?= $contact_info_email_alt ?? '' ?>" title="<?= $contact_info_email_title ?? '' ?>">
                            <span>aranaz@webda.eus</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/628749350" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/wa.svg" alt="<?= $contact_info_whatsapp_alt ?? '' ?>" title="<?= $contact_info_whatsapp_title ?? '' ?>">
                            <span>628 749 350</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://maps.app.goo.gl/Kh7rZM3WF1chSZSj7" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/map.svg" alt="<?= $contact_info_location_alt ?? '' ?>" title="<?= $contact_info_location_title ?? '' ?>">
                            <span><?= $contact_info_address ?? '' ?></span>
                        </a>
                    </li>
                </ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886.901188915529!2d-2.0047191655624914!3d43.29790730427824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e1!3m2!1ses!2ses!4v1768584957042!5m2!1ses!2ses" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </article>
</section>
