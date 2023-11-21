<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
import { Link } from "@inertiajs/vue3";
defineProps({ errors: Object });
</script>

<template>
    <Layout>
        <div class="">
            <div
                class="mt-10 flex items-center justify-center text-3xl font-bold"
            >
                <p>ブログリスト</p>
            </div>
            <div class="flex items-center justify-center">
                <div>
                    <Link :href="route('admin.blog.create')">新規作成</Link>
                </div>
                <div>
                    <Link :href="route('admin.blog.edit', 2)">更新</Link>
                </div>
            </div>
        </div>
    </Layout>
</template>
