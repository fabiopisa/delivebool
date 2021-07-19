<template>
  <section class="container">
    <h1>I miei piatti</h1>
    <router-link class="btn btn-primary" :to="{name:'restaurant'}">
      My restaurant
    </router-link>
    <router-link class="btn btn-primary" :to="{name:'addeditfood'}">
      add/edit food
    </router-link>
    <router-link class="btn btn-secondary" :to="{name:'dashboard'}">
      Return Dashboard
    </router-link>
  </section>
</template>

<script>
export default {
   name:'Foods'
}
</script>

<style>

</style>