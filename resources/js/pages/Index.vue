<script setup>
defineProps({
    hello: String,
});
</script>

<template>
    <div class="font-body">
        <div class="fixed inset-0 -z-10 bg-gray-50 lg:mx-[20%]"></div>
        <Header class="z-50" />
        <div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</template>
