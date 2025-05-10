<template>
    <div class="relative w-full overflow-hidden">
        <!-- Contenedor de las imágenes con animación -->
        <div class="flex transition-transform duration-700 ease-in-out"
            :style="{ transform: `translateX(-${currentIndex * 100}%)` }">

            <a href="https://wa.me/5213334018555" target="_blank" class="w-full flex-shrink-0 block">
                <img src="../../images/banners/1.png" class="w-full object-cover" />
            </a>

            <a href="https://wa.me/5213334018555" target="_blank" class="w-full flex-shrink-0 block">
                <img src="../../images/banners/2.png" class="w-full object-cover" />
            </a>

            <a href="https://wa.me/5213334018555" target="_blank" class="w-full flex-shrink-0 block">
                <img src="../../images/banners/3.png" class="w-full object-cover" />
            </a>

        </div>

        <!-- Botón Anterior -->
        <button @click="prevSlide"
            class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 text-white p-2 rounded-full">
            ◀
        </button>

        <!-- Botón Siguiente -->
        <button @click="nextSlide"
            class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 text-white p-2 rounded-full">
            ▶
        </button>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const currentIndex = ref(0);
const totalSlides = 3;
let interval = null;

const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % totalSlides;
};

const prevSlide = () => {
    currentIndex.value = (currentIndex.value - 1 + totalSlides) % totalSlides;
};

const startAutoSlide = () => {
    interval = setInterval(() => {
        nextSlide();
    }, 5000);
};

const stopAutoSlide = () => {
    if (interval) clearInterval(interval);
};

onMounted(() => {
    startAutoSlide();
});

onUnmounted(() => {
    stopAutoSlide();
});
</script>
