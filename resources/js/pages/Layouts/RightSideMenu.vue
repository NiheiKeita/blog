<script setup>
import axios from "axios";
import { ref } from "vue";

const tagsRef = ref();
const blogsRef = ref();
axios
    .get("/api/tags/")
    .then((response) => {
        console.log(response);
        tagsRef.value = response.data;
    })
    .catch((error) => {
        console.log(error);
    })
    .finally(() => {});
axios
    .get("/api/blogs/")
    .then((response) => {
        console.log(response);
        blogsRef.value = response.data;
    })
    .catch((error) => {
        console.log(error);
    })
    .finally(() => {});
</script>

<template>
    <div class="w-full h-full p-8 shadow-md rounded-md text-gray-900 bg-Linen">
        <h2 class="text-xl font-bold mb-2" v-if="blogsRef">記事</h2>
        <div v-for="(blog, i) in blogsRef" :key="i">
            <a
                :href="route('blog.show', blog.id)"
                class="text-blue-500 hover:underline"
                >{{ blog.content }}</a
            >
        </div>
        <h2 class="text-xl font-bold mb-2 mt-10" v-if="tagsRef">タグ</h2>
        <div v-for="(tag, i) in tagsRef" :key="i">
            <a
                :href="route('tag.show', tag.id)"
                class="text-blue-500 hover:underline"
                >{{ tag.name }}</a
            >
        </div>
        <!-- <div>
            <Link
                :href="route('blog.show', 1)"
                class="text-blue-500 hover:underline"
                >メニュー1</Link
            >
        </div>
        <div>
            <Link
                :href="route('blog.show', 2)"
                class="text-blue-500 hover:underline"
                >メニュー2</Link
            >
        </div> -->
        <!-- <div class="mb-4">
            <h2 class="text-xl font-bold mb-2">カテゴリー</h2>
            <ul>
                <li>
                    <a href="#" class="text-blue-500 hover:underline"
                        >カテゴリー1
                    </a>
                </li>
                <li>
                    <a href="#" class="text-blue-500 hover:underline"
                        >カテゴリー2</a
                    >
                </li>
                <li>
                    <a href="#" class="text-blue-500 hover:underline"
                        >カテゴリー3</a
                    >
                </li>
            </ul>
        </div>

        <div class="mb-4">
            <h2 class="text-xl font-bold mb-2">人気の記事</h2>
            <ul>
                <li>
                    <a href="#" class="text-blue-500 hover:underline">記事1</a>
                </li>
                <li>
                    <a href="#" class="text-blue-500 hover:underline">記事2</a>
                </li>
                <li>
                    <a href="#" class="text-blue-500 hover:underline">記事3</a>
                </li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">フォローしてください</h2>
            <div class="flex items-center">
                <img
                    src="https://via.placeholder.com/40"
                    alt="Twitter"
                    class="rounded-full mr-2"
                />
                <a href="#" class="text-blue-500 hover:underline"
                    >@Twitterアカウント</a
                >
            </div>
            <div class="flex items-center mt-2">
                <img
                    src="https://via.placeholder.com/40"
                    alt="Instagram"
                    class="rounded-full mr-2"
                />
                <a href="#" class="text-blue-500 hover:underline"
                    >@Instagramアカウント</a
                >
            </div>
        </div>-->
    </div>
</template>
