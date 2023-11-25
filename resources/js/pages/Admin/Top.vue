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
                <p>Top</p>
            </div>
            <div class="flex items-center justify-center mt-16">
                <div class="w-1/3">
                    <div>
                        <Link :href="route('admin.blog.index')">
                            ブログ一覧
                        </Link>
                    </div>
                    <div class="mt-5">
                        <Link :href="route('admin.blog.index')">タグ一覧</Link>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
