let mutations = {
    UPDATE_USER_DETAILS (state, details) {
        Vue.set(state, 'details', details);
    }
};

export default mutations;