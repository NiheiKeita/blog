<script setup>
import BlogTags from "@/Components/blog/MenuTags.vue";
import axios from "axios";
import { ref } from "vue";

const tagsRef = ref();
const blogsRef = ref();
axios
    .get("/api/tags/")
    .then((response) => {
        tagsRef.value = response.data;
    })
    .catch((error) => {
        // console.log(error);
    })
    .finally(() => {});
axios
    .get("/api/blogs/")
    .then((response) => {
        blogsRef.value = response.data;
    })
    .catch((error) => {
        // console.log(error);
    })
    .finally(() => {});
</script>

<template>
    <div
        class="w-full h-full p-8 shadow-md rounded-md text-gray-900 bg-Linen leading-6 text-sm"
    >
        <h2 class="text-xl font-bold mb-2" v-if="blogsRef">記事</h2>
        <div v-for="(blog, i) in blogsRef" :key="i">
            <div class="flex justify-start">
                <div>・</div>
                <a
                    :href="route('blog.show', blog.id)"
                    class="text-blue-500 hover:underline"
                    >{{ blog.content }}</a
                >
            </div>
        </div>
        <h2 class="text-xl font-bold mb-2 mt-10" v-if="tagsRef">タグ</h2>
        <BlogTags :tags="tagsRef" />
    </div>
</template>
