<script setup>
const props = defineProps({
    url: {
        type: String,
        required: true,
    },
    title: {
        type: String,
        default: "link",
    },
});
</script>

<template>
    <a class="text-red-600 decoration-solid decoration-gray-200 hover:underline" :href="url"
       :title="title">
        <slot></slot>
    </a>
</template>
