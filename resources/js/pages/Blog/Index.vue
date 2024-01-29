<script setup>
import Layout from "@/Layouts/Layout.vue";
import { Head, Link } from "@inertiajs/vue3";
defineProps({ errors: Object, blogs: Object });
const transition = () => {
    route("admin.blog.index");
};
const clickEvent = (on) => {
    return on(data);
};
</script>

<template>
    <Layout>
        <Head>
            <title>暇なエンジニア｜ブログ一覧</title>
            <meta name="description" content="暇なエンジニア｜ブログ一覧" />
            <meta name="og:title" content="暇なエンジニア｜ブログ一覧" />
            <meta name="og:description" content="暇なエンジニア｜ブログ一覧" />
            <meta name="og:site_name" content="'暇なエンジニア" />
            <meta name="og:image" content="/imgs/icon_web.jpg" />
            <meta name="og:type" content="blog" />
            <meta property="og:url" content=" ページの URL" />
        </Head>
        <div class="">
            <div
                class="mt-10 flex items-center justify-center text-3xl font-bold"
            >
                <p>ブログ一覧</p>
            </div>
            <ul class="mt-10">
                <li
                    v-for="(blog, i) in blogs"
                    :key="i"
                    class="rounded shadow-md border-b p-4 m-2 bg-white"
                >
                    <Link
                        :href="route('blog.show', blog.id)"
                        class="flex justify-between"
                    >
                        <p class="text-blue-500 hover:underline">
                            {{ blog.content }}
                        </p>
                    </Link>
                </li>
            </ul>
        </div>
    </Layout>
</template>
