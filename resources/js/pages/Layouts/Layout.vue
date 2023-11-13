<script setup>
import Header from "../Layouts/Header.vue";
</script>
<template>
    <div class="h-screen w-100 font-body">
        <!-- <header class="font-body">
        </header> -->
        <Header class="z-50" />
        <!-- <div class="fixed inset-0 -z-10 bg-gray-50 lg:mx-[20%]"></div> -->

        <main class="h-full w-full flex">
            <div class="lg:w-1/5 bg-red-700 h-full"></div>
            <div class="w-full lg:w-3/5 bg-gray-50 h-full">
                <slot />
            </div>
            <div class="lg:w-1/5 bg-blue-700 h-full"></div>
        </main>

        <footer class="">
            <h2>フッター</h2>

            <input type="email" />
        </footer>
    </div>
</template>
