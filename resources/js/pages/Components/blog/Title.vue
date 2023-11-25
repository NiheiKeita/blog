<script setup>
const props = defineProps({
    content: {
        type: String,
        default: "input_display",
    },
});
</script>

<template>
    <h1 class="text-4xl font-bold mb-8">
        <slot />
    </h1>
</template>
