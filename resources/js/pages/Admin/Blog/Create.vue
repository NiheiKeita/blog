<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
import ButtonDefaultThema from "@/Components/button/DefaultThema.vue";
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";
defineProps({ errors: Object });

const nameRef = ref("");

const form = useForm({
    name: null,
    remember: false,
});
const submit = () => {
    form.name = nameRef.value;

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
                    msg="作成する"
                    @click="submit"
                />
            </div>
        </div>
    </Layout>
</template>
