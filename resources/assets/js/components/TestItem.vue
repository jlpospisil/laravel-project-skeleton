<template>
    <div>
        {{ item }}
    </div>
</template>

<script>
    export default {
        props: {
            item: { type: String, default: "item" }
        }
    }
</script>
