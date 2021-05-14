require('./bootstrap');

require('alpinejs');

window.Vue = require('vue').default

Vue.component('contact-component', require('./components/Contact.vue').default)

const app = new Vue({
    el: '#app'
})
