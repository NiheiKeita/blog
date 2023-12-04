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
    <code class="border border-gray-200 p-1 mx-1"
        ><slot /><ButtonDelete @click="deleteEvent"
    /></code>

    <ButtonPlus @click="clickEvent" color="red" />
</template>
