<template>
    <div class="loading-overlay" v-show="loading">
        <loading-spinner></loading-spinner>
    </div>
</template>

<style lang="scss" scoped>
    @import '../../../sass/_variables';

    .loading-overlay {
        z-index: 1100;
        height: 100vh;
        width: 100vw;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(255,255,255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<script>
    import LoadingSpinner from './LoadingSpinner';

    export default {
        components: {
          LoadingSpinner
        },
        props: {
            loading: { type: Boolean, default: false }
        }
    }
</script>
