<template>
    <ul id="app-side-nav" class="navbar-nav navbar-sidenav navbar-dark bg-primary px-3 h-100 d-flex flex-column" :class="{ open: side_nav.is_open }">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Item 1">
            <a class="nav-link" href="#">
                <i class="fa fa-fw fa-ambulance"></i>
                <span class="nav-link-label">Item 1</span>
            </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Item 2">
            <a class="nav-link nav-link-dropdown collapsed" href="#app-side-nav-item2" data-toggle="collapse" aria-expanded="false" aria-controls="app-side-nav-item2">
                <i class="fa fa-fw fa-archive"></i>
                <span class="nav-link-label">Item 2</span>
            </a>
            <ul class="collapse list-unstyled" id="app-side-nav-item2">
                <li class="nav-item pl-5">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-plus"></i>
                        <span class="nav-link-label">Create</span>
                    </a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-search"></i>
                        <span class="nav-link-label">Search</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Item 3">
            <a class="nav-link" href="#">
                <i class="fa fa-fw fa-bicycle"></i>
                <span class="nav-link-label">Item 3</span>
            </a>
        </li>
    </ul>
</template>

<style lang="scss">
    @import '../../../sass/_variables';

    $left-nav-font-color: #868e96;

    #app-side-nav {
        position: absolute;
        top: 0;
        left: 0;
        padding-top: $top-nav-height;
        font-size: 16px;

        &.open {
            width: 250px;

            .nav-item {
                .nav-link {
                    &.nav-link-dropdown {
                        &:after {
                            float: right;
                            font-family: 'FontAwesome';
                        }

                        &.collapsed:after {
                            content: '\f105';
                        }

                        &:not(.collapsed):after {
                            content: '\f107';
                        }
                    }

                    i.fa {
                        margin-right: 5px;
                    }
                }
            }
        }

        &:not(.open) {
            .nav-link-label {
                display: none;
            }
        }

        .nav-item {
            padding: 5px 0;

            .nav-link {
                color: $left-nav-font-color;

                &:hover, &:focus {
                    color: lighten($left-nav-font-color, 15%);
                }
            }
        }
    }
</style>

<script>
    import {mapState, mapActions} from 'vuex';

    export default {
        computed: {
            ...mapState('ui', ['side_nav'])
        },
        methods: {
            ...mapActions('ui', ['toggleSideNav'])
        }
    }
</script>
