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
            <h1 class="text-4xl font-bold mb-4">
                Vue3でinputの長さを可変にしたい
            </h1>
            入力した文字の長さによって、inputたぐの長さを変化させる方法。
        </div>
        <div class="w-full">
            <p>下に書かれているvue-input-autowidthというプラグインを使用する</p>
            <p class="w-full">
                https://github.com/syropian/vue-input-autowidth
            </p>
            <p>下記コマンドを実行する</p>
            <p>npm install --save vue-input-autowidth@next</p>
            <p>その後、app.jsに以下を記載する</p>
            <p>
                import { plugin as VueInputAutowidth } from
                "vue-input-autowidth"; setup({ el, App, props, plugin }) {
                return createApp({ render: () => h(App, props) })
                .use(VueInputAutowidth)
            </p>
            <p>inputタグを以下のように作れば可変のinputが作成できる</p>
            <code>
                <input
                    type="text"
                    v-autowidth="{
                        maxWidth: '100%',
                        minWidth: '10px',
                        comfortZone: 0,
                    }"
                    placeholder="!"
                />
            </code>
        </div>
    </Layout>

    以下のコマンドを実行すると、/でlaravelが開けるようになる ln -s
    /home/*****/blog/blog/public/ /home//*****///*****/.xsrv.jp/public_html
</template>
