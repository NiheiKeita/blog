<script setup>
import ButtonDelete from "@/Components/button/Delete.vue";
import ButtonPlus from "@/Components/button/Plus.vue";
const emit = defineEmits(["click", "delete"]);

const clickEvent = () => {
    emit("click");
};
const deleteEvent = () => {
    emit("delete");
};
</script>

<template>
    ↴<ButtonDelete @click="deleteEvent" /><br />
    <ButtonPlus @click="clickEvent" color="red" />
</template>
