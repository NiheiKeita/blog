
<div>
    laravelにInertia.jsをいれる(vue)
    composer require inertiajs/inertia-laravel

    /app.blade.php作成

    HandleInertiaRequestsミドルウェアを作成
    php artisan inertia:middleware

    app/Http/Kernel.phpを開き、ウェブミドルウェアの最後の項目としてHandleInertiaRequestsを登録

    vueライブラリをインストール
    npm install @inertiajs/vue3
    npm install vue@next
    npm i @vitejs/plugin-vue

    app.js で Inertia を適用する。

    Vite の設定を React に合わせる。 vite.config.js を変更して、React の設定を追加しましょう。

    npm run dev

    /にアクセスする


    tailwindcss
    npm install -D tailwindcss postcss autoprefixer
    npx tailwindcss init

    CSSエントリーポイントのresources/css/app.cssにデフォルトのtailwindCSSの各クラス設定を読み込むよう設定します。
    @tailwind base;
    @tailwind components;
    @tailwind utilities;

    app/jsxでimport "../css/app.css";を記載

    postcss.config.cjsファイルを作成

    npm install --save-dev postcss-import

    コントローラー側から変数受け渡し
    Cotroller
    return Inertia::render('Index', [
        'hello' => $hello,
    ]);
    Vue
    <script setup>
    defineProps({
        hello: String,
    });
    </script>



    参考
    https://tech.gaogao.asia/react-inertia-laravel/
    https://kinsta.com/jp/blog/laravel-inertia/
    https://blog.shipweb.jp/inertia-js-tutorial-2/
</div>
