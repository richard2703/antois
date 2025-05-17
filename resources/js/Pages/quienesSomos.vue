<template>
    <div>
        <Navbar />

        <section class="bg-white py-16">
            <div class="container mx-auto px-4 max-w-5xl text-center">
                <h1 class="text-5xl font-extrabold text-blue-900 mb-6">¿Quiénes Somos?</h1>
                <p class="text-lg text-gray-700 mb-10">
                    Somos un laboratorio clínico comprometido con brindar servicios de calidad, diagnósticos precisos y
                    una atención humana y cercana.
                </p>

                <div class="grid md:grid-cols-2 gap-8 text-left">


                    <!-- Misión -->
                    <div class="bg-gray-100 p-6 rounded-lg shadow">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Misión</h3>
                        <p class="text-gray-600">
                            Brindar servicios de diagnóstico clínico y de imagenología de alta calidad, accesibles y
                            confiables, que contribuyan a la prevención, detección oportuna y seguimiento de
                            enfermedades, mejorando así la calidad de vida de nuestros pacientes.
                        </p>
                    </div>

                    <!-- Visión -->
                    <div class="bg-gray-100 p-6 rounded-lg shadow">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Visión</h3>
                        <p class="text-gray-600">
                            Ser el laboratorio líder en servicios de diagnóstico en la Zona Sur de la Ciudad, reconocido
                            por su excelencia, innovación y compromiso con la salud de la comunidad.
                        </p>
                    </div>
                </div>
                <div class="grid md:grid-cols-1 gap-8 text-left pt-8">
                    <!-- Historia -->
                    <div class="bg-gray-100 p-6 rounded-lg shadow">
                        <h3 class="text-xl font-semibold text-blue-700 mb-3">Valores</h3>
                        <p> <strong>Calidad y Precisión:</strong> Comprometidos con la exactitud en cada resultado.
                        </p>
                        <p> <strong>Empatía y Respeto:</strong> Atendemos a cada paciente con dignidad y comprensión.
                        </p>
                        <p><strong>Innovación:</strong> Incorporamos tecnología de vanguardia para mejorar nuestros
                            servicios.</p>
                        <p><strong>Accesibilidad:</strong> Ofrecemos servicios a precios justos, sin comprometer la
                            calidad.</p>
                        <p><strong>Ética Profesional:</strong> Actuamos con integridad y responsabilidad en todas
                            nuestras acciones.</p>
                    </div>
                </div>
            </div>
        </section>

        <Footer />
    </div>
</template>

<script setup>
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
</script>
