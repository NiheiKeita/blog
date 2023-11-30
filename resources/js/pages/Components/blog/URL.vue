<script setup>
const props = defineProps({
    content: {
        type: String,
        default: "",
    },
});
</script>

<template class="mb-5">
    <div>
        <a :href="content" class="text-blue-500 hover:underline"><slot /> </a>
    </div>
</template>
