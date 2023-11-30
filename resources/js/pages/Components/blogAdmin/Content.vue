<script setup>
import BlogContent from "@/Components/blog/Content.vue";
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
    <BlogContent>
        <slot />
    </BlogContent>
    <ButtonPlus @click="clickEvent" color="green" />
</template>
