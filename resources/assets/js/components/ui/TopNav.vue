<template>
    <nav id="app-nav" class="navbar navbar-expand-sm fixed-top navbar-dark bg-primary">
        <!--<div class="container">-->
            <router-link to="/" class="navbar-brand mr-auto">
                <strong>Nav Brand</strong>
            </router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto"></ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown" v-if="user_details">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ user_details.name }}
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <router-link to="/test" class="dropdown-item">
                                <i class="fa fa-fw fa-question"></i>
                                Test
                            </router-link>

                            <a class="dropdown-item" href="/logout">
                                <i class="fa fa-fw fa-sign-out"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        <!--</div>-->
    </nav>
</template>

<style lang="scss">
    @import '../../../sass/_variables';

</style>

<script>
    import {mapState} from 'vuex';

    export default {
        computed: {
            ...mapState('user', { user_details: 'details' })
        }
    }
</script>
