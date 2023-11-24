<script setup lang="ts">
defineProps({
    name: {
        type: String,
        default: "input_name",
    },
    modelValue: {
        type: String,
        default: "input_value",
    },
    error: {
        type: String,
        default: "",
    },
    type: {
        type: String,
        default: "text",
    },
});
const emits = defineEmits<{
    (e: "update:modelValue", text: string): void;
    (e: "change-emit"): void;
}>();
const onInputText = (e: Event) => {
    const target = e.target as HTMLInputElement;
    emits("update:modelValue", target.value);
    emits("change-emit");
};
</script>

<template>
    <div>
        <div class="flex w-full items-center">
            <input
                class="w-full rounded-md border border-gray-400 p-2 outline-blue-200 focus:outline focus:outline-4"
                :type="type"
                :name="name"
                :value="modelValue"
                @input="onInputText"
            />
        </div>
        <div
            v-if="error"
            class="text-red-700 mt-1 rounded text-base flex items-center"
        >
            <img
                class="h-5 w-5 flex justify-center text-center"
                src="/imgs/exclamation_mark.svg"
            />
            <p class="ms-1">
                {{ error }}
            </p>
        </div>
    </div>
</template>
