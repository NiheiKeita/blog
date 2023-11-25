<script setup>
const props = defineProps({
    content: {
        type: String,
        default: "input_display",
    },
});
</script>

<template>
    <h2 class="text-2xl font-bold mb-5 mt-12">
        <slot />
        <div class="bg-gray-200 h-[1px] w-full mt-1"></div>
    </h2>
</template>
