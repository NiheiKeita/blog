<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
import ButtonDefaultThema from "@/Components/button/DefaultThema.vue";
import InputDefaultThema from "@/Components/input/DefaultThema.vue";
import { router } from "@inertiajs/vue3";
import { reactive, ref } from "vue";
defineProps({ errors: Object });

const emailRef = ref("");
const passwordRef = ref("");
const form = reactive({
    email: null,
    password: null,
    remember: false,
});
const submit = () => {
    // form.email = emailRef.value;
    // form.password = passwordRef.value;
    // router.post(route("admin.login.check"), form);
    // console.log(route("admin.login.check"));
    router.post("/admin/login", form);
    // console.log(form);
    // console.log(errors);
    // form.post(route("admin.login.check"));
    // console.log(errors);
};
</script>

<template>
    <Layout>
        <div class="">
            <div
                class="mt-10 flex items-center justify-center text-3xl font-bold"
            >
                <p>新規登録</p>
            </div>
            <div class="flex items-center justify-center">
                <div class="w-1/3">
                    <div>メールアドレス</div>
                    <div class="mt-5 flex items-center justify-center">
                        <InputDefaultThema v-model="emailRef" name="email" />
                    </div>
                    <div>パスワード</div>
                    <div class="mt-5 flex items-center justify-center">
                        <InputDefaultThema
                            v-model="passwordRef"
                            type="password"
                            name="password"
                        />
                    </div>
                    <ButtonDefaultThema
                        class="my-2 mt-10"
                        msg="登録する"
                        @click="submit"
                    />
                    <div>
                        {{ errors }}
                    </div>
                    <div>
                        {{ form }}
                    </div>
                    <!-- <form
                        @submit.prevent="form.post(route('admin.login.check'))"
                    >
                        <button type="submit" :disabled="form.processing">
                            Login
                        </button>
                        <div v-if="form">
                            {{ form }}
                        </div>
                        <div>
                            {{ errors }}
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </Layout>
</template>
