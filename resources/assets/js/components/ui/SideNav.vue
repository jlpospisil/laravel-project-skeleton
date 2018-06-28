<template>
    <ul id="app-side-nav" class="navbar-nav navbar-sidenav navbar-dark bg-primary px-3 h-100 d-flex flex-column">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Orders">
            <a class="nav-link nav-link-collapse" href="#app-side-nav-orders" data-toggle="collapse" aria-expanded="false" aria-controls="app-side-nav-orders">
                <i class="fa fa-fw fa-archive mr-2"></i>
                <span class="side-nav-text">Orders</span>
            </a>
            <ul class="collapse list-unstyled" id="app-side-nav-orders">
                <li class="nav-item pl-5">
                    <a class="nav-link" href="#">
                        Create
                    </a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="#">
                        Search
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</template>

<style lang="scss">
    @import '../../../sass/_variables';

    #app-side-nav {
        position: absolute;
        top: 0;
        left: 0;
        padding-top: $top-nav-height;
        font-size: 16px;

        .nav-item {
            width: 250px;

            .nav-link {
                color: #868e96;
            }
        }
    }
</style>

<script>
    export default {

    }
</script>
