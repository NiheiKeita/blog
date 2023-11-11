
<div>
    laravel DB作成

    目標
    DBを作ってblogsというテーブルを作成する
    作成するカラムはid,create_at,update_at,delete_at,title,content,tags
    delete_atはソフトデリートを実装するために作成する

    ・migrationファイル作成
    ターミナルで以下のコマンドを打つ
    php artisan make:migration create_blogs_table

    以下のメッセージが出てきて、blogsのマイグレーションファイルができた

    INFO  Migration [C:\xampp\htdocs\blog\blog\database\migrations/2023_11_11_133513_create_blogs_table.php] created successfully.

    database\migrations フォルダの中 に 2023_11_11_133513_create_blogs_table.php というファイルができている



    テーブルを実際に作成
    以下のコマンドを実行すると、テーブルが作成される
    php artisan migrate


    Modelを作成
    以下のコマンドを実行すると、Blogモデルが作成される
    php artisan make:model Blog
    app\Models　フォルダに BlogModelが作成されている


    Factory作成
    php artisan make:factory BlogFactory

    Seederを実行
    php artisan db:seed

    adminer.phpを設置する
    public配下にadminer.phpをダウンロードしてきて設置します。
    ダウンロードページは以下
    https://www.adminer.org/

    xamppでは初期設定ではrootのパスワードが設定されていないため、設定する
    下のパスに行き、
    xampp\mysql\bin\
    下のコマンドを実行する
    mysqladmin -u root password
    すると以下のように質問されるため、設定したいパスワードを２回入力する
    New password: ****
    Confirm new password: ****

    .envにも設定したパスワードを入力する

    \adminer.php
    にアクセスし、.envに書いてある情報を入力するとログインできる

    <br />
</div>
