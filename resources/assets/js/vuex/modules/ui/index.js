import getters from './getters';
import actions from './actions';
import mutations from './mutations';

const state = {
    loading: true,
    side_nav: {
        is_open: true
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};