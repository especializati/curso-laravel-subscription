<section id="contact" class="relative pb-20" data-section>
    <div class="bg-after z-0"></div>
    <div class="c-container z-10 relative">
        <div class="bg-white rounded shadow-lg p-6 w-full md:w-3/5 md:p-8 mx-auto">
            <h3 class="font-semibold text-xl pb-2 border-b border-gray-200 px-1">Fale Conosco</h3>
            <form class="form mt-10" action="">
                <div class="form__row">
                    <div class="form__input-group">
                        <div class="form__label-group">
                            <p><label for="name" class="">Nome <abbr title="Obrigatório">*</abbr></label>
                            </p>
                        </div><input id="name" autocomplete="false" tabindex="0" class="form__input">
                    </div>
                </div>
                <div class="form__row">
                    <div class="form__input-group">
                        <div class="form__label-group">
                            <p><label for="email" class="">Email <abbr title="Obrigatório">*</abbr></label>
                            </p>
                        </div><input id="email" name="email" autocomplete="false" tabindex="0"
                            class="form__input" required>
                    </div>
                </div>
                <div class="form__row">
                    <div class="form__input-group">
                        <div class="form__label-group">
                            <p><label for="subject" class="subject" class="">Assunto <abbr
                                        title="Obrigatório">*</abbr></label></p>
                        </div><input id="subject" name="subject" autocomplete="false" tabindex="0"
                            class="form__input" required>
                    </div>
                </div>
                <div class="form__row">
                    <div class="form__input-group">
                        <div class="form__label-group">
                            <p><label for="message" class="bg-white text-gray-600 px-1">Mensagem <abbr
                                        title="Obrigatório">*</abbr></label></p>
                        </div><textarea id="message" name="message" class="form__input" rows="4"
                            required></textarea>
                    </div>
                </div>
                <div class="mt-6 pt-3 text-center"><button type="submit"
                        class="button button--filled button--primary">Enviar</button></div>
            </form>
        </div>
    </div>
</section>
