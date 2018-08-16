let actions = {
    getUserDetails ({ commit, state }) {
        commit('UPDATE_AUTH_STATUS', false);

        axios.get('/app/user/details').then(response => {
            if (response.data) {
                commit('UPDATE_USER_DETAILS', response.data);
                commit('UPDATE_AUTH_STATUS', true);
            }
        })
    }
};

export default actions;