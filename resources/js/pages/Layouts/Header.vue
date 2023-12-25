<script setup>
import HambergerMenu from "@/Layouts/HambergerMenu.vue";
</script>

<template>
    <header
        class="sticky top-0 flex w-full justify-between border-b-[1px] bg-ThemaColor shadow-md rounded-sm"
    >
        <div class="flex justify-center">
            <img
                class="h-14 rounded-sm"
                src="/imgs/icon_web.jpg"
                alt="暇なエンジニア"
            />
        </div>
        <div class="flex items-center justify-center">
            <HambergerMenu />
        </div>
    </header>
</template>
