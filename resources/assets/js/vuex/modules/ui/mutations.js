import Vue from 'vue';

let mutations = {
    UPDATE_LOADING_STATUS (state, loading) {
        Vue.set(state, 'loading', loading);
    },
    SET_SIDE_NAV_OPEN (state, open) {
        Vue.set(state.side_nav, 'is_open', open);
    }
};

export default mutations;