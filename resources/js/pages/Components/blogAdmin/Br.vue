<script setup>
import ButtonPlus from "@/Components/button/Plus.vue";
const emit = defineEmits(["click"]);

const clickEvent = () => {
    emit("click");
};
</script>

<template>
    <br />
    <ButtonPlus @click="clickEvent" color="red" />
</template>
