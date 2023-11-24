<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
import ButtonSub from "@/Components/button/Sub.vue";

const props = defineProps({ errors: Object, blog: Object, tags: Object });
const back = () => {
    window.history.back();
};
</script>

<template>
    <Layout>
        <div class="">
            <div
                class="mt-10 flex items-center justify-center text-3xl font-bold"
            >
                <p>ブログ内容編集</p>
            </div>
            <div class="flex items-center justify-center mt-20">
                <div class="w-2/3">
                    <div>ブログのタイトル</div>
                    <div class="mt-5 ml-5">{{ blog.content }}</div>
                    <div class="mt-5">metaタグのtitle</div>
                    <div class="mt-5 ml-5">{{ blog.meta_title ?? "空欄" }}</div>
                    <div class="mt-5">meta_description</div>
                    <div class="mt-5 ml-5">
                        {{ blog.meta_description ?? "空欄" }}
                    </div>
                    <div class="mt-5">タグ</div>
                    <div class="mt-5 ml-5">{{ tags ?? "空欄" }}</div>
                </div>
            </div>
            <ButtonSub
                class="my-2 mt-10 flex items-center justify-center"
                msg="戻る"
                @click="back"
            />
        </div>
    </Layout>
</template>
