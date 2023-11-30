<template>
    <header
        class="sticky top-0 flex w-full justify-between border-b-[1px] bg-slate-500 shadow-md rounded-sm"
    >
        <div class="flex justify-center">
            <img
                class="h-14 rounded-sm"
                src="/imgs/icon_web.jpg"
                alt="暇なエンジニア"
            />
            <p
                class="flex items-center justify-center text-2xl font-bold text-black"
            >
                管理画面
            </p>
        </div>
        <div class="flex items-center justify-center">
            <!-- <img class="m-2 h-10" src="/images/icon_web.png" /> -->
            <HambergerMenu />
        </div>
    </header>
</template>
