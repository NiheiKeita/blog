<script setup>
import ButtonPlus from "@/Components/button/Plus.vue";
const emit = defineEmits(["click"]);

const clickEvent = () => {
    emit("click");
};
</script>

<template>
    <code class="border border-gray-200 p-1 mx-1"><slot /></code>
    <!-- <p>
        <slot />

        <ButtonPlus @click="clickEvent" color="red" />
    </p> -->
    <ButtonPlus @click="clickEvent" color="red" />
</template>
