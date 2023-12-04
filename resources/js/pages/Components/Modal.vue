<script setup>
const props = defineProps({
    show: {
        type: Boolean,
        default: true,
    },
    title: {
        type: String,
        default: "title",
    },
    options: {
        type: Object,
        default: null,
    },
});
const emit = defineEmits(["closeClick", "select"]);
const closeModal = () => {
    emit("closeClick");
};
const selectModal = (option_id) => {
    emit("select", option_id);
};
// const options = [
//     { option_id: 1, label: "BlogGoal" },
//     { option_id: 2, label: "文章" },
//     { option_id: 3, label: "SubTitle" },
//     { option_id: 4, label: "BlogConsole" },
//     { option_id: 5, label: "BlogURL" },
// ];
</script>

<!-- Modal.vue -->
<template>
    <div class="fixed inset-0 overflow-y-auto" v-if="show">
        <div
            class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
        >
            <div class="fixed inset-0 transition-opacity" @click="closeModal">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span
                class="hidden sm:inline-block sm:align-middle sm:h-screen"
            ></span
            >​

            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog"
                aria-modal="true"
                aria-labelledby="modal-headline"
            >
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h2 class="text-2xl font-bold mb-4">{{ title }}</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <!-- 選択肢を表示 -->
                        <div
                            v-for="option in options"
                            :key="option.option_id"
                            @click="selectModal(option.option_id)"
                            class="cursor-pointer p-4 border border-gray-300 rounded-md hover:bg-gray-100"
                        >
                            {{ option.label }}
                        </div>
                    </div>
                </div>
                <div
                    class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse"
                >
                    <button
                        type="button"
                        @click="closeModal"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"
                    >
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
