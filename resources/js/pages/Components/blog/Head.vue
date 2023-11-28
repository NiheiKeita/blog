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
        <title>暇なエンジニア｜{{ blog.content }}</title>
        <meta
            name="description"
            :content="'暇なエンジニア｜' + blog.meta_description"
        />
        <meta name="keywords" :content="tags" />
    </Head>
</template>
