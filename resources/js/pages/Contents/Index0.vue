<script setup>
defineProps({
    hello: String,
});
</script>

<template>
    <div>
        0
        <div href="/" class="text-sm text-red-700 underline">ホームへ戻る</div>
        {{ hello }}
    </div>
</template>
