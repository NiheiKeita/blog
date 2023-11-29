<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
import ButtonDefaultThema from "@/Components/button/DefaultThema.vue";
import ErrorDefaultThema from "@/Components/error/DefaultThema.vue";
import InputDefaultThema from "@/Components/input/DefaultThema.vue";
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";
defineProps({ errors: Object });

const emailRef = ref("");
const passwordRef = ref("");
const form = useForm({
    email: null,
    password: null,
    remember: false,
});
const submit = () => {
    form.email = emailRef.value;
    form.password = passwordRef.value;

    form.post(route("admin.login.check"));
};
</script>

<template>
    <Layout>
        <div class="">
            <div
                class="mt-10 flex items-center justify-center text-3xl font-bold"
            >
                <p>ログイン</p>
            </div>
            <div class="flex items-center justify-center">
                <div class="lg:w-1/3 w-full mx-5">
                    <div class="mt-5">メールアドレス</div>
                    <div class="mt-2 flex items-center justify-center">
                        <InputDefaultThema
                            v-model="emailRef"
                            name="email"
                            :error="errors.email"
                        />
                    </div>
                    <div class="mt-5">パスワード</div>
                    <div class="mt-2 flex items-center justify-center">
                        <InputDefaultThema
                            v-model="passwordRef"
                            type="password"
                            name="password"
                            :error="errors.password"
                        />
                    </div>
                    <ButtonDefaultThema
                        class="my-2 mt-10"
                        msg="ログインする"
                        :isLoading="form.processing"
                        @click="submit"
                    />
                    <ErrorDefaultThema
                        class="mt-3"
                        v-show="errors.login"
                        :error="errors.login"
                    ></ErrorDefaultThema>
                </div>
            </div>
        </div>
    </Layout>
</template>
