<script setup>
import BlogGoal from "@/Components/blog/Goal.vue";
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
    <div class="border p-2">
        <BlogGoal><slot /></BlogGoal>
        <div class="w-full flex justify-end">
            <ButtonDelete @click="deleteEvent" />
        </div>
    </div>
    <ButtonPlus @click="clickEvent" color="green" />
</template>
