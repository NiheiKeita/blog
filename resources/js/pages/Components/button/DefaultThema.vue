<script setup lang="ts">
const props = defineProps({
    msg: {
        type: String,
        default: "button",
    },
    isLoading: {
        type: Boolean,
        default: false,
    },
});
const emit = defineEmits(["click"]);

const clickEvent = () => {
    if (props.isLoading) {
        return;
    }
    console.log("ckick"); // eslint-disable-line no-console
    emit("click");
};
</script>

<template>
    <div class="flex items-center justify-center">
        <a href="javascript:void(0)" @click="clickEvent">
            <div
                class="min-w-[200px] rounded-lg border border-ThemaColorComplementary bg-ThemaColor hover:bg-ThemaColorHover shadow-md"
            >
                <p
                    class="mx-10 my-2 flex justify-center text-lg text-white"
                    v-if="!isLoading"
                >
                    {{ msg }}
                </p>
                <div
                    className="flex justify-center mt-1"
                    aria-label="読み込み中"
                    v-if="isLoading"
                >
                    <div
                        className="my-1 animate-spin h-8 w-8 border-4 border-blue-300 rounded-full border-t-transparent"
                    ></div>
                </div>
            </div>
        </a>
    </div>
</template>
