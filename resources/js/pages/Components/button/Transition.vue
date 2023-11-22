<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

defineProps({
    msg: {
        type: String,
        default: "button",
    },
    route: {
        type: String,
        default: "",
    },
});
</script>

<template>
    <Link :href="route">
        <div
            class="min-w-[200px] rounded-lg border border-ThemaColorComplementary bg-ThemaColor hover:bg-ThemaColorHover shadow-md"
        >
            <p class="mx-10 my-2 flex justify-center text-lg text-white">
                {{ msg }}
            </p>
        </div>
    </Link>
</template>
