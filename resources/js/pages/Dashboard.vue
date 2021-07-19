<template>
  <section class="container">
    <h1>Questa è la tua Dashboard</h1>
    <router-link class="btn btn-primary" :to="{name:'orders'}">
      My orders
    </router-link>
    <router-link class="btn btn-primary" :to="{name:'foods'}">
      My foods
    </router-link>
    <router-link class="btn btn-secondary" :to="{name:'home'}">
      Return Home
    </router-link>
  </section>
</template>

<script>
export default {
 name:'Dashboard'
}
</script>

<style>

</style>