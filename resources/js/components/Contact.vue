<template>
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
                </div><input id="email" name="email" autocomplete="false" tabindex="0" class="form__input" required>
            </div>
        </div>
        <div class="form__row">
            <div class="form__input-group">
                <div class="form__label-group">
                    <p><label class="subject">Assunto <abbr
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
</template>

<script>
export default {

}
</script>
