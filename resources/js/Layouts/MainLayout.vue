<template>
    <header>
        header
    </header>

    <main>
        <slot>Default</slot>
    </main>
</template>

<script setup>
import { computed } from "vue";
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage();
console.log(page.props);
</script>

