import Vue from 'vue';

let mutations = {
    SET_SIDE_NAV_OPEN (state, open) {
        Vue.set(state.side_nav, 'is_open', open);
    }
};

export default mutations;