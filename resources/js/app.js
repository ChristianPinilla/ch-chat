require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue';
// import VueRouter from 'vue-router'
// Vue.use(VueRouter)

Vue.component('contactos-component', require('./components/ContactosComponent.vue').default);
Vue.component('chat-component', require('./components/ChatComponent.vue').default);

const app = new Vue({
    el: '#app',
});
