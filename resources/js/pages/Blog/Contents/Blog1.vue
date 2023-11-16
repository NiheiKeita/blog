<script setup>
import Layout from "../../Layouts/Layout.vue";
defineProps({
    hello: String,
    blog: Array,
});
</script>

<template>
    <Layout>
        <div class="">
            <h1 class="text-4xl font-bold mb-4">Laravel DB作成</h1>
            <div class="mb-6">
                <p class="mb-2">
                    目標: DBを作って`blogs`というテーブルを作成する。
                </p>
                <p class="mb-2">
                    作成するカラムは`id`, `created_at`, `updated_at`,
                    `deleted_at`, `title`, `content`, `tags`。
                </p>
                <p class="">
                    `deleted_at`はソフトデリートを実装するために作成する。
                </p>
            </div>

            <div class="mb-6">
                <h2 class="text-2xl font-bold mb-2">Migrationファイル作成</h2>
                <p class="mb-4">
                    ターミナルで以下のコマンドを打つ:
                    <code class="bg-gray-200 p-1"
                        >php artisan make:migration create_blogs_table</code
                    ><br />
                    以下のメッセージが出てきて、`blogs`のマイグレーションファイルができた。<br />
                    INFO Migration
                    [C:\xampp\htdocs\blog\blog\database\migrations/2023_11_11_133513_create_blogs_table.php]
                    created successfully.<br />
                    `database\migrations`フォルダの中に`2023_11_11_133513_create_blogs_table.php`というファイルができている。
                </p>
            </div>

            <div class="mb-6">
                <h2 class="text-2xl font-bold mb-2">テーブル作成</h2>
                <p class="mb-4">
                    以下のコマンドを実行すると、テーブルが作成される:
                    <code class="bg-gray-200 p-1">php artisan migrate</code>
                </p>
            </div>

            <div class="mb-6">
                <h2 class="text-2xl font-bold mb-2">Model作成</h2>
                <p class="mb-4">
                    以下のコマンドを実行すると、`Blog`モデルが作成される:
                    <code class="bg-gray-200 p-1"
                        >php artisan make:model Blog app\Models</code
                    ><br />
                    フォルダに`BlogModel`が作成されている。
                </p>
            </div>
        </div>

        <!-- laravel DB作成 目標 DBを作ってblogsというテーブルを作成する
        作成するカラムはid,create_at,update_at,delete_at,title,content,tags
        delete_atはソフトデリートを実装するために作成する
        ・migrationファイル作成 ターミナルで以下のコマンドを打つ php artisan
        make:migration create_blogs_table
        以下のメッセージが出てきて、blogsのマイグレーションファイルができた INFO
        Migration
        [C:\xampp\htdocs\blog\blog\database\migrations/2023_11_11_133513_create_blogs_table.php]
        created successfully. database\migrations フォルダの中 に
        2023_11_11_133513_create_blogs_table.php というファイルができている
        テーブルを実際に作成 以下のコマンドを実行すると、テーブルが作成される
        php artisan migrate Modelを作成
        以下のコマンドを実行すると、Blogモデルが作成される php artisan
        make:model Blog app\Models　フォルダに BlogModelが作成されている
        Factory作成 php artisan make:factory BlogFactory Seederを実行 php
        artisan db:seed adminer.phpを設置する
        public配下にadminer.phpをダウンロードしてきて設置します。
        ダウンロードページは以下 https://www.adminer.org/
        xamppでは初期設定ではrootのパスワードが設定されていないため、設定する
        下のパスに行き、 xampp\mysql\bin\ 下のコマンドを実行する mysqladmin -u
        root password
        すると以下のように質問されるため、設定したいパスワードを２回入力する New
        password: **** Confirm new password: ****
        .envにも設定したパスワードを入力する \adminer.php
        にアクセスし、.envに書いてある情報を入力するとログインできる -->
    </Layout>
</template>
