<script setup>
const props = defineProps({
    content: {
        type: String,
        default: "input_display",
    },
});
</script>

<template>
    <p class="mb-6">
        <span class="bg-yellow-200 px-2 py-1 rounded"><slot /></span>
    </p>
</template>
