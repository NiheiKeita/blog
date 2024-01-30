<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
import { Link } from "@inertiajs/vue3";
defineProps({ errors: Object, comments: Object });
const transition = () => {
    route("admin.comment.index");
};
</script>

<template>
    <Layout>
        <div class="">
            <div
                class="mt-10 flex items-center justify-center text-3xl font-bold"
            >
                <p>コメントリスト</p>
            </div>
            <ul class="mt-10">
                <li
                    v-for="(comment, i) in comments"
                    :key="i"
                    class="rounded shadow-md border-b p-2 m-2 bg-white"
                >
                    <Link
                        :href="route('admin.comment.show', comment.id)"
                        class="flex justify-between"
                    >
                        <div class="flex justify-between w-full">
                            <p
                                class="text-blue-500 hover:underline lg:w-11/12 w-4/5"
                            >
                                {{ comment.comment }}
                            </p>
                        </div>
                    </Link>
                </li>
            </ul>
        </div>
    </Layout>
</template>
