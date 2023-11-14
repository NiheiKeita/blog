<script setup>
import Header from "../Layouts/Header.vue";
import RightSideMenu from "../Layouts/RightSideMenu.vue";
</script>
<template>
    <div class="h-screen w-100 font-body break-words">
        <Header class="z-50" />
        <main class="h-full w-full flex bg-gray-50">
            <div class="lg:w-1/6 h-full" />
            <div class="w-full lg:w-2/3 h-full flex">
                <div
                    class="w-full lg:w-3/4 h-full p-8 bg-white shadow-md rounded-md text-gray-700"
                >
                    <slot />
                </div>
                <div class="lg:w-1/4 w-0 h-full ml-3">
                    <RightSideMenu />
                </div>
            </div>
            <div class="lg:w-1/6 h-full" />
        </main>

        <footer class="">
            <h2>フッター</h2>
        </footer>
    </div>
</template>
