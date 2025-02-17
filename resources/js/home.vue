<script setup>
defineProps({
    title: String
});
</script>

<template>
    <div class="container">
        <h1 class="title">{{ title }}</h1>
        <p>Bienvenido a tu nueva aplicación con Laravel e Inertia.js 🎉</p>
    </div>
</template>

<style scoped>
.container {
    max-width: 600px;
    margin: 40px auto;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: white;
}

.title {
    color: #4B5563;
    font-size: 24px;
}
</style>
