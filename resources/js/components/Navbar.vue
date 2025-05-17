<template>
    <nav class="bg-[#00263D] text-white shadow-lg">
        <div class="container mx-auto px-4">
            <!-- Versión Desktop -->
            <div class="hidden lg:flex items-center justify-between h-20">
                <!-- Logo - Reducido de tamaño para dar más espacio -->
                <div class="flex-shrink-0">
                    <div class="text-xl font-bold tracking-wider flex items-center">
                        <img src="../../images/logos/logoN.svg" alt="Logo"
                            class="h-32 object-contain mr-1 text-blue-400" />
                    </div>
                </div>

                <!-- Menú de navegación - Espaciado ajustado -->
                <div class="flex items-center flex-grow mx-8">
                    <ul class="flex justify-between w-full text-base">
                        <!-- <li>
                            <a href="#" class="hover:text-blue-300 transition-colors duration-200 font-medium">Quiénes
                                somos</a>
                        </li> -->

                        <!-- Dropdown para "Estudios +" -->
                        <li class="relative group">
                            <!-- <button @click="estudiosOpen = !estudiosOpen"
                                class="flex items-center hover:text-blue-300 transition-colors duration-200 font-medium focus:outline-none">
                                Estudios +
                                <svg class="ml-1 w-4 h-4 transition-transform duration-200"
                                    :class="estudiosOpen ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button> -->

                            <!-- Contenido del dropdown -->
                            <ul v-if="estudiosOpen"
                                class="absolute left-0 bg-white text-gray-800 shadow-xl rounded-lg mt-2 w-64 z-20 py-2 border border-gray-100 opacity-100 transition-opacity duration-300">
                                <li v-for="estudio in estudios" :key="estudio"
                                    class="hover:bg-gray-50 border-l-4 border-transparent hover:border-blue-500 transition-all duration-200">
                                    <a @click="seleccionarEstudio(estudio)"
                                        class="block p-3 text-gray-700 hover:text-blue-700 cursor-pointer">
                                        {{ estudio }}
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li>
                            <a href="#" class="hover:text-blue-300 transition-colors duration-200 font-medium">Servicio
                                a empresas</a>
                        </li> -->
                        <li>
                            <a href="/QuienesSomos"
                                class="hover:text-blue-300 transition-colors duration-200 font-medium">
                                ¿Quiénes Somos?
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-blue-300 transition-colors duration-200 font-medium">Tomas a
                                Domicilio</a>
                        </li>
                        <li>
                            <a href="#"
                                class="hover:text-blue-300 transition-colors duration-200 font-medium grow-3">Sucursales</a>
                        </li>
                        <li>
                            <a href="#"
                                class="hover:text-blue-300 transition-colors duration-200 font-medium grow-3">Contacto</a>
                        </li>
                    </ul>
                </div>

                <!-- Botones de acción - Más compactos -->
                <div class="flex items-center space-x-2 flex-shrink-0 ">
                    <a href="https://calendar.google.com/calendar/appointments/schedules/AcZssZ2BH4_jcQyujIaN5JrPuUhCFkaPdOD8dCfmDgOVuqg0apH4pLIFnsENYdkLU2GeFbiFJitxxL6h?gv=true"
                        target="_blank"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-lg font-medium text-sm transition-colors duration-200 flex items-center whitespace-nowrap ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        AGENDA TU CITA
                    </a>
                    <!-- <a href="#"
                        class="bg-teal-600 hover:bg-teal-700 text-white px-3 py-2 rounded-lg font-medium text-sm transition-colors duration-200 flex items-center whitespace-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        CONSULTA<span class="hidden xl:inline ml-1">RESULTADOS</span>
                    </a> -->
                </div>
            </div>

            <!-- Versión Mobile - Sin cambios -->
            <div class="lg:hidden py-2">
                <div class="flex justify-between items-center">
                    <!-- Logo -->
                    <!--<div class="text-xl font-bold tracking-wider flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                        LABORATORIO
                    </div>-->

                    <div class="text-xl font-bold tracking-wider flex items-center">
                        <img src="../../images/logos/logoN.svg" alt="Logo"
                            class="h-32 object-contain mr-1 text-blue-400" />
                    </div>

                    <!-- Botón Menú -->
                    <button @click="menuOpen = !menuOpen" class="text-white p-2 focus:outline-none">
                        <svg v-if="!menuOpen" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Menú móvil expandible - Sin cambios -->
            <div v-if="menuOpen" class="lg:hidden fixed inset-0 bg-[#00263D] z-50 pt-4 overflow-y-auto">
                <div class="flex justify-between items-center px-4 pb-4 border-b border-blue-800">
                    <!--  <div class="text-xl font-bold flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                        LABORATORIO
                    </div>-->
                    <div class="text-xl font-bold tracking-wider flex items-center">
                        <img src="../../images/logos/logoN.svg" alt="Logo"
                            class="h-32 object-contain mr-1 text-blue-400" />
                    </div>
                    <button @click="menuOpen = false" class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <nav class="px-4 pt-6">
                    <ul class="space-y-6">
                        <li><a href="#" class="text-xl font-medium block hover:text-blue-300">Quiénes somos</a></li>

                        <!-- Dropdown mobile -->
                        <li>
                            <button @click="estudiosOpen = !estudiosOpen"
                                class="flex justify-between items-center w-full text-xl font-medium hover:text-blue-300">
                                Estudios +
                                <svg class="w-5 h-5 transition-transform" :class="estudiosOpen ? 'rotate-180' : ''"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div v-if="estudiosOpen" class="mt-4 ml-4 space-y-3 border-l-2 border-blue-500 pl-4">
                                <div v-for="estudio in estudios" :key="estudio" class="py-1">
                                    <a @click="seleccionarEstudio(estudio)"
                                        class="block text-lg text-gray-300 hover:text-blue-300 cursor-pointer">
                                        {{ estudio }}
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li><a href="#" class="text-xl font-medium block hover:text-blue-300">Servicio a empresas</a>
                        </li>
                        <li><a href="#" class="text-xl font-medium block hover:text-blue-300">Tomas a Domicilio</a></li>
                        <li><a href="#" class="text-xl font-medium block hover:text-blue-300">Sucursales</a></li>
                        <li><a href="#" class="text-xl font-medium block hover:text-blue-300">Contacto</a></li>
                    </ul>

                    <!-- Botones móvil -->
                    <div class="mt-8 space-y-4 pb-8">
                        <a href="https://calendar.app.google/439fBKvMzuVJrBuE8"
                            class="bg-blue-600 hover:bg-blue-700 text-white w-full py-3 rounded-lg font-medium text-lg flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            AGENDA TU CITA
                        </a>
                        <!-- <a href="#"
                            class="bg-teal-600 hover:bg-teal-700 text-white w-full py-3 rounded-lg font-medium text-lg flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            CONSULTA RESULTADOS
                        </a> -->
                    </div>
                </nav>
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
    // Cerrar menús después de seleccionar
    menuOpen.value = false;
    estudiosOpen.value = false;
};
</script>
