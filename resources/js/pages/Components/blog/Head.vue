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
        <meta name="og:title" :content="'暇なエンジニア｜' + blog.content" />
        <meta
            name="og:description"
            :content="'暇なエンジニア｜' + blog.meta_description"
        />
        <meta name="og:site_name" content="'暇なエンジニア" />
        <meta name="og:image" content="/imgs/icon_web.jpg" />
        <meta name="og:type" content="article" />
        <meta name="og:url" :content="route('blog.show', blog?.id)" />
        <meta name="keywords" :content="tags" />
    </Head>
</template>
