多言語化


{{-- npm install vue-i18n@next --}}
npm install vue-i18n@9

message.jsを作成(js/lang配下)
export default {
    ja: {
        hello: 'こーんにーちわーーーー！うるせぇよ'
    },
    en: {
        hello: 'Hello!'
    }
}

{{ $t('hello') }} という感じで使える

app.js

import messages from "./lang/messages.js";
import { createI18n } from "vue-i18n";

const i18n = createI18n({
    locale: __locale,
    messages,
});

.use(i18n)

app.bladeに下をついか(@viteのした)
<script>
    var __locale = '{{ app()->getLocale() }}'
</script>

言語切り替え
i18n.global.locale = 'en';


ボタンを押したときに言語切り替え
<a v-bind:href="route('lang.change', 'en')">
    <div class="">英語</div>
</a>
こんな感じでルートを作ってあげて、routeで

Route::get('/greeting/{locale}', function($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang.change');

のようにしてあげると、日本語から英語にきり変わる



参考　https://jitaku.work/it/category/web-development/vue3-laravel/multilanguage/
