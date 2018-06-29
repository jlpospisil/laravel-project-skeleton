<template>
    <ul id="app-side-nav" class="navbar-nav navbar-sidenav navbar-dark bg-primary h-100 d-flex flex-column" :class="{ open: side_nav.is_open }">
        <!-- Item 1 -->
        <li class="nav-item">
            <router-link to="/item1" class="nav-link" side-nav-tooltip data-placement="right" data-original-title="Item 1">
                <i class="fa fa-fw fa-ambulance"></i>
                <span class="nav-link-label">Item 1</span>
            </router-link>
        </li>

        <!-- Item 2 -->
        <li class="nav-item position-relative">
            <a class="nav-link nav-link-dropdown-toggle collapsed" href="#app-side-nav-item2"
               data-toggle="collapse" aria-expanded="false" aria-controls="app-side-nav-item2"
               side-nav-tooltip data-placement="right" data-original-title="Item 2"
           >
                <i class="fa fa-fw fa-archive"></i>
                <span class="nav-link-label">Item 2</span>
            </a>
            <ul class="collapse list-unstyled nav-link-dropdown bg-primary" id="app-side-nav-item2">
                <li class="nav-item" side-nav-tooltip data-placement="right" data-original-title="Create item 2">
                    <router-link to="/item2/create" class="nav-link">
                        <i class="fa fa-fw fa-plus"></i>
                        <span class="nav-link-label">Create</span>
                    </router-link>
                </li>
                <li class="nav-item" side-nav-tooltip data-placement="right" data-original-title="Search item 2">
                    <router-link to="/item2/search" class="nav-link">
                        <i class="fa fa-fw fa-search"></i>
                        <span class="nav-link-label">Search</span>
                    </router-link>
                </li>
            </ul>
        </li>

        <!-- Item 3 -->
        <li class="nav-item">
            <router-link to="/item3" class="nav-link" side-nav-tooltip data-placement="right" data-original-title="Item 3">
                <i class="fa fa-fw fa-bicycle"></i>
                <span class="nav-link-label">Item 3</span>
            </router-link>
        </li>

        <!-- Spacer -->
        <li class="flex-fill"></li>

        <!-- Menu toggler -->
        <li class="nav-item side-nav-toggle" @click="toggleSideNav()">
            <a class="nav-link text-right" href="#">
                <i class="fa fa-fw fa-arrow-left" v-if="side_nav.is_open"></i>
                <i class="fa fa-fw fa-arrow-right" v-else></i>
            </a>
        </li>
    </ul>
</template>

<style lang="scss">
    @import '../../../sass/_variables';

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
            .nav-item {
                .nav-link {
                    &[aria-expanded="true"] {
                        border-top-color: $dark-primary;
                        border-bottom-color: $dark-primary;
                    }
                }
            }

            .nav-link-label {
                display: none;
            }

            .nav-link-dropdown {
                &.show,&.collapsing {
                    position: absolute;
                    top: 0;
                    left: $side-nav-width-collapsed;


                    .nav-item {
                        border-right: 1px solid $dark-primary;

                        &:first-child {
                            border-top: 1px solid $dark-primary;

                            .nav-link {
                                border-top: none;
                                border-bottom: none;
                            }
                        }

                        &:not(:first-child) {
                            border-left: 1px solid $dark-primary;
                        }

                        &:last-child {
                            border-bottom: 1px solid $dark-primary;
                        }
                    }
                }
            }
        }

        .nav-item {
            &.side-nav-toggle {
                background-color: $dark-primary;
            }

            .nav-link {
                color: $side-nav-font-color;
                border-top: 1px solid transparent;
                border-bottom: 1px solid transparent;
                padding: 5px 15px;

                &:hover, &:focus {
                    color: lighten($side-nav-font-color, 10%);
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
                navigation: null,
                tooltips: null,
                dropdown_toggles: null
            }
        },
        computed: {
            ...mapState('ui', ['side_nav'])
        },
        watch: {
            'side_nav.is_open' () {
                this.adjustTooltips();

                if (!this.side_nav.is_open) {
                    this.dropdown_toggles.filter('[aria-expanded="true"]').click()
                }
            }
        },
        methods: {
            ...mapActions('ui', ['toggleSideNav']),

            adjustTooltips () {
                // Disable tooltips when nav is expanded
                if (this.side_nav.is_open) {
                    this.tooltips.tooltip('disable');
                }
                else {
                    this.tooltips.tooltip('enable');
                }
            },

            navLinkClicked (event) {
                const el = $(event.target);

                // If nav is expanded, only have 1 open dropdown at a time
                // If it is collapsed, close all dropdowns when an option is selected
                if (el.is('.nav-link-dropdown-toggle') || !this.side_nav.is_open) {
                    this.dropdown_toggles.not(el).filter('[aria-expanded="true"]').click();
                }

                // Manually hide tooltips to accommodate touch screens
                this.tooltips.tooltip('hide');
            }
        },
        mounted () {
            this.navigation = $('#app-side-nav');
            this.tooltips = this.navigation.find('[side-nav-tooltip]');
            this.tooltips.tooltip({ trigger : 'hover' });
            this.dropdown_toggles = this.navigation.find('.nav-link-dropdown-toggle');

            // Add event handlers
            const nav_toggle_link = this.navigation.find('.side-nav-toggle > a');
            this.navigation.find('.nav-link').not(nav_toggle_link).on('click', this.navLinkClicked);

            // General setup
            this.adjustTooltips();
        }
    }
</script>
