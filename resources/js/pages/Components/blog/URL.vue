<script setup>
const props = defineProps({
    content: {
        type: String,
        default: "",
    },
});
</script>

<template>
    <div class="mb-5">
        <a :href="content" class="text-blue-500 hover:underline"><slot /> </a>
    </div>
</template>
