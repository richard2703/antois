<template>
    <Navbar />

    <div class="bg-gradient-to-b from-teal-500 to-teal-700 min-h-screen p-10">
        <h1 class="text-white text-4xl font-bold text-center mb-6">ESTUDIOS</h1>

        <!-- 🔍 Usa el componente de buscador -->
        <BuscadorEstudios :estudios="estudios" @seleccionarEstudio="seleccionarEstudio" />
    </div>

    <Footer />
</template>

<script setup>
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
import BuscadorEstudios from '@/components/BuscadorEstudios.vue';
import { ref } from 'vue';

const estudios = ref([
    "ALDOSTERONA", "ALDOSTERONA EN ORINA DE 24 h", "ALFA 1 ANTITRIPSINA",
    "ALFA-TOCOFEROL", "ALFAFETOPROTEINA", "ALUMINIO EN SANGRE",
    "AMBAS RODILLA AXIAL 30 GRADOS", "AMBAS RODILLA AXIAL 60 GRADOS",
    "AMBAS RODILLAS AXIAL 90 GRADOS", "AMIBA EN FRESCO", "AMILASA",
    "AMILASA EN ORINA", "AMONIO", "AMPHETAMINA / METHAMPHETAMINA",
    "ANDROSTENDIONA (ANDROSTENEDIONA)", "ANGIO RESONANCIA DE CRANEO",
    "ANGIO TAC"
]);

// 🚀 Acción al seleccionar un estudio
const seleccionarEstudio = (estudio) => {
    alert(`Seleccionaste: ${estudio}`);
};
</script>
