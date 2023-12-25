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
        <div class="flex">
            <div class="bg-ThemaColor top-0 bottom-0 w-[3px] mr-3"></div>
            <slot />
        </div>

        <div class="bg-gray-200 h-[1px] w-full mt-1"></div>
    </h2>
</template>
