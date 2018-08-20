<template>
    <i :class="iconClass" :style="{ fontSize: `${size}em`, color }" @click="$emit('click')" />
</template>

<script>
export default {
  props: {
    name: { type: String, required: true },
    color: { type: String, required: false },
    size: { type: Number, required: false, default: 1 }
  },
  computed: {
    iconClass () {
      const { name } = this;
      return `fa fa-fw ${name}`;
    }
  }
}
</script>
