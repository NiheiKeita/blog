<script setup lang="ts">
defineProps({
    error: {
        type: String,
        default: "",
    },
});
</script>

<template>
    <div
        v-if="error"
        class="text-red-700 mt-1 rounded text-base flex items-center"
    >
        <img
            class="h-5 w-5 flex justify-center text-center"
            src="/imgs/exclamation_mark.svg"
        />
        <p class="ms-1">
            {{ error }}
        </p>
    </div>
</template>
