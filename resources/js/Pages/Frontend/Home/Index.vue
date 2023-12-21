<template>
    <BlogSection :posts="posts" />
</template>
<script setup>
import FrontLayout from "@/Pages/Frontend/Layout/FrontLayout.vue";
import BlogSection from "@/Pages/Frontend/Home/Partials/Blog.vue";
defineOptions({
    layout: FrontLayout,
});
defineProps({
    posts: Object,
});
</script>
