<script setup lang="ts">
const props = defineProps({
    color: {
        type: String,
        default: "green",
    },
});
const emit = defineEmits(["click"]);

const clickEvent = () => {
    emit("click");
};
</script>

<template>
    <div class="inline-block mb-5">
        <div class="rounded-full flex item-center justify-center">
            <a
                href="javascript:void(0)"
                @click="clickEvent"
                class="flex item-center"
            >
                <div
                    class="bg-green-400 w-5 h-5 rounded-full flex items-center justify-center"
                    v-if="color == 'green'"
                >
                    <p class="text-white">+</p>
                </div>
                <div
                    class="bg-red-400 w-5 h-5 rounded-full flex items-center justify-center"
                    v-if="color == 'red'"
                >
                    <p class="text-white">+</p>
                </div>
            </a>
        </div>
    </div>
</template>
