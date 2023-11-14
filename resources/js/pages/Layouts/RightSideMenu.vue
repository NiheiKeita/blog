<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>
<template>
    <div class="w-full h-full p-8 bg-white shadow-md rounded-md text-gray-700">
        <a :href="route('top')">メニュー</a>
        <Link :href="route('blog.content', 1)">メニュー1</Link>
        <Link :href="route('blog.content', 2)">メニュー2</Link>
    </div>
</template>
