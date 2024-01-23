<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
import ButtonTransition from "@/Components/button/Transition.vue";
import { Link } from "@inertiajs/vue3";
defineProps({ errors: Object, blogs: Object });
const transition = () => {
    route("admin.blog.index");
};
</script>

<template>
    <Layout>
        <div class="">
            <div
                class="mt-10 flex items-center justify-center text-3xl font-bold"
            >
                <p>ブログリスト</p>
            </div>
            <div class="mt-3 flex items-center justify-end">
                <ButtonTransition
                    class="my-2 mt-10"
                    msg="新規作成"
                    :route="route('admin.blog.create')"
                    @click="transition()"
                />
            </div>
            <ul class="mt-10">
                <li
                    v-for="(blog, i) in blogs"
                    :key="i"
                    class="rounded shadow-md border-b p-2 m-2 bg-white"
                >
                    <Link
                        :href="route('admin.blog.show', blog.id)"
                        class="flex justify-between"
                    >
                        <div class="flex justify-between w-full">
                            <p
                                class="text-blue-500 hover:underline lg:w-11/12 w-4/5"
                            >
                                {{ blog.content }}
                            </p>
                            <div
                                class="lg:w-1/5 mx-1 lg:mx-3 flex justify-center"
                            >
                                <p
                                    class="text-white bg-red-500 text-xs lg:text-sm h-fit rounded-full p-1"
                                    v-show="blog.is_private"
                                >
                                    private
                                </p>
                                <p
                                    class="text-white bg-green-500 text-xs lg:text-sm h-fit rounded-full p-1"
                                    v-show="!blog.is_private"
                                >
                                    public
                                </p>
                            </div>
                        </div>
                        <ButtonTransition
                            msg="編集"
                            :route="route('admin.blog.edit', blog.id)"
                            @click="transition()"
                        />
                    </Link>
                </li>
            </ul>
        </div>
    </Layout>
</template>
