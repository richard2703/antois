<template>
    <Navbar />
    <!-- <slot /> -->

    <!-- 🔹 Carrusel de Banners -->
    <section class="bg-white py-10">
        <div class="container mx-auto">
            <Carousel />
        </div>
    </section>

    <!-- 🔹 Sección de Servicios -->
    <section class="bg-[#f0fdfa] py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Nuestros Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <ServiceCard title="Análisis Clínicos" icon="🩺" />
                <ServiceCard title="Rayos X" icon="🦴" />
                <ServiceCard title="Resonancia Magnética" icon="🧠" />
                <ServiceCard title="Ultrasonido" icon="🔍" />
                <ServiceCard title="Cardiología" icon="❤️" />
                <ServiceCard title="Medicina Genómica" icon="🧬" />
            </div>
            <div class="mt-8">
                <a href="#" class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600">Consulta
                    Resultados</a>
            </div>
        </div>
    </section>

    <!-- 🔹 Sección de Ubicaciones -->
    <section class="bg-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Ubicaciones</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <LocationCard city="Guadalajara" address="Av. Chapultepec #123" phone="(33) 1234-5678" />
                <LocationCard city="Zapopan" address="Plaza Andares #456" phone="(33) 8765-4321" />
                <LocationCard city="Tlaquepaque" address="Calle Juárez #789" phone="(33) 5678-1234" />
            </div>
        </div>
    </section>

    <Footer />
</template>

<script setup>
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
import Carousel from '@/components/Carousel.vue';
import ServiceCard from '@/components/ServiceCard.vue';
import LocationCard from '@/components/LocationCard.vue';

</script>
