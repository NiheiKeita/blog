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
            class="lg:min-w-[200px] min-w-[60px] rounded-lg border border-ThemaColorComplementary bg-ThemaColor hover:bg-ThemaColorHover shadow-md"
        >
            <p class="lg:mx-10 mx-2 my-2 flex justify-center text-white">
                {{ msg }}
            </p>
        </div>
    </Link>
</template>
