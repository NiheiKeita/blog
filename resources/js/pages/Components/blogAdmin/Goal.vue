<script setup>
import BlogGoal from "@/Components/blog/Goal.vue";
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
    <BlogGoal><slot /></BlogGoal>
    <ButtonPlus @click="clickEvent" color="green" />
</template>
