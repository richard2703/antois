<template>
    <div class="bg-gray-100 p-6 rounded-lg shadow-md text-center">
        <h3 class="text-xl font-semibold text-gray-900">{{ city }}</h3>
        <p class="text-gray-600">{{ address }}</p>
        <p class="text-gray-600">{{ phone }}</p>
    </div>
</template>

<script setup>
defineProps(['city', 'address', 'phone']);
</script>
