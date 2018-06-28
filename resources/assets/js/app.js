
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.config.productionTip = false

// Laravel passport components
Vue.component('Application', require('./components/Application.vue'));

/**
 * Next, we will create a vue router to handle routing
 */
import VueRouter from 'vue-router';
import routes from './app-routes';

Vue.use(VueRouter);

const router = new VueRouter({
    routes,
    mode: 'history'
});


/**
 * Next, we will create a vuex store to handle the state data
 */
import Vuex from 'vuex';
import userModule from './vuex-modules/user/module';

let store = new Vuex.Store({
    modules: {
        user: userModule
    }
});


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store,
    router
});
