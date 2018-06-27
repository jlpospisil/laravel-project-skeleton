<template>
    <div>
        <TopNav></TopNav>

        <main class="container">
            <router-view></router-view>
        </main>
    </div>
</template>

<style lang="scss">
    @import '../../sass/_variables';
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
