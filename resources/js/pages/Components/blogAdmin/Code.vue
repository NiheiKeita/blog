<script setup>
import BlogCode from "@/Components/blog/Code.vue";
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
    <BlogCode><slot /></BlogCode><ButtonPlus @click="clickEvent" color="red" />
</template>
