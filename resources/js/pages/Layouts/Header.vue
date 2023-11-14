<template>
    <header
        class="sticky top-0 flex w-full justify-between border-b-[1px] bg-ThemaColor shadow-md rounded-md"
    >
        <div class="flex justify-center">
            <img class="m-2 h-14" src="/images/icon_web.png" />
            <p
                class="flex items-center justify-center text-2xl font-bold text-black"
            >
                ブログ
            </p>
        </div>
        <div class="flex items-center justify-center">
            <!-- <img class="m-2 h-10" src="/images/icon_web.png" /> -->
            <HambergerMenu />
        </div>
    </header>
</template>
