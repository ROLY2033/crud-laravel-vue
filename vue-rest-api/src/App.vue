<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header >
    <h1 class="text-center bg-green-500">texto centrado</h1>
    <div >

      <nav>
        <RouterLink class="px-4 py-2 mr-4 bg-indigo-900 rounded text-white" to="/">Home</RouterLink>
        <RouterLink  class="px-4 py-2 mr-4 bg-indigo-600 hover:bg-indigo-900 rounded text-white" to="/skills">Skills</RouterLink>
        <RouterLink  class="px-4 py-2 mr-4 bg-indigo-600 hover:bg-indigo-900 rounded text-white" to="/">dev</RouterLink>

    </nav>
    </div>

   </header>
   <main class="max-w-7xl mx-auto min-h-screen">
        <RouterView />

   </main>
</template>
<!-- https://youtu.be/GTiBa9bPCZc?t=3984 -->
