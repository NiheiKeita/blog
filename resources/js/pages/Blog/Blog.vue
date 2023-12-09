<script setup>
import BlogCode from "@/Components/blog/Code.vue";
import BlogConsole from "@/Components/blog/Console.vue";
import BlogContent from "@/Components/blog/Content.vue";
import BlogGoal from "@/Components/blog/Goal.vue";
import BlogHead from "@/Components/blog/Head.vue";
import SubTitle from "@/Components/blog/SubTitle.vue";
import BlogTags from "@/Components/blog/Tags.vue";
import BlogTitle from "@/Components/blog/Title.vue";
import BlogURL from "@/Components/blog/URL.vue";
import Layout from "@/Layouts/Layout.vue";
defineProps({
    hello: String,
    blog: Array,
    tags: String,
});
</script>

<template>
    <Layout>
        <BlogHead :blog="blog" :tags="tags" />
        <BlogTitle>{{ blog.content }}</BlogTitle>
        <BlogTags :tags="blog.tags" />
        <template v-for="(content, i) in blog.blog_blocks" :key="i">
            <BlogGoal v-if="content.block_id == 1">
                {{ content.content }}
            </BlogGoal>
            <BlogContent v-if="content.block_id == 2">
                <template
                    v-for="(component, j) in content.blog_components"
                    :key="j"
                >
                    <p class="inline-block" v-if="component.component_id == 1">
                        {{ component.content }}
                    </p>
                    <BlogCode
                        class="inline-block"
                        v-if="component.component_id == 2"
                    >
                        {{ component.content }}
                    </BlogCode>
                    <br v-if="component.component_id == 3" />
                </template>
            </BlogContent>
            <SubTitle v-if="content.block_id == 3">
                {{ content.content }}
            </SubTitle>
            <BlogConsole
                v-if="content.block_id == 4"
                class="whitespace-pre-wrap"
            >
                {{ content.content }}
            </BlogConsole>
            <BlogURL v-if="content.block_id == 5">
                {{ content.content }}
            </BlogURL>
        </template>
    </Layout>
</template>
