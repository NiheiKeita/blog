<script setup>
import Layout from "../../Layouts/Layout.vue";
defineProps({
    hello: String,
    blog: Array,
});
</script>

<template>
    <Layout>
        <div class="w-full">
            <h1 class="text-4xl font-bold mb-4">
                Laravel のrouteをvueで使用する
            </h1>
            <div class="mb-6">
                <p class="mb-2">
                    composer コマンドで Ziggyパッケージのインストール
                </p>
                <code class="mb-2"> composer require tightenco/ziggy </code>
                <p class="">app.blade.php ファイルに@routesを追加</p>
            </div>
            <div class="mb-6">
                <p class="mb-2">app.jsに</p>
                <code class="mb-2"> .mixin({ methods: { route } }) </code>
                <p class="">aを追加する</p>
            </div>
        </div>
        <div class="w-full">
            <p>参考</p>
            <p class="w-full">
                https://reffect.co.jp/laravel/laravel_inertia_js_vue/#%E5%90%8D%E5%89%8D%E4%BB%98%E3%81%8D%E3%83%AB%E3%83%BC%E3%83%88%E3%81%AE%E8%A8%AD%E5%AE%9Aziggy
            </p>
        </div>
    </Layout>
</template>
