<script setup>
import Layout from "@/Layouts/Layout.vue";
defineProps({
    hello: String,
    blog: Array,
});
</script>

<template>
    <Layout>
        <BlogHead :blog="blog" :tags="tags" />
        <div class="w-full">
            <h1 class="text-4xl font-bold mb-4">Vueエラーの治し方</h1>
            <code class="mb-2">
                Cannot find module '@/Layouts/Layout.vue' or its corresponding
                type declarations
            </code>
            このコードを直す
        </div>
        <div class="w-full">
            <p>参考</p>
            <p class="w-full">
                https://qiita.com/fumiya4/items/4766731b23fb070d1837
            </p>
        </div>
    </Layout>
</template>
