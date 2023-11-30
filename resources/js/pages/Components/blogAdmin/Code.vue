<script setup>
import BloCode from "@/Components/blog/Code.vue";
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
    <BloCode><slot /></BloCode><ButtonPlus @click="clickEvent" color="red" />
</template>
