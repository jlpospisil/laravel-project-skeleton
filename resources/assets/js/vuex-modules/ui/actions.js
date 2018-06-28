let actions = {
    toggleSideNav ({ commit, state }, open=null) {
        if (typeof open === "boolean") {
            commit('SET_SIDE_NAV_OPEN', open);
        }
        else {
            commit('SET_SIDE_NAV_OPEN', !state.side_nav.open);
        }
    }
};

export default actions;