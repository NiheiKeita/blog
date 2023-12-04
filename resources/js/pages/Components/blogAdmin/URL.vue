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
    <div class="border p-2">
        <div class="text-blue-500 hover:underline border border-gray-200">
            <slot />
        </div>
        <div class="w-full flex justify-end">
            <ButtonDelete @click="deleteEvent" />
        </div>
    </div>
    <ButtonPlus @click="clickEvent" color="green" />
</template>
