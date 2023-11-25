<script setup>
const props = defineProps({
    content: {
        type: String,
        default: "input_display",
    },
});
</script>

<template>
    <div class="bg-black text-white rounded-sm p-3 mb-5">
        <code class="p-1 mx-1"> <slot /></code>
    </div>
</template>
