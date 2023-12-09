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
    <div class="inline-block h-full ms-5">
        <div class="flex items-end justify-end">
            <a
                href="javascript:void(0)"
                @click="clickEvent"
                class="flex item-center"
            >
                <div class="w-5 h-5 flex items-center justify-center">
                    <img class="w-5 h-5" src="/imgs/delete.svg" />
                </div>
            </a>
        </div>
    </div>
</template>
