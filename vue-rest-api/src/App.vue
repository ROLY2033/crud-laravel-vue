<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header >
    <h1 class="text-center bg-green-500">texto centrado</h1>
    <div >

      <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/about">About</RouterLink>
      </nav>
    </div>

   </header>

   <RouterView />
</template>
