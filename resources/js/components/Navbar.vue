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
                    <li><a :href="`/tu-ruta/${title}`" class="hover:text-gray-300">{{ title }}Estudios +</a></li>
                    <li><a href="#" class="hover:text-gray-300">Servicio a empresas</a></li>
                    <li><a href="#" class="hover:text-gray-300">Tomas a Domicilio</a></li>
                    <li><a href="#" class="hover:text-gray-300">Sucursales</a></li>
                    <li><a href="#" class="hover:text-gray-300">Contacto</a></li>
                </ul>

                <!-- Botones -->
                <div class="p-4 lg:p-0 flex flex-col lg:flex-row lg:space-x-4">
                    <a href="https://calendar.app.google/439fBKvMzuVJrBuE8"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg text-center">AGENDA TU CITA</a>
                    <a href="#" class="bg-teal-500 text-white px-4 py-2 rounded-lg text-center mt-2 lg:mt-0">CONSULTA
                        RESULTADOS</a>
                </div>

                <!-- Iconos de redes sociales -->
                <div class="flex justify-center space-x-4 p-4 lg:hidden">
                    <!-- <a href="#"><img src="/facebook.svg" alt="Facebook" class="w-8"></a>
                    <a href="#"><img src="/twitter.svg" alt="Twitter" class="w-8"></a>
                    <a href="#"><img src="/instagram.svg" alt="Instagram" class="w-8"></a> -->
                </div>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { ref } from 'vue';
// import { Head, Link, useForm, usePage } from "@inertiajs/vue3";

import { usePage } from '@inertiajs/vue3';
// import route from 'ziggy-js'; // Asegura que importas 'route'


console.log('console prueba' + usePage().props);
const menuOpen = ref(false);
const title = "minutero";



</script>
