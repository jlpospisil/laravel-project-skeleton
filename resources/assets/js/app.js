import Vue from 'vue';
import store from './vuex';
import router from './router';

require('./bootstrap');

// Disable vue production tip
Vue.config.productionTip = false

// Main application component
Vue.component('Application', require('./components/Application.vue'));

const app = new Vue({
  el: '#app',
  store,
  router
});
