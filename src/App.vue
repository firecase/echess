<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <nav>
    <RouterLink to="/">Startseite</RouterLink>
    <RouterLink to="/spieler">Spieler</RouterLink>
  </nav>
  <RouterView />
</template>
