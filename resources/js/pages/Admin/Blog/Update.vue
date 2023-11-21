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

    form.post(route("admin.login.check"));
};
</script>

<template>
    <Layout>
        <div class="">
            <div
                class="mt-10 flex items-center justify-center text-3xl font-bold"
            >
                <p>ブログ更新</p>
            </div>
            <div class="flex items-center justify-center"></div>
        </div>
    </Layout>
</template>
