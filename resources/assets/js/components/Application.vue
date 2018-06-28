<template>
    <div>
        <TopNav></TopNav>

        <main id="app-content" class="container">
            <router-view></router-view>
        </main>
    </div>
</template>

<style lang="scss">
    @import '../../sass/_variables';

    #app-content {
        padding-top: 60px;
    }
</style>

<script>
    import {mapActions} from 'vuex';
    import TopNav from './ui/TopNav.vue';

    export default {
        components: {
            TopNav
        },
        methods: {
            ...mapActions('user', ['getUserDetails'])
        },
        mounted () {
            this.getUserDetails();
        }
    }
</script>
