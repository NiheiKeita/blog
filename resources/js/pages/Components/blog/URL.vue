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
        <a :href="content" class="text-blue-500 hover:underline" target="_blank"
            ><slot />
        </a>
    </div>
</template>
