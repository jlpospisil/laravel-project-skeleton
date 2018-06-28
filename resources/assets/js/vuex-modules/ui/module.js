import getters from './getters';
import actions from './actions';
import mutations from './mutations';

const state = {
    side_nav: {
        is_open: true
    }
};

const uiModule = {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};

export default uiModule;