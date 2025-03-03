<template>
    <div class="relative w-full overflow-hidden">
        <!-- Contenedor de las imágenes con animación -->
        <div class="flex transition-transform duration-700 ease-in-out"
            :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
            <img src="../../images/banners/banner1.png" class="w-full object-cover flex-shrink-0" />
            <img src="../../images/banners/banner3.png" class="w-full object-cover flex-shrink-0" />
            <img src="../../images/banners/banner42.png" class="w-full object-cover flex-shrink-0" />
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

// Índice del slide actual
const currentIndex = ref(0);
const totalSlides = 3; // Ajusta según el número de imágenes
let interval = null;

// Función para avanzar al siguiente slide
const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % totalSlides;
};

// Función para regresar al slide anterior
const prevSlide = () => {
    currentIndex.value = (currentIndex.value - 1 + totalSlides) % totalSlides;
};

// Función para iniciar el carrusel automático
const startAutoSlide = () => {
    interval = setInterval(() => {
        nextSlide();
    }, 3000); // Cambia de imagen cada 3 segundos
};

// Función para detener el carrusel cuando se desmonta
const stopAutoSlide = () => {
    if (interval) clearInterval(interval);
};

// Iniciar el carrusel cuando el componente se monta
onMounted(() => {
    startAutoSlide();
});

// Detener el carrusel cuando el componente se desmonta
onUnmounted(() => {
    stopAutoSlide();
});
</script>
