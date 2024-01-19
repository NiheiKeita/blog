<script setup>
const props = defineProps({
    content: {
        type: String,
        default: "input_display",
    },
});
</script>

<template>
    <div
        class="bg-black text-white rounded-md p-3 mb-5 overflow-x-auto lg:leading-7 leading-6"
    >
        <code class="whitespace-pre"><slot /></code>
    </div>
</template>
