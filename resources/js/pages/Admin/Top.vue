<script setup>
import Layout from "@/Admin/Layouts/Layout.vue";
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
            <div class="flex items-center justify-center">
                <div class="w-1/3"></div>
            </div>
        </div>
    </Layout>
</template>
