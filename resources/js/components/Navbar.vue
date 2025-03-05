<template>
    <nav class="bg-[#00263D] text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="text-2xl font-bold">ND</div>

            <!-- Menú hamburguesa (para móviles) -->
            <button @click="menuOpen = !menuOpen" class="lg:hidden text-white text-2xl">
                <span v-if="!menuOpen">☰</span>
                <span v-else>✕</span>
            </button>

            <!-- Menú de navegación -->
            <div :class="menuOpen ? 'block' : 'hidden'"
                class="absolute top-0 left-0 w-full h-screen bg-[#00263D] lg:relative lg:h-auto lg:w-auto lg:flex lg:items-center lg:space-x-6">
                <div class="flex justify-between items-center w-full p-4 lg:hidden">
                    <span class="text-2xl font-bold">ND</span>
                    <button @click="menuOpen = false" class="text-white text-2xl">✕</button>
                </div>

                <ul class="space-y-4 lg:space-y-0 lg:flex lg:space-x-6 text-lg p-4 lg:p-0">
                    <li><a href="#" class="hover:text-gray-300">Quiénes somos</a></li>

                    <!-- 🔹 Dropdown para "Estudios +" -->
                    <li class="relative">
                        <button @click="estudiosOpen = !estudiosOpen" class="hover:text-gray-300 flex items-center">
                            Estudios +
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Contenido del dropdown -->
                        <ul v-if="estudiosOpen"
                            class="absolute bg-white text-gray-800 shadow-lg rounded-lg mt-2 w-48 z-10">
                            <li v-for="estudio in estudios" :key="estudio"
                                class="p-2 hover:bg-gray-100 border-b border-gray-200 last:border-0">
                                <a @click="seleccionarEstudio(estudio)" class="block">{{ estudio }}</a>
                            </li>

                        </ul>
                    </li>
                    <!-- 🔹 Fin del dropdown -->

                    <li><a href="#" class="hover:text-gray-300">Servicio a empresas</a></li>
                    <li><a href="#" class="hover:text-gray-300">Tomas a Domicilio</a></li>
                    <li><a href="#" class="hover:text-gray-300">Sucursales</a></li>
                    <li><a href="#" class="hover:text-gray-300">Contacto</a></li>
                </ul>

                <!-- Botones -->
                <div class="p-4 lg:p-0 flex flex-col lg:flex-row lg:space-x-4">
                    <a href="https://calendar.app.google/439fBKvMzuVJrBuE8"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg text-center">AGENDA TU CITA</a>
                    <a href="#" class="bg-teal-500 text-white px-4 py-2 rounded-lg text-center mt-2 lg:mt-0">
                        CONSULTA RESULTADOS
                    </a>
                </div>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

// Controla la apertura del menú móvil
const menuOpen = ref(false);

// Controla la apertura del dropdown "Estudios +"
const estudiosOpen = ref(false);

// Lista de estudios
const estudios = ref([
    "Análisis Clínicos", "Biología Molecular", "Cardiología", "Densitometría",
    "Gabinete Dental", "Gastroenterología", "Mastografía", "Medicina Genómica",
    "Neurología", "Rayos X", "Resonancia Magnética", "Tomografía", "Ultrasonido"
]);

const seleccionarEstudio = (estudio) => {
    router.get(`/tipo-estudios/${encodeURIComponent(estudio)}`);
};

</script>
