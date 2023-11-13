<script setup>
import Layout from "../Layouts/Layout.vue";
defineProps({
    hello: String,
    blog: Array,
});
</script>

<template>
    <Layout>
        <div class="font-body">
            <div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </Layout>
</template>
