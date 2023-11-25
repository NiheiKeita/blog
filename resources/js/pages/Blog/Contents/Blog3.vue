<script setup>
import Layout from "@/Layouts/Layout.vue";
defineProps({
    hello: String,
    blog: Array,
});
</script>

<template>
    <Layout>
        <div class="w-full">
            <h1 class="text-4xl font-bold mb-4">
                Vueの相対パスを絶対パスにする
            </h1>
            <div class="mb-6">
                <p class="mb-2">vite.config.jsに記載する</p>
                <code class="mb-2">
                    resolve: { alias: { "@": "/resources/js/pages", }, },
                </code>
            </div>
            <div class="mb-6">
                <p class="mb-2">Vueのimportを修正する</p>
                <code class="mb-2"
                    >import Layout from "@/Admin/Layouts/Layout.vue";
                </code>
            </div>
        </div>
        <div class="w-full">
            <p>参考</p>
            <p class="w-full">
                https://qiita.com/fumiya4/items/4766731b23fb070d1837
            </p>
        </div>
    </Layout>
</template>
