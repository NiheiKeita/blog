<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
import BlogCode from "@/Components/blog/Code.vue";
import BlogConsole from "@/Components/blog/Console.vue";
import BlogContent from "@/Components/blog/Content.vue";
import BlogGoal from "@/Components/blog/Goal.vue";
import SubTitle from "@/Components/blog/SubTitle.vue";
import BlogTags from "@/Components/blog/Tags.vue";
import BlogTitle from "@/Components/blog/Title.vue";
import BlogURL from "@/Components/blog/URL.vue";
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

const props = defineProps({ errors: Object, blog: Object, tags: Object });

const contentRef = ref("");
const metaTitleRef = ref("");
const metaDescriptionRef = ref("");
const tagsRef = ref("");

const form = useForm({
    content: null,
    meta_title: null,
    meta_description: null,
    tags: null,
    blocks: null,
});
const submit = () => {
    form.content = contentRef.value;
    form.meta_title = metaTitleRef.value;
    form.meta_description = metaDescriptionRef.value;
    form.tags = tagsRef.value;
    form.blocks = blocksRef.value;

    form.post(route("admin.blog.store"));
};
const blocksRef = ref(props.blog.blog_blocks);
const back = () => {
    window.history.back();
};

const change = (value, block_id, component_id = "") => {
    var content = null;
    if (component_id == "") {
        content = blocksRef.value.find((element) => element.id == block_id);
    } else {
        content = blocksRef.value
            .find((element) => element.id == block_id)
            .components.find((element) => element.id == component_id);
    }

    content.content = value;
};
const addBlock = (block_id) => {
    //TODO(popupで処理追加)
    var ids = blocksRef.value.map(function (data) {
        return data.id;
    });
    var addBlock = {
        id: Math.max.apply(null, ids) + 1,
        block_id: 5,
        content: "",
    };
    blocksRef.value.splice(
        blocksRef.value.findIndex((element) => element.id == block_id) + 1,
        0,
        addBlock
    );
};
const addComponent = (block_id, component_id) => {
    //TODO(popupで処理追加)
    var component = blocksRef.value.find(
        (element) => element.id == block_id
    ).components;
    var ids = component.map(function (data) {
        return data.id;
    });
    var addComponent = {
        id: Math.max.apply(null, ids) + 1,
        component_id: 1,
        content: "",
    };
    blocksRef.value
        .find((element) => element.id == block_id)
        .components.splice(
            component.findIndex((element) => element.id == component_id) + 1,
            0,
            addComponent
        );
};
</script>

<template>
    <Layout>
        <div class="mb-20">
            <div
                class="mt-10 flex items-center justify-center text-3xl font-bold"
            >
                <p>ブログ新規作成</p>
            </div>
            <div class="flex justify-center mt-20">
                <div class="w-full lg:w-3/4 min-h-full p-8">
                    <div>ブログのタイトル</div>
                    <div class="mt-5 ml-5">{{ blog.content }}</div>
                    <div class="mt-5">metaタグのtitle</div>
                    <div class="mt-5 ml-5">
                        {{ blog.meta_title ?? "--空欄--" }}
                    </div>
                    <div class="mt-5">meta_description</div>
                    <div class="mt-5 ml-5">
                        {{ blog.meta_description ?? "--空欄--" }}
                    </div>
                    <div class="mt-5">タグ</div>
                    <div class="mt-5 ml-5">{{ tags ?? "--空欄--" }}</div>
                    <div class="mt-5">URL</div>
                    <div class="mt-5">
                        <a
                            :href="route('blog.show', blog.id)"
                            target="_blank"
                            class="text-blue-500 hover:underline"
                            >{{ route("blog.show", blog.id) }}</a
                        >
                    </div>
                </div>
            </div>
            <div class="mt-10 flex items-center justify-center text-2xl">
                <p>内容</p>
            </div>
            <div class="flex justify-center mt-10">
                <div
                    class="w-full lg:w-3/4 min-h-full p-8 bg-white shadow-md rounded-md text-gray-700 border-gray-700 border-2"
                >
                    <BlogTitle>{{ blog.content }}</BlogTitle>
                    <BlogTags :tags="blog.tags" />
                    <template v-for="(content, i) in blog.blog_blocks" :key="i">
                        <BlogGoal
                            v-if="content.block_id == 1"
                            @click="addBlock(content.id)"
                        >
                            {{ content.content }}
                        </BlogGoal>
                        <BlogContent
                            v-if="content.block_id == 2"
                            @click="addBlock(content.id)"
                        >
                            <template
                                v-for="(
                                    component, j
                                ) in content.blog_components"
                                :key="j"
                            >
                                <p
                                    class="inline-block"
                                    v-if="component.component_id == 1"
                                >
                                    {{ component.content }}
                                </p>
                                <BlogCode
                                    class="inline-block"
                                    v-if="component.component_id == 2"
                                >
                                    {{ component.content }}
                                </BlogCode>
                                <br v-if="component.component_id == 3" />
                            </template>
                        </BlogContent>
                        <SubTitle v-if="content.block_id == 3">
                            {{ content.content }}
                        </SubTitle>
                        <BlogConsole
                            v-if="content.block_id == 4"
                            class="whitespace-pre-wrap"
                        >
                            {{ content.content }}
                        </BlogConsole>
                        <BlogURL v-if="content.block_id == 5">
                            {{ content.content }}
                        </BlogURL>
                    </template>
                </div>
            </div>
            <div class="flex justify-evenly">
                <ButtonSub
                    class="my-2 mt-10 flex items-center justify-center"
                    msg="戻る"
                    @click="back"
                />
                <ButtonDefaultThema
                    class="my-2 mt-10 flex items-center justify-center"
                    msg="作成する"
                    :isLoading="form.processing"
                    @click="submit"
                />
            </div>
        </div>
    </Layout>
</template>
