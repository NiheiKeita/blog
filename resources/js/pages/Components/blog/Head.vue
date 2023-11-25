<script setup>
import { Head } from "@inertiajs/vue3";
defineProps({
    blog: {
        type: Object,
        default: null,
    },
    tags: {
        type: String,
        default: null,
    },
});
</script>

<template>
    <Head>
        <title>{{ blog.content }}</title>
        <meta name="description" :content="blog.meta_description" />
        <meta name="keywords" :content="tags" />
    </Head>
</template>
