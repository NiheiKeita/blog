<script setup>
import ButtonPlus from "@/Components/button/Plus.vue";
const emit = defineEmits(["click"]);

const clickEvent = () => {
    emit("click");
};
</script>

<template>
    <p>
        <slot />
        <ButtonPlus @click="clickEvent" color="red" />
    </p>
</template>
