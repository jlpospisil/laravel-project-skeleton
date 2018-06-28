let mutations = {
    UPDATE_AUTH_STATUS (state, authenticated) {
        Vue.set(state, 'is_authenticated', authenticated);
    },
    UPDATE_USER_DETAILS (state, details) {
        Vue.set(state, 'details', details);
    }
};

export default mutations;