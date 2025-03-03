<template>
    <div class="relative w-full h-64 overflow-hidden rounded-lg shadow-md">
        <div class="flex transition-transform duration-500"
            :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
            <img v-for="(image, index) in images" :key="index" :src="image" class="w-full h-64 object-cover">
        </div>

        <!-- Controles -->
        <button @click="prev"
            class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-1 rounded-full">‹</button>
        <button @click="next"
            class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-1 rounded-full">›</button>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const images = ref([
    '/banner1.jpg',
    '/banner2.jpg',
    '/banner3.jpg'
]);

const currentIndex = ref(0);

const prev = () => {
    currentIndex.value = (currentIndex.value === 0) ? images.value.length - 1 : currentIndex.value - 1;
};

const next = () => {
    currentIndex.value = (currentIndex.value + 1) % images.value.length;
};
</script>
