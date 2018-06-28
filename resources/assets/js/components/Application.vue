<template>
    <div>
        <TopNav></TopNav>

        <div id="app-content" class="container">
            <SideNav></SideNav>

            <router-view></router-view>
        </div>
    </div>
</template>

<style lang="scss">
    @import '../../sass/_variables';

    #app-content {
        padding-top: $top-nav-height;
    }
</style>

<script>
    import {mapActions} from 'vuex';
    import TopNav from './ui/TopNav.vue';
    import SideNav from './ui/SideNav.vue';

    export default {
        components: {
            TopNav,
            SideNav
        },
        methods: {
            ...mapActions('user', ['getUserDetails'])
        },
        mounted () {
            this.getUserDetails();
        }
    }
</script>
