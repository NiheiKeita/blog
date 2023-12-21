<script setup>
const props = defineProps({
    content: {
        type: String,
        default: "input_display",
    },
});
</script>

<template>
    <div class="bg-black text-white rounded-md p-3 mb-5 overflow-x-auto">
        <code class="p-1 mx-1 whitespace-pre"> <slot /></code>
    </div>
</template>
