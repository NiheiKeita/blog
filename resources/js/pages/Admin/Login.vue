<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
import ButtonDefaultThema from "@/Components/button/DefaultThema.vue";
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
                        msg="ログインする"
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
