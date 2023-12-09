<script setup>
import Header from "@/Admin/Layouts/Header.vue";
</script>
<template>
    <div class="h-screen w-100 font-body break-all text-lg">
        <Header class="z-50" />
        <main class="min-h-full w-full flex bg-gray-50">
            <div class="lg:w-1/6 min-h-full" />
            <div class="w-full lg:w-2/3 min-h-full">
                <slot />
            </div>
            <div class="lg:w-1/6 min-h-full lg:block hidden" />
        </main>

        <footer class="">
            <h2></h2>
        </footer>
    </div>
</template>
