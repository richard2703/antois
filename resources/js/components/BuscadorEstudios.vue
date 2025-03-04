<template>
    <!-- <Navbar /> -->
    <div class="bg-teal-400 p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
        <h2 class="text-white text-xl font-semibold text-center mb-4">ESTUDIOS</h2>

        <!-- 🔍 Buscador -->
        <div class="relative mb-4">
            <input type="text" v-model="searchQuery" placeholder="Buscar"
                class="w-full p-3 rounded-full shadow-md pl-12" />
            <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">🔍</span>
        </div>

        <!-- 📜 Lista de Estudios -->
        <div class="bg-white p-4 rounded-lg shadow-md max-h-80 overflow-y-auto">
            <ul>
                <li v-for="(estudio, index) in filteredEstudiosPaginated" :key="index"
                    class="border-b py-2 text-teal-500 hover:text-teal-700 cursor-pointer"
                    @click="seleccionarEstudio(estudio)">
                    {{ estudio }}
                </li>
            </ul>
        </div>

        <!-- 📌 Paginación -->
        <div class="flex justify-center items-center mt-4 space-x-2">
            <button v-for="page in totalPages" :key="page" @click="currentPage = page" class="px-3 py-1 rounded-full"
                :class="page === currentPage ? 'bg-black text-white' : 'bg-white text-teal-500'">
                {{ page }}
            </button>
        </div>
    </div>

    <!-- <Footer /> -->
</template>

<script setup>
import { ref, computed, defineProps, defineEmits } from 'vue';
import { router } from '@inertiajs/vue3';


// Recibir lista de estudios como prop
const props = defineProps({
    estudios: Array
});

const emit = defineEmits(['seleccionarEstudio']);

const searchQuery = ref('');
const currentPage = ref(1);
const itemsPerPage = 10;

// 🔍 Filtra estudios basados en la búsqueda
const filteredEstudios = computed(() => {
    return props.estudios.filter(estudio =>
        estudio.toLowerCase().includes(searchQuery.value.toLowerCase())
    );
});

// 📌 Manejo de paginación
const totalPages = computed(() => Math.ceil(filteredEstudios.value.length / itemsPerPage));

const filteredEstudiosPaginated = computed(() => {
    const start = (currentPage.value - 1) * itemsPerPage;
    return filteredEstudios.value.slice(start, start + itemsPerPage);
});

// 🚀 Acción al seleccionar un estudio (emitir evento)// 🔗 Redirigir al detalle del estudio con Inertia
const seleccionarEstudio = (estudio) => {
    router.get(`/estudio/${encodeURIComponent(estudio)}`);
};
</script>
