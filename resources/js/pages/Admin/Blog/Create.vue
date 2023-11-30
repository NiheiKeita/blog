<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
import BlogBr from "@/Components/blogAdmin/Br.vue";
import BlogCode from "@/Components/blogAdmin/Code.vue";
import BlogConsole from "@/Components/blogAdmin/Console.vue";
import BlogContent from "@/Components/blogAdmin/Content.vue";
import BlogGoal from "@/Components/blogAdmin/Goal.vue";
import BlogP from "@/Components/blogAdmin/P.vue";
import SubTitle from "@/Components/blogAdmin/SubTitle.vue";
import BlogURL from "@/Components/blogAdmin/URL.vue";
import ButtonDefaultThema from "@/Components/button/DefaultThema.vue";
import ButtonSub from "@/Components/button/Sub.vue";
import InputDefaultThema from "@/Components/input/DefaultThema.vue";
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

defineProps({ errors: Object });

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
    form.blocks = tagsRef.value;

    form.post(route("admin.blog.store"));
};
const blocksRef = ref([
    {
        id: 1,
        block_id: 1,
        content: "ddddd",
    },
    {
        id: 2,
        block_id: 2,
        content: "",
        components: [
            {
                id: 1,
                component_id: 1,
                content: "ddddd",
            },
            {
                id: 2,
                component_id: 2,
                content: "ddddd",
            },
            {
                id: 3,
                component_id: 3,
                content: "",
            },
            {
                id: 4,
                component_id: 1,
                content: "ddddd",
            },
        ],
    },
    {
        id: 3,
        block_id: 3,
        content: "ddddd",
    },
    {
        id: 4,
        block_id: 4,
        content: "ddddd",
    },
    {
        id: 5,
        block_id: 5,
        content: "ddddd",
    },
]);
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
                </div>
            </div>
            <div class="mt-10 flex items-center justify-center text-2xl">
                <p>内容</p>
            </div>
            <div class="flex justify-center mt-10">
                <div
                    class="w-full lg:w-3/4 min-h-full p-8 bg-white shadow-md rounded-md text-gray-700 border-gray-700 border-2"
                >
                    <template v-for="(content, i) in blocksRef" :key="i">
                        <BlogGoal
                            v-if="content.block_id == 1"
                            @click="addBlock(content.id)"
                        >
                            <input
                                @input="change($event.target.value, content.id)"
                                type="text"
                                class="bg-transparent inline-block whitespace-pre w-auto outline-none"
                                :value="content.content"
                                v-autowidth="{
                                    maxWidth: '100%',
                                    minWidth: '10px',
                                    comfortZone: 0,
                                }"
                            />
                        </BlogGoal>
                        <BlogContent
                            v-if="content.block_id == 2"
                            @click="addBlock(content.id)"
                        >
                            <template
                                v-for="(component, j) in content.components"
                                :key="j"
                            >
                                <BlogP
                                    class="inline-block"
                                    v-if="component.component_id == 1"
                                    @click="
                                        addComponent(content.id, component.id)
                                    "
                                >
                                    <input
                                        @input="
                                            change(
                                                $event.target.value,
                                                content.id,
                                                component.id
                                            )
                                        "
                                        type="text"
                                        class="bg-transparent inline-block whitespace-pre w-auto outline-none"
                                        :value="component.content"
                                        v-autowidth="{
                                            maxWidth: '100%',
                                            minWidth: '10px',
                                            comfortZone: 0,
                                        }"
                                    />
                                </BlogP>
                                <BlogBr
                                    v-if="component.component_id == 3"
                                    @click="
                                        addComponent(content.id, component.id)
                                    "
                                />
                                <BlogCode
                                    class="inline-block"
                                    v-if="component.component_id == 2"
                                    @click="
                                        addComponent(content.id, component.id)
                                    "
                                >
                                    <input
                                        @input="
                                            change(
                                                $event.target.value,
                                                content.id,
                                                component.id
                                            )
                                        "
                                        type="text"
                                        class="bg-transparent inline-block whitespace-pre w-auto outline-none"
                                        :value="component.content"
                                        v-autowidth="{
                                            maxWidth: '100%',
                                            minWidth: '10px',
                                            comfortZone: 0,
                                        }"
                                    />
                                </BlogCode>
                            </template>
                        </BlogContent>
                        <SubTitle
                            v-if="content.block_id == 3"
                            @click="addBlock(content.id)"
                        >
                            <input
                                @input="change($event.target.value, content.id)"
                                type="text"
                                class="bg-transparent inline-block whitespace-pre w-auto outline-none"
                                :value="content.content"
                            />
                        </SubTitle>
                        <BlogConsole
                            v-if="content.block_id == 4"
                            @click="addBlock(content.id)"
                        >
                            <textarea
                                @input="change($event.target.value, content.id)"
                                type="text"
                                class="bg-transparent inline-block whitespace-pre w-full outline-none"
                                v-model="content.content"
                            ></textarea>
                        </BlogConsole>
                        <BlogURL
                            v-if="content.block_id == 5"
                            @click="addBlock(content.id)"
                        >
                            <input
                                @input="change($event.target.value, content.id)"
                                type="text"
                                class="bg-transparent inline-block whitespace-pre w-auto outline-none"
                                :value="content.content"
                            />
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
