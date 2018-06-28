<template>
    <div>
        <TopNav></TopNav>
        <SideNav></SideNav>

        <div id="app-content" class="container" :class="{'side-nav-open': side_nav.is_open }">
            <router-view></router-view>
        </div>
    </div>
</template>

<style lang="scss">
    @import '../../sass/_variables';

    #app-content {
        padding-top: $top-nav-height;
        padding-left: $side-nav-width-collapsed;

        &.side-nav-open {
            padding-left: $side-nav-width-expanded;
        }
    }
</style>

<script>
    import {mapState, mapActions} from 'vuex';
    import TopNav from './ui/TopNav.vue';
    import SideNav from './ui/SideNav.vue';

    export default {
        components: {
            TopNav,
            SideNav
        },
        computed: {
            ...mapState('ui', ['side_nav'])
        },
        methods: {
            ...mapActions('user', ['getUserDetails'])
        },
        mounted () {
            this.getUserDetails();
        }
    }
</script>
