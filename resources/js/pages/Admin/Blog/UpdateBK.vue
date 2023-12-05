<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
import ButtonDefaultThema from "@/Components/button/DefaultThema.vue";
import ButtonSub from "@/Components/button/Sub.vue";
import InputDefaultThema from "@/Components/input/DefaultThema.vue";
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

const props = defineProps({ errors: Object, blog: Object, tags: Object });

const contentRef = ref(props.blog.content);
const metaTitleRef = ref(props.blog.meta_title);
const metaDescriptionRef = ref(props.blog.meta_description);
const tagsRef = ref(props.tags);

const form = useForm({
    content: null,
    meta_title: null,
    meta_description: null,
    tags: null,
});
const submit = () => {
    form.content = contentRef.value;
    form.meta_title = metaTitleRef.value;
    form.meta_description = metaDescriptionRef.value;
    form.tags = tagsRef.value;

    form.put(route("admin.blog.update", props.blog.id));
};
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
                    <InputDefaultThema
                        v-model="contentRef"
                        type="text"
                        name="content"
                        :error="errors.content"
                        class="mt-2"
                    />
                    <div class="mt-5">metaタグのtitle</div>
                    <InputDefaultThema
                        v-model="metaTitleRef"
                        type="text"
                        name="meta_title"
                        class="mt-2"
                    />
                    <div class="mt-5">meta_description</div>
                    <InputDefaultThema
                        v-model="metaDescriptionRef"
                        type="text"
                        name="meta_description"
                        class="mt-2"
                    />
                    <div class="mt-5">タグ</div>
                    <InputDefaultThema
                        v-model="tagsRef"
                        type="text"
                        name="tags"
                        class="mt-2"
                    />
                    <div class="flex justify-evenly">
                        <ButtonSub
                            class="my-2 mt-10 flex items-center justify-center"
                            msg="戻る"
                            @click="back"
                        />
                        <ButtonDefaultThema
                            class="my-2 mt-10 flex items-center justify-center"
                            msg="更新する"
                            @click="submit"
                            :isLoading="form.processing"
                        />
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
