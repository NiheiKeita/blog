<script setup>
import BlogTags from "@/Components/blog/MenuTags.vue";
import axios from "axios";
import { ref } from "vue";
const openRef = ref(false);

const tagsRef = ref();
const blogsRef = ref();
axios
    .get("/api/tags/")
    .then((response) => {
        tagsRef.value = response.data;
    })
    .catch((error) => {
        // console.log(error);
    })
    .finally(() => {});
axios
    .get("/api/blogs/")
    .then((response) => {
        blogsRef.value = response.data;
    })
    .catch((error) => {
        // console.log(error);
    })
    .finally(() => {});
</script>

<template>
    <div class="lg:hidden">
        <button v-on:click="openRef = !openRef" class="mt-3 mr-3">
            <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 24 24">
                <path
                    d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"
                />
            </svg>
        </button>
        <Transition name="right">
            <div
                v-if="openRef"
                class="text-black bg-white z-60 fixed right-0 top-0 bottom-0 w-2/3 text-right overflow-scroll border border-gray-200"
            >
                <button
                    v-on:click="openRef = !openRef"
                    class="sticky top-0 right-0 pt-5 pr-3"
                >
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"
                        />
                    </svg>
                </button>
                <div class="mt-3 mx-5">
                    <div class="flex mb-2">
                        <div
                            class="bg-ThemaColor top-0 bottom-0 w-[3px] mr-3"
                        ></div>

                        <h2 class="text-xl font-bold" v-if="blogsRef">
                            おすすめ記事
                        </h2>
                    </div>
                    <div class="bg-gray-200 h-[1px] w-full mt-1"></div>
                    <div v-for="(blog, i) in blogsRef" :key="i">
                        <div class="flex justify-start my-2">
                            <a
                                :href="route('blog.show', blog.id)"
                                class="text-blue-500 hover:underline text-left"
                                >{{ blog.content }}</a
                            >
                        </div>
                        <div class="bg-gray-200 h-[1px] w-full mt-1"></div>
                    </div>
                    <div class="flex mb-2 mt-10">
                        <div
                            class="bg-ThemaColor top-0 bottom-0 w-[3px] mr-3"
                        ></div>

                        <h2 class="text-xl font-bold" v-if="tagsRef">
                            おすすめタグ
                        </h2>
                    </div>
                    <div class="bg-gray-200 h-[1px] w-full mt-1"></div>
                    <BlogTags :tags="tagsRef" />
                    <!-- <div v-for="(tag, i) in tagsRef" :key="i">
                        <div class="flex justify-start my-2">
                            <a
                                :href="route('tag.show', tag.id)"
                                class="text-blue-500 hover:underline text-left"
                                >{{ tag.name }}</a
                            >
                        </div>
                        <div class="bg-gray-200 h-[1px] w-full mt-1"></div>
                    </div> -->
                </div>
            </div>
        </Transition>
    </div>
</template>
<style>
.right-enter-active,
.right-leave-active {
    transform: translate(0px, 0px);
    transition: transform 225ms cubic-bezier(0, 0, 0.2, 1) 0ms;
}

.right-enter-from,
.right-leave-to {
    transform: translateX(100vw) translateX(0px);
}
</style>
