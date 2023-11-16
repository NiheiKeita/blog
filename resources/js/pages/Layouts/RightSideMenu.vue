<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <div class="w-full h-full p-8 shadow-md rounded-md text-gray-900 bg-Linen">
        <div><a :href="route('top')">メニュー</a></div>
        <div><Link :href="route('blog.content', 1)">メニュー1</Link></div>
        <div><Link :href="route('blog.content', 2)">メニュー2</Link></div>
        <div class="mb-4">
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
        </div>
    </div>
</template>
