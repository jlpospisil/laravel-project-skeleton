let actions = {
    getUserDetails ({ commit, state }) {
        axios.get('/user').then(response => {
            if (response.data) {
                commit('UPDATE_USER_DETAILS', response.data);
            }
        })
    }
};

export default actions;