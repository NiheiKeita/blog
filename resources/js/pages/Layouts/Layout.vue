<script setup>
import Header from "@/Layouts/Header.vue";
import RightSideMenu from "@/Layouts/RightSideMenu.vue";
</script>
<template>
    <div class="h-screen w-100 font-body break-all lg:text-[17px] text-[16px]">
        <Header class="z-50" />
        <main
            class="min-h-full w-full flex bg-gray-50 py-10 lg:leading-10 leading-7"
        >
            <div class="lg:w-1/6 min-h-full" />
            <div class="w-full lg:w-2/3 min-h-full flex">
                <div
                    class="w-full lg:w-3/4 min-h-full p-8 bg-white shadow-md rounded-md text-gray-700"
                >
                    <slot />
                </div>
                <div class="lg:w-1/4 w-0 min-h-full ml-3 lg:block hidden">
                    <RightSideMenu />
                </div>
            </div>
            <div class="lg:w-1/6 min-h-full" />
        </main>

        <slot name="footer"></slot>
    </div>
</template>
