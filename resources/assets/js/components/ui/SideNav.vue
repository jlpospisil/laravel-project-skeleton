<template>
    <ul id="app-side-nav" class="navbar-nav navbar-sidenav navbar-dark bg-primary h-100 d-flex flex-column" :class="{ open: side_nav.is_open }">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" data-original-title="Item 1">
            <router-link to="/item1" class="nav-link">
                <i class="fa fa-fw fa-ambulance"></i>
                <span class="nav-link-label">Item 1</span>
            </router-link>
        </li>

        <li class="nav-item position-relative" data-toggle="tooltip" data-placement="right" data-original-title="Item 2">
            <a class="nav-link nav-link-dropdown-toggle collapsed" href="#app-side-nav-item2" data-toggle="collapse" aria-expanded="false" aria-controls="app-side-nav-item2">
                <i class="fa fa-fw fa-archive"></i>
                <span class="nav-link-label">Item 2</span>
            </a>
            <ul class="collapse list-unstyled nav-link-dropdown bg-primary" id="app-side-nav-item2">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" data-original-title="Create item 2">
                    <router-link to="/item2/create" class="nav-link">
                        <i class="fa fa-fw fa-plus"></i>
                        <span class="nav-link-label">Create</span>
                    </router-link>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" data-original-title="Search item 2">
                    <router-link to="/item2/search" class="nav-link">
                        <i class="fa fa-fw fa-search"></i>
                        <span class="nav-link-label">Search</span>
                    </router-link>
                </li>
            </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" data-original-title="Item 3">
            <router-link to="/item3" class="nav-link">
                <i class="fa fa-fw fa-bicycle"></i>
                <span class="nav-link-label">Item 3</span>
            </router-link>
        </li>

        <li class="flex-fill"></li>

        <li class="nav-item menu-toggler" @click="toggleSideNav()">
            <a class="nav-link text-right" href="#">
                <i class="fa fa-fw fa-arrow-left" v-if="side_nav.is_open"></i>
                <i class="fa fa-fw fa-arrow-right" v-else></i>
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
        padding: $top-nav-height 0 0 0;
        font-size: 16px;

        &.open {
            .nav-item {
                width: $side-nav-width-expanded;

                .nav-item {
                    padding-left: 2rem;
                }

                .nav-link {
                    &.nav-link-dropdown-toggle {
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

            .nav-link-dropdown {
                &.show,&.collapsing {
                    position: absolute;
                    top: 0;
                    left: $side-nav-width-collapsed;

                    .nav-item:not(:first-child) {
                        border-left: 1px solid $dark-primary;
                    }
                }
            }
        }

        .nav-item {
            padding: 5px 15px;

            &.menu-toggler {
                background-color: $dark-primary;
            }

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
        data () {
            return {
                tooltips: null
            }
        },
        computed: {
            ...mapState('ui', ['side_nav'])
        },
        watch: {
            'side_nav.is_open' () {
                this.adjustTooltips();
            }
        },
        methods: {
            ...mapActions('ui', ['toggleSideNav']),

            adjustTooltips () {
                if (this.side_nav.is_open) {
                    this.tooltips.tooltip('disable');
                }
                else {
                    this.tooltips.tooltip('enable');
                }
            }
        },
        mounted () {
            this.tooltips = $('#app-side-nav [data-toggle="tooltip"]');
            this.tooltips.tooltip({ trigger : 'hover' });
            this.adjustTooltips()
        }
    }
</script>
