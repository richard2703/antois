<template>
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <div class="text-4xl mb-4">{{ icon }}</div>
        <h3 class="text-xl font-semibold text-gray-900">{{ title }}</h3>
    </div>
</template>

<script setup>
defineProps(['title', 'icon']);
</script>
