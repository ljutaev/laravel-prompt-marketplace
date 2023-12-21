<template>
    <HeaderSection />
    <main>
        <slot>Default</slot>
    </main>
    <FooterSection />
</template>

<script setup>
import HeaderSection from "@/Pages/Frontend/Partials/Header.vue";
import FooterSection from "@/Pages/Frontend/Partials/Footer.vue";
</script>
