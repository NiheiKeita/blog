
<div>
    laravelにInertia.jsをいれる(vue)
    composer require inertiajs/inertia-laravel

    ReservationSite\resources\views 配下に
    /app.blade.php作成

    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <!-- Scripts -->
            @vite('resources/js/app.js') @inertiaHead
        </head>

        <body class="font-sans antialiased">
            @inertia
        </body>
    </html>


    HandleInertiaRequestsミドルウェアを作成
    php artisan inertia:middleware

    app/Http/Kernel.phpを開き、ウェブミドルウェアの最後の項目としてHandleInertiaRequestsを登録する
    protected $middlewareGroupsのWEBに 以下を追加する
    \App\Http\Middleware\HandleInertiaRequests::class,

    vueライブラリをインストール
    npm install @inertiajs/vue3
    npm install vue@next
    npm i @vitejs/plugin-vue

    app.js で Inertia を適用する。

    import "./bootstrap";

    import { createInertiaApp } from "@inertiajs/vue3";
    import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
    import { createApp, h } from "vue";

    createInertiaApp({
        resolve: (name) =>
            resolvePageComponent(
                `./Pages/${name}.vue`,
                import.meta.glob("./Pages/**/*.vue")
            ),
        setup({ el, App, props }) {
            return createApp({ render: () => h(App, props) })
                .use(VueInputAutowidth)
                .mixin({ methods: { route } })
                .mount(el);
        },
    });


    Vite の設定を React に合わせる。 vite.config.js を変更して、React の設定を追加しましょう。

    import vue from "@vitejs/plugin-vue";
    import laravel from "laravel-vite-plugin";
    import { defineConfig } from "vite";

    export default defineConfig({
        plugins: [
            laravel({
                input: ["resources/js/app.js"],
                refresh: true,
            }),
            vue({
                template: {
                    transformAssetUrls: {
                        base: null,
                        includeAbsolute: false,
                    },
                },
            }),
        ],
        resolve: {
            alias: {
                "@": "/resources/js/pages",
            },
        },
    });

    js/page フォルダ作成
    js/page/Index.vueを作成
    <script setup>
    defineProps({
        hello: String,
    });
    </script>


    コントローラー側から変数受け渡し
    Cotroller

    use Inertia\Inertia;

    return Inertia::render('Index', [
        'hello' => $hello,
    ]);

    npm run dev

    上のコマンドをたたいてエラーが起きないことを確認する




    tailwindcss
    npm install -D tailwindcss postcss autoprefixer
    npx tailwindcss init

    CSSエントリーポイントのresources/css/app.cssにデフォルトのtailwindCSSの各クラス設定を読み込むよう設定します。
    @tailwind base;
    @tailwind components;
    @tailwind utilities;

    app/jsでimport "../css/app.css";を記載

    postcss.config.cjsファイルを作成

    npm install --save-dev postcss-import



    参考
    https://tech.gaogao.asia/react-inertia-laravel/
    https://kinsta.com/jp/blog/laravel-inertia/
    https://blog.shipweb.jp/inertia-js-tutorial-2/
</div>
