<template>
    <div class="relative w-full overflow-hidden">
        <img :src="images[currentIndex]" class="w-full  object-cover transition-opacity duration-500" />

        <button @click="prevSlide"
            class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 text-white p-2">◀</button>
        <button @click="nextSlide"
            class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 text-white p-2">▶</button>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const images = ref([
    '../../images/banners/banner1.png',
    '../../images/banners/banner3.png',
    '../../images/banners/banner4.png',
    '../../images/banners/banner42.png',

]);

const currentIndex = ref(0);

const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % images.value.length;
};

const prevSlide = () => {
    currentIndex.value = (currentIndex.value - 1 + images.value.length) % images.value.length;
};
</script>
