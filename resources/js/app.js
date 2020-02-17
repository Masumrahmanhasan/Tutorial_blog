

require('./bootstrap');

window.Vue = require('vue');

Vue.component('slider-view', require('./components/Frontend/Partials/Slider.vue').default);
Vue.component('navbar-view', require('./components/Frontend/Partials/Navbar.vue').default);
Vue.component('footer-view', require('./components/Frontend/Partials/Footer.vue').default);
Vue.component('home-view', require('./components/Frontend/Home.vue').default);

const app = new Vue({
    el: '#app',
});
