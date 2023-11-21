<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
import { useForm } from "@inertiajs/vue3";
defineProps({ errors: Object });
const form = useForm({
    email: null,
    password: null,
    remember: false,
});
const submit = () => {
    form.email = emailRef.value;
    form.password = passwordRef.value;

    form.post(route("admin.blog.store"));
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
            <div class="flex items-center justify-center">
                <ButtonDefaultThema
                    class="my-2 mt-10"
                    msg="ログインする"
                    @click="submit"
                />
            </div>
        </div>
    </Layout>
</template>
