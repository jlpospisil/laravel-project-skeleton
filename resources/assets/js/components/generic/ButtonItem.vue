<template>
    <button type="button" class="btn font-weight-bold" :class="button_class" @click="$emit('click')">
        <icon :name="icon" v-if="icon"></icon>
        <span v-if="text">{{ text }}</span>
    </button>
</template>

<script>
import Icon from './Icon.vue';

export default {
  components: {
    Icon
  },
  props: {
    type: { type: String, required: false, default: 'btn-primary' },
    text: { type: String, required: false },
    icon: { type: String, required: false }
  },
  computed: {
    button_class () {
      const {type} = this;

      if (type.toLowerCase() === 'text') {
        return 'bg-transparent text-info p-0';
      }

      return type;
    }
  }
}
</script>
