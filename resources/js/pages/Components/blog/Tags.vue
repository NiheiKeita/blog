<script setup>
const props = defineProps({
    tags: {
        type: Object,
        default: "input_display",
    },
});
</script>

<template>
    <div class="w-full flex justify-end mb-8">
        <div v-for="(tag, i) in tags" :key="i">
            <div class="border rounded-full bg-sky-300 px-2 m-1">
                <a
                    :href="route('tag.show', tag.id)"
                    class="text-sm hover:underline"
                >
                    {{ tag.name }}</a
                >
            </div>
        </div>
    </div>
</template>
