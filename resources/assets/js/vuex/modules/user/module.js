import getters from './getters';
import actions from './actions';
import mutations from './mutations';

const state = {
    is_authenticated: false,
    details: null
};

const userModule = {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};

export default userModule;