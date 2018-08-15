export default {
    updateLoadingStatus ({ commit }, loading=true) {
        commit('UPDATE_LOADING_STATUS', loading);
    },

    toggleSideNav ({ commit, state }, open=null) {
        if (typeof open === "boolean") {
            commit('SET_SIDE_NAV_OPEN', open);
        }
        else {
            commit('SET_SIDE_NAV_OPEN', !state.side_nav.is_open);
        }
    }
};