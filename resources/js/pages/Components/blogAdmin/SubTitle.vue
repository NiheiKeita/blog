<script setup>
import BloSubTitle from "@/Components/blog/SubTitle.vue";
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
    <BloSubTitle>
        <slot />
    </BloSubTitle>
    <ButtonPlus @click="clickEvent" color="green" />
</template>
