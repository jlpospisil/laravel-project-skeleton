<template>
    <div class="modal" tabindex="-1" role="dialog" ref="modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info text-white border-bottom-0">
                    <h5 class="modal-title font-weight-bold">
                        {{ title }}
                    </h5>
                    <icon name="fa-times" class="cursor-pointer" :size=1.25 data-dismiss="modal" aria-label="Close" />
                </div>

                <div class="modal-info p-3" v-if="$slots.info">
                    <slot name="info"></slot>
                </div>

                <div class="modal-body p-0">
                    <slot name="body"></slot>
                </div>

                <div class="modal-footer">
                    <slot name="additional-buttons"></slot>
                    <button-item type="btn-secondary" icon="fa-close" text="CLOSE" data-dismiss="modal"></button-item>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
@import '../../../sass/_variables';
@import '~bootstrap/scss/bootstrap';

.modal {
    .modal-content {
        .modal-info {
            background-color: lighten($secondary-color, 55%);
        }

        .modal-body {
            max-height: 65vh;
            overflow-y: auto;
        }
    }
}
</style>

<script>
/* global $ */
import ButtonItem from './ButtonItem.vue';
import Icon from './Icon.vue';

export default {
  components: {
    ButtonItem,
    Icon
  },
  props: {
    title: { type: String, required: true }
  },
  data () {
    return {
      modal: null,
      auto_focus_el: null
    }
  },
  methods: {
    hide () {
      this.modal.modal('hide');
    },
    show () {
      this.modal.modal('show');
    },
    toggle () {
      this.modal.modal('toggle');
    },
    autoFocus () {
      if (this.auto_focus_el) {
        this.auto_focus_el.focus();
      }
    }
  },
  mounted () {
    this.modal = $(this.$refs.modal);
    this.auto_focus_el = this.modal.find('[autofocus]').first();
    this.modal.on('shown.bs.modal', this.autoFocus);
  }
}
</script>
