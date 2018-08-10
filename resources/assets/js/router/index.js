import Vue from 'vue';
import VueRouter from 'vue-router';
import ignoredRoutes from './ignored-routes';
import testRoutes from './test-routes';

Vue.use(VueRouter);

const routes = [
  ...ignoredRoutes,
  ...testRoutes
];

export default new VueRouter({
  routes,
  mode: 'history'
});