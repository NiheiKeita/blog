<script setup>
import BlogConsole from "@/Components/blog/Console.vue";
import ButtonPlus from "@/Components/button/Plus.vue";
const props = defineProps({
    content: {
        type: String,
        default: "input_display",
    },
});
const emit = defineEmits(["click"]);

const clickEvent = () => {
    emit("click");
};
</script>

<template>
    <BlogConsole> <slot /></BlogConsole>
    <ButtonPlus @click="clickEvent" color="green" />
</template>
