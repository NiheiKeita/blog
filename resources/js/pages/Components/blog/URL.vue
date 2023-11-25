<script setup>
const props = defineProps({
    content: {
        type: String,
        default: "",
    },
});
</script>

<template>
    <a :href="content" class="text-blue-500 hover:underline"><slot /> </a>
</template>
