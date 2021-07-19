<template>
  <section class="container">
    <h1>qui puoi modificare aggiungere o togliere i tuoi piatti</h1>
    <router-link class="btn btn-secondary" :to="{name:'foods'}">
      Return my foods
    </router-link>
  </section>
</template>

<script>
export default {
  name:'AddEditFood'
}
</script>

<style>

</style>