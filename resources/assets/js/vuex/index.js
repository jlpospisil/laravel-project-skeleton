import Vue from 'vue';
import Vuex from 'vuex';
import uiModule from './modules/ui/module';
import userModule from './modules/user/module';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    ui: uiModule,
    user: userModule
  }
});