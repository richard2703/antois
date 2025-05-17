<template>
    <Navbar />
    <!-- <slot /> -->

    <!-- 🔹 Carrusel de Banners -->
    <section class="bg-white py-10">
        <div class="container mx-auto">
            <Carousel />
        </div>
    </section>

    <section id="antois" class="bg-gray-100 py-16">
        <div class="container mx-auto px-4 text-center max-w-3xl">
            <h2 class="text-4xl font-extrabold text-blue-900 mb-6">Tu salud, nuestra prioridad</h2>
            <div class="mb-6">
                <p class="text-lg text-gray-700 leading-relaxed">
                    En nuestro laboratorio clínico, entendemos que cada análisis es una oportunidad para cuidar de ti y
                    de los tuyos.
                    Ofrecemos una amplia gama de estudios de laboratorio, realizados con equipos de última generación y
                    por
                    profesionales altamente capacitados.
                </p>
            </div>
            <div>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Con sucursales estratégicamente ubicadas y opciones de servicio a domicilio, facilitamos el acceso a
                    diagnósticos
                    precisos y oportunos. Agenda tu cita en línea y descubre cómo podemos ayudarte a mantener tu
                    bienestar.
                </p>
            </div>
        </div>
    </section>

    <!-- 🔹 Sección de Promociones -->
    <section class="bg-gray-100 py-16" id="promociones">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Promociones</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4">
                <a href="https://wa.me/5213334018555?text=Hola,%20estoy%20interesado%20en%20la%20promoción%20del%20paquete%20Completo"
                    target="_blank">
                    <img src="../../images/paquetes/1.png" alt="Promoción 1"
                        class="rounded shadow-md object-cover h-full" />
                </a>
                <a href="https://wa.me/5213334018555?text=Hola,%20estoy%20interesado%20en%20la%20promoción%20del%20paquete%20Diabetico"
                    target="_blank">
                    <img src="../../images/paquetes/2.png" alt="Promoción 2"
                        class="rounded shadow-md object-cover h-full" />
                </a>
                <a href="https://wa.me/5213334018555?text=Hola,%20estoy%20interesado%20en%20la%20promoción%20del%20paquete%20Integral"
                    target="_blank">
                    <img src="../../images/paquetes/3.png" alt="Promoción 3"
                        class="rounded shadow-md object-cover h-full" />
                </a>
                <a href="https://wa.me/5213334018555?text=Hola,%20estoy%20interesado%20en%20la%20promoción%20del%20paquete%20femenino"
                    target="_blank">
                    <img src="../../images/paquetes/4.png" alt="Promoción 4"
                        class="rounded shadow-md object-cover h-full" />
                </a>
                <a href="https://wa.me/5213334018555?text=Hola,%20estoy%20interesado%20en%20la%20promoción%20del%20paquete%20Masculino"
                    target="_blank">
                    <img src="../../images/paquetes/5.png" alt="Promoción 5"
                        class="rounded shadow-md object-cover h-full" />
                </a>
                <a href="https://wa.me/5213334018555?text=Hola,%20estoy%20interesado%20en%20la%20promoción%20del%20paquete%20Basico"
                    target="_blank">
                    <img src="../../images/paquetes/6.png" alt="Promoción 6"
                        class="rounded shadow-md object-cover h-full" />
                </a>
            </div>
        </div>
    </section>

    <!-- 🔹 Sección de Servicios -->
    <!-- <section class="bg-[#f0fdfa] py-16">
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
    </section> -->

    <!-- 🔹 Sección de Ubicaciones -->
    <section class="bg-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Ubicaciones</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <LocationCard city="Matriz" address="Bahia de todos los santos #2759 Col. Parques de santa maria
Tlaquepaque, Jal." phone="33 3693 5986" lugar="https://maps.app.goo.gl/hgFNonPJwv1Q5WYJ7" />
                <LocationCard city="San Agustin" address="Nicolas R. Casillas #4-a Tlajomulco, Jal."
                    phone="33 3693 5986" lugar="https://maps.app.goo.gl/Gka4gYbrYkT8CU6GA" />
                <LocationCard city="Santa Anita"
                    address="Blvd. Bosques de Santa Anita #255 (Dentro de Núcleo Médico Bosques) Tlajomulco, Jal."
                    phone="331655 0591" lugar="https://maps.app.goo.gl/x5KiyYL6EKHep6xD8" />
                <LocationCard city="San Miguel Cuyutlán"
                    address="Calle Madero #12 (Frente al Centro de Salud) San Miguel Cuyutlán, Jal."
                    phone="33 3401 8555" lugar="https://maps.app.goo.gl/kDrUuPTQ93g6wssp9" />
                <LocationCard city="San Miguel Cuyutlán"
                    address="Calle Madero #12 (Frente al Centro de Salud) San Miguel Cuyutlán, Jal."
                    phone="33 3401 8555" lugar="https://maps.app.goo.gl/kDrUuPTQ93g6wssp9" />
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
