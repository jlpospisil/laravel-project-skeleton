<template>
    <div>
        <TopNav></TopNav>
        <SideNav></SideNav>

        <div id="app-content" :class="{'side-nav-open': side_nav.is_open }">
            <div class="p-2">
                <transition name="fade" mode="out-in">
                    <router-view :key="$route.path"></router-view>
                </transition>
            </div>
        </div>
    </div>
</template>

<style lang="scss">
    @import '../../sass/_variables';
    @import '~bootstrap/scss/bootstrap';

    #app-content {
        padding-top: $top-nav-height;
        padding-left: $side-nav-width-collapsed;
    }

    @include media-breakpoint-up(sm) {
        #app-content {
            &.side-nav-open {
                padding-left: $side-nav-width-expanded;
            }
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
