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
import Modal from "@/Components/Modal.vue";

import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

defineProps({ errors: Object });

const blockType = [
    { option_id: 1, label: "BlogGoal" },
    { option_id: 2, label: "文章" },
    { option_id: 3, label: "SubTitle" },
    { option_id: 4, label: "BlogConsole" },
    { option_id: 5, label: "BlogURL" },
];
const componentType = [
    { option_id: 1, label: "BlogP" },
    { option_id: 2, label: "BlogCode" },
    { option_id: 3, label: "BlogBr" },
];
const contentRef = ref("");
const metaTitleRef = ref("");
const metaDescriptionRef = ref("");
const tagsRef = ref("");
const selectBlock = ref(0);
const blockSeletModalopenRef = ref(false);
const selectComponent = ref(0);
const componentSeletModalopenRef = ref(false);
const blocksRef = ref([
    {
        id: 1,
        block_id: 1,
        content: "",
    },
]);

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
            .blog_components.find((element) => element.id == component_id);
    }

    content.content = value;
};

//POPUP系
//追加関係
const blockSeletModalopen = (block_id) => {
    selectBlock.value = block_id;
    blockSeletModalopenRef.value = true;
};
const blockSeletModalclose = () => {
    selectBlock.value = 0;
    blockSeletModalopenRef.value = false;
};
const componentSeletModalopen = (block_id, component_id) => {
    selectComponent.value = component_id;
    selectBlock.value = block_id;
    componentSeletModalopenRef.value = true;
};
const componentSeletModalclose = () => {
    selectComponent.value = 0;
    selectBlock.value = 0;
    componentSeletModalopenRef.value = false;
};
const addBlock = (select_block_id) => {
    if (selectBlock.value == 0) {
        blockSeletModalclose();
        return;
    }
    var ids = blocksRef.value.map(function (data) {
        return data.id;
    });
    var addComp = [];
    if (select_block_id == 2) {
        addComp = [
            {
                id: 1,
                component_id: 1,
                content: "",
            },
        ];
    }
    var addBlock = {
        id: Math.max.apply(null, ids) + 1,
        block_id: select_block_id,
        content: "",
        blog_components: addComp,
    };
    blocksRef.value.splice(
        blocksRef.value.findIndex(
            (element) => element.id == selectBlock.value
        ) + 1,
        0,
        addBlock
    );
    blockSeletModalclose();
};
const addComponent = (component_id) => {
    if (selectComponent.value == 0 || selectBlock.value == 0) {
        componentSeletModalclose();
        return;
    }
    var component = blocksRef.value.find(
        (element) => element.id == selectBlock.value
    ).blog_components;
    var ids = component.map(function (data) {
        return data.id;
    });
    var addComponent = {
        id: Math.max.apply(null, ids) + 1,
        component_id: component_id,
        content: "",
    };
    blocksRef.value
        .find((element) => element.id == selectBlock.value)
        .blog_components.splice(
            component.findIndex(
                (element) => element.id == selectComponent.value
            ) + 1,
            0,
            addComponent
        );
    componentSeletModalclose();
};

//削除関係
const deleteBlock = (block_id) => {
    if (blocksRef.value.length <= 1) {
        return;
    }
    blocksRef.value.splice(
        blocksRef.value.findIndex((element) => element.id == block_id),
        1
    );
};
const componentDelete = (block_id, component_id) => {
    var component = blocksRef.value.find(
        (element) => element.id == block_id
    ).blog_components;
    if (component.length <= 1) {
        return;
    }
    blocksRef.value
        .find((element) => element.id == block_id)
        .blog_components.splice(
            component.findIndex((element) => element.id == component_id),
            1
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
                            @click="blockSeletModalopen(content.id)"
                            @delete="deleteBlock(content.id)"
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
                            @click="blockSeletModalopen(content.id)"
                            @delete="deleteBlock(content.id)"
                        >
                            <template
                                v-for="(
                                    component, j
                                ) in content.blog_components"
                                :key="j"
                            >
                                <BlogP
                                    class="inline-block"
                                    v-if="component.component_id == 1"
                                    @click="
                                        componentSeletModalopen(
                                            content.id,
                                            component.id
                                        )
                                    "
                                    @delete="
                                        componentDelete(
                                            content.id,
                                            component.id
                                        )
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
                                        componentSeletModalopen(
                                            content.id,
                                            component.id
                                        )
                                    "
                                    @delete="
                                        componentDelete(
                                            content.id,
                                            component.id
                                        )
                                    "
                                />
                                <BlogCode
                                    class="inline-block"
                                    v-if="component.component_id == 2"
                                    @click="
                                        componentSeletModalopen(
                                            content.id,
                                            component.id
                                        )
                                    "
                                    @delete="
                                        componentDelete(
                                            content.id,
                                            component.id
                                        )
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
                            @click="blockSeletModalopen(content.id)"
                            @delete="deleteBlock(content.id)"
                        >
                            <input
                                @input="change($event.target.value, content.id)"
                                type="text"
                                class="bg-transparent inline-block whitespace-pre w-full outline-none"
                                :value="content.content"
                            />
                        </SubTitle>
                        <BlogConsole
                            v-if="content.block_id == 4"
                            @click="blockSeletModalopen(content.id)"
                            @delete="deleteBlock(content.id)"
                        >
                            <textarea
                                @input="change($event.target.value, content.id)"
                                type="text"
                                class="bg-transparent inline-block whitespace-pre w-full outline-none"
                                v-model="content.content"
                                rows="5"
                            ></textarea>
                        </BlogConsole>
                        <BlogURL
                            v-if="content.block_id == 5"
                            @click="blockSeletModalopen(content.id)"
                            @delete="deleteBlock(content.id)"
                        >
                            <input
                                @input="change($event.target.value, content.id)"
                                type="text"
                                class="w-full bg-transparent inline-block whitespace-pre outline-none"
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
        <Modal
            :options="blockType"
            :show="blockSeletModalopenRef"
            @closeClick="blockSeletModalclose"
            @select="addBlock($event)"
        />
        <Modal
            :options="componentType"
            :show="componentSeletModalopenRef"
            @closeClick="componentSeletModalclose"
            @select="addComponent($event)"
        />
    </Layout>
</template>
