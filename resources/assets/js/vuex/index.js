import Vue from 'vue';
import Vuex from 'vuex';
import uiModule from './modules/ui';
import userModule from './modules/user';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    ui: uiModule,
    user: userModule
  }
});