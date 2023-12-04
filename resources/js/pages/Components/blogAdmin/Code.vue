<script setup>
import BlogCode from "@/Components/blog/Code.vue";
import ButtonDelete from "@/Components/button/Delete.vue";
import ButtonPlus from "@/Components/button/Plus.vue";
const props = defineProps({
    content: {
        type: String,
        default: "input_display",
    },
});
const emit = defineEmits(["click", "delete"]);

const clickEvent = () => {
    emit("click");
};
const deleteEvent = () => {
    emit("delete");
};
</script>

<template>
    <BlogCode><slot /><ButtonDelete @click="deleteEvent" /></BlogCode
    ><ButtonPlus @click="clickEvent" color="red" />
</template>
