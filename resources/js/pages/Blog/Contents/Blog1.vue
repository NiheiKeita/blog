<script setup>
import BlogCode from "@/Components/blog/Code.vue";
import BlogConsole from "@/Components/blog/Console.vue";
import BlogContent from "@/Components/blog/Content.vue";
import BlogGoal from "@/Components/blog/Goal.vue";
import BlogHead from "@/Components/blog/Head.vue";
import SubTitle from "@/Components/blog/SubTitle.vue";
import BlogTags from "@/Components/blog/Tags.vue";
import BlogTitle from "@/Components/blog/Title.vue";
import BlogURL from "@/Components/blog/URL.vue";
import Layout from "@/Layouts/Layout.vue";
defineProps({
    hello: String,
    blog: Array,
    tags: String,
});
</script>

<template>
    <Layout>
        <BlogHead :blog="blog" :tags="tags" />
        <BlogTitle>{{ blog.content }}</BlogTitle>
        <BlogTags :tags="blog.tags" />
        <BlogGoal>
            目標:
            DBを作って`blogs`というテーブルを作成して、adminer.phpで確認する。
        </BlogGoal>
        <SubTitle>作成するテーブルのカラム</SubTitle>
        <BlogContent>
            作成するカラムは<BlogCode>id</BlogCode>
            <BlogCode>created_at</BlogCode><BlogCode>updated_at</BlogCode>
            <BlogCode>deleted_at</BlogCode><BlogCode>title</BlogCode>
            <BlogCode>content</BlogCode>
            <BlogCode>tags</BlogCode>の７つ。
        </BlogContent>

        <SubTitle>Migrationファイルを作成する</SubTitle>
        <BlogContent>
            Migrationファイルを作成するために、ターミナルで以下のコマンドを打つ
        </BlogContent>
        <BlogContent>
            <BlogCode>php artisan make:migration create_blogs_table</BlogCode>
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
            <BlogCode>2023_11_11_11111_create_blogs_table.php</BlogCode>
            のようなファイルができている。
            <BlogCode>2023_11_11_11111</BlogCode
            >はコマンドを実行した時間が書かれている。
        </BlogContent>

        <SubTitle>DBとテーブルを作成する</SubTitle>
        <BlogContent> コンソール上で以下のコマンドを実行する </BlogContent>
        <BlogContent>
            <BlogCode>php artisan migrate</BlogCode>
        </BlogContent>
        <BlogContent>
            コマンドに成功すると、DBが作られて作成したマイグレーションファイルが実行されて、`blogテーブル`が作成される。
        </BlogContent>

        <SubTitle>DBを確認するために、adminer.phpを使用する</SubTitle>
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
        <BlogContent> .envにも設定したパスワードを入力する </BlogContent>
        <BlogContent>
            ブラウザで、<BlogCode>\adminer.php</BlogCode>
            にアクセスし、.envに書いてある情報を入力するとログインできる
        </BlogContent>
        <BlogContent>
            さっき作成したblogsテーブルがあるから確認できる。作成したカラムがしっかり入っていれば成功。
        </BlogContent>

        <SubTitle>Modelを作成する</SubTitle>
        <BlogContent> コンソール上で以下のコマンドを実行する </BlogContent>
        <BlogContent>
            <BlogCode>php artisan make:model Blog app\Models</BlogCode>
        </BlogContent>
        <BlogContent>
            コマンドに成功すると、<BlogCode>app\Models</BlogCode>フォルダの中に`BlogModel`が作成されている。
        </BlogContent>

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
