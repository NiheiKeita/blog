<script setup>
const props = defineProps({
    content: {
        type: String,
        default: "input_display",
    },
});
</script>

<template>
    <div class="mb-5">
        <p>
            <slot />
        </p>
    </div>
</template>
