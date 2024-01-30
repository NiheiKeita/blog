<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";

const props = defineProps({ comment: Object });
</script>

<template>
    <Layout>
        <div class="mb-20">
            <div class="flex justify-center mt-20">
                <div class="w-full lg:w-3/4 min-h-full p-8">
                    <div>コメント</div>
                    <div class="mt-5 ml-5">{{ comment.comment }}</div>
                    <div class="mt-5">email</div>
                    <div class="mt-5 ml-5">
                        {{ comment.email ?? "--空欄--" }}
                    </div>
                    <div class="mt-5">name</div>
                    <div class="mt-5 ml-5">
                        {{ comment.name ?? "--空欄--" }}
                    </div>
                    <div class="mt-5">ブログID</div>
                    <div class="mt-5 ml-5">
                        {{ comment.id }}
                    </div>
                    <div class="mt-5">
                        <a
                            :href="route('blog.show', comment.id)"
                            target="_blank"
                            class="text-blue-500 hover:underline"
                            >{{ route("blog.show", comment.id) }}</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
