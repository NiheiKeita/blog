<script setup>
import Layout from "@/Layouts/Layout.vue";
import { Head, Link } from "@inertiajs/vue3";
defineProps({ errors: Object, tags: Object });
const transition = () => {
    route("admin.blog.index");
};
</script>

<template>
    <Layout>
        <Head>
            <title>暇なエンジニア｜タグ一覧</title>
            <meta name="description" content="暇なエンジニア｜タグ一覧" />
            <meta name="og:title" content="暇なエンジニア｜タグ一覧" />
            <meta name="og:description" content="暇なエンジニア｜タグ一覧" />
            <meta name="og:site_name" content="'暇なエンジニア" />
            <meta name="og:image" content="/imgs/icon_web.jpg" />
        </Head>
        <div class="">
            <div
                class="mt-10 flex items-center justify-center text-3xl font-bold"
            >
                <p>タグ一覧</p>
            </div>
            <ul class="mt-10">
                <li
                    v-for="(tag, i) in tags"
                    :key="i"
                    class="rounded shadow-md border-b p-4 m-2 bg-white"
                >
                    <Link
                        :href="route('blog.show', tag.id)"
                        class="flex justify-between"
                    >
                        <p class="text-blue-500 hover:underline">
                            {{ tag.name }}
                        </p>
                    </Link>
                </li>
            </ul>
        </div>
    </Layout>
</template>
