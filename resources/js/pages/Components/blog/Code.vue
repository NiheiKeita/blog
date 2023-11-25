<script setup>
const props = defineProps({
    content: {
        type: String,
        default: "input_display",
    },
});
</script>

<template>
    <code class="bg-gray-200 p-1 mx-1"><slot /></code>
</template>
