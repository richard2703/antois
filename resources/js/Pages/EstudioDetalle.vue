<template>
    <Navbar />
    <div class="bg-gradient-to-b from-teal-500 to-teal-700 min-h-screen p-10">
        <div class="max-w-5xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-teal-500 text-3xl font-bold text-center">Análisis Clínicos</h1>

            <div class="grid md:grid-cols-2 gap-6 mt-6">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-700">{{ nombre }}</h2>
                    <p class="text-gray-600 mt-2">
                        {{ descripcion }}
                    </p>

                    <div class="mt-4 text-lg font-semibold text-gray-700">
                        Costo del estudio:
                    </div>
                    <div class="bg-teal-400 text-white text-2xl font-bold py-2 px-4 inline-block rounded-full">
                        {{ costo }} MXN
                    </div>
                </div>

                <div class="flex justify-center">
                    <img src="../../images/banners/banner42.png" alt="Microscopio" class="w-64" />
                </div>
            </div>

            <div class="bg-black text-white p-4 rounded-lg mt-6 flex items-center">
                <div class="text-2xl">🩺</div>
                <div class="ml-4">
                    <h3 class="font-semibold text-lg">Preparación</h3>
                    <p>{{ preparacion }}</p>
                </div>
            </div>
        </div>
    </div>

    <Footer />
</template>

<script setup>
import { defineProps } from 'vue';
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';

// 🎯 Datos recibidos desde Laravel Inertia
const props = defineProps({
    nombre: String
});

// Datos simulados
const descripcion = "Este examen ayuda a diagnosticar enfermedades renales.";
const costo = "1,275.00";
const preparacion = "Ayuno de 4 horas";
</script>
