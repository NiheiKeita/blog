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
});
const submit = () => {
    form.content = contentRef.value;
    form.meta_title = metaTitleRef.value;
    form.meta_description = metaDescriptionRef.value;
    form.tags = tagsRef.value;

    form.post(route("admin.blog.store"));
};
const contents = ref([
    {
        id: 1,
        block_id: 1,
        content: "ddddd",
    },
    {
        id: 2,
        block_id: 2,
        content: "",
        com: [
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
    console.log(value);
    console.log(block_id);
    console.log(component_id);
    var content = null;
    if (component_id == "") {
        content = contents.value.find((element) => element.id == block_id);
    } else {
        content = contents.value
            .find((element) => element.id == block_id)
            .com.find((element) => element.id == component_id);
    }
    content.content = value;
    console.log(contents.value);
};
const addBlock = (block_id) => {
    console.log(block_id);
};
const addComponent = (block_id) => {
    console.log(block_id);
};
</script>

<template>
    <Layout>
        <div class="">
            <div
                class="mt-10 flex items-center justify-center text-3xl font-bold"
            >
                <p>ブログ新規作成</p>
            </div>
            <div class="flex justify-center mt-20">
                <div
                    class="w-full lg:w-3/4 min-h-full p-8 bg-white shadow-md rounded-md text-gray-700 border-gray-700 border-2"
                >
                    <template v-for="(content, i) in contents" :key="i">
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
                                v-for="(compo, j) in content.com"
                                :key="j"
                            >
                                <BlogP
                                    class="inline-block"
                                    v-if="compo.component_id == 1"
                                    @click="addComponent(compo.id)"
                                >
                                    <input
                                        @input="
                                            change(
                                                $event.target.value,
                                                content.id,
                                                compo.id
                                            )
                                        "
                                        type="text"
                                        class="bg-transparent inline-block whitespace-pre w-auto outline-none"
                                        :value="compo.content"
                                        v-autowidth="{
                                            maxWidth: '100%',
                                            minWidth: '10px',
                                            comfortZone: 0,
                                        }"
                                    />
                                </BlogP>
                                <BlogBr
                                    v-if="compo.component_id == 3"
                                    @click="addComponent(compo.id)"
                                />
                                <BlogCode
                                    class="inline-block"
                                    v-if="compo.component_id == 2"
                                    @click="addComponent(compo.id)"
                                >
                                    <input
                                        @input="
                                            change(
                                                $event.target.value,
                                                content.id,
                                                compo.id
                                            )
                                        "
                                        type="text"
                                        class="bg-transparent inline-block whitespace-pre w-auto outline-none"
                                        :value="compo.content"
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
                                v-autowidth="{
                                    maxWidth: '100%',
                                    minWidth: '10px',
                                    comfortZone: 0,
                                }"
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
                                v-autowidth="{
                                    maxWidth: '100%',
                                    minWidth: '10px',
                                    comfortZone: 0,
                                }"
                            />
                        </BlogURL>
                    </template>
                    <!-- <BlogGoal>
                        目標:
                        DBを作って`blogs`というテーブルを作成して、adminer.phpで確認する。
                    </BlogGoal>
                    <SubTitle>作成するテーブルのカラム</SubTitle>
                    <BlogContent>
                        作成するカラムは<BlogCode>id</BlogCode>
                        <BlogCode>created_at</BlogCode
                        ><BlogCode>updated_at</BlogCode>
                        <BlogCode>deleted_at</BlogCode
                        ><BlogCode>title</BlogCode>
                        <BlogCode>content</BlogCode>
                        <BlogCode>tags</BlogCode>の７つ。
                    </BlogContent>

                    <SubTitle>Migrationファイルを作成する</SubTitle>
                    <BlogContent>
                        Migrationファイルを作成するために、ターミナルで以下のコマンドを打つ
                    </BlogContent>
                    <BlogContent>
                        <BlogCode
                            >php artisan make:migration
                            create_blogs_table</BlogCode
                        >
                    </BlogContent>
                    <BlogContent>
                        コマンドに成功すると、以下のメッセージが出てきてblogsテーブルのマイグレーションファイルができる。
                    </BlogContent>
                    <BlogConsole>
                        INFO Migration<br />
                        [C:\xampp\htdocs\blog\blog\database\migrations/2023_11_11_133513_create_blogs_table.php]<br />
                        created successfully.<br />
                    </BlogConsole>
                    <BlogContent>
                        <BlogCode>database\migrations</BlogCode>フォルダの中に
                        <BlogCode
                            >2023_11_11_11111_create_blogs_table.php</BlogCode
                        >
                        のようなファイルができている。
                        <BlogCode>2023_11_11_11111</BlogCode
                        >はコマンドを実行した時間が書かれている。
                    </BlogContent>

                    <SubTitle>DBとテーブルを作成する</SubTitle>
                    <BlogContent>
                        コンソール上で以下のコマンドを実行する
                    </BlogContent>
                    <BlogContent>
                        <BlogCode>php artisan migrate</BlogCode>
                    </BlogContent>
                    <BlogContent>
                        コマンドに成功すると、DBが作られて作成したマイグレーションファイルが実行されて、`blogテーブル`が作成される。
                    </BlogContent>

                    <SubTitle
                        >DBを確認するために、adminer.phpを使用する</SubTitle
                    >
                    <BlogContent>
                        adminer.php1とは、１つのPHPファイルでデータベースを管理することができるツールのこと
                    </BlogContent>
                    <BlogContent>
                        public配下にadminer.phpをダウンロードしてきて設置する。ダウンロードページは以下のURL。
                    </BlogContent>
                    <BlogURL content="https://www.adminer.org/">
                        https://www.adminer.org/
                    </BlogURL>
                    <BlogContent>
                        xamppでは初期設定ではrootのパスワードが設定されていないため、設定する。
                    </BlogContent>
                    <BlogContent>
                        windowsのxammpp配下の<BlogCode>xampp\mysql\bin\</BlogCode>に行き、以下のコマンドを実行する。
                    </BlogContent>
                    <BlogContent>
                        <BlogCode>mysqladmin -u root password</BlogCode>
                    </BlogContent>
                    <BlogContent>
                        実行すると以下のように質問されるため、設定したいパスワードを２回入力する
                    </BlogContent>
                    <BlogConsole>
                        Newpassword: **** <br />
                        Confirm new password: ****
                    </BlogConsole>
                    <BlogContent>
                        .envにも設定したパスワードを入力する
                    </BlogContent>
                    <BlogContent>
                        ブラウザで、<BlogCode>\adminer.php</BlogCode>
                        にアクセスし、.envに書いてある情報を入力するとログインできる
                    </BlogContent>
                    <BlogContent>
                        さっき作成したblogsテーブルがあるから確認できる。作成したカラムがしっかり入っていれば成功。
                    </BlogContent>

                    <SubTitle>Modelを作成する</SubTitle>
                    <BlogContent>
                        コンソール上で以下のコマンドを実行する
                    </BlogContent>
                    <BlogContent>
                        <BlogCode
                            >php artisan make:model Blog app\Models</BlogCode
                        >
                    </BlogContent>
                    <BlogContent>
                        コマンドに成功すると、<BlogCode>app\Models</BlogCode>フォルダの中に`BlogModel`が作成されている。
                    </BlogContent> -->
                </div>
            </div>
        </div>
    </Layout>
</template>
