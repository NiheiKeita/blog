<script setup>
import ButtonPlus from "@/Components/button/Plus.vue";
const emit = defineEmits(["click"]);

const clickEvent = () => {
    emit("click");
};
</script>

<template>
    <div>
        <div class="text-blue-500 hover:underline">
            <slot />
        </div>
    </div>
    <ButtonPlus @click="clickEvent" color="green" />
</template>
