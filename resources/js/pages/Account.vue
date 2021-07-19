<template>
  <section class="container">
    <h1>Sing-in or Login</h1>
    <router-link class="btn btn-primary" :to="{name:'dashboard'}">
      Dashboard
    </router-link>
    <router-link class="btn btn-secondary" :to="{name:'home'}">
      Return Home
    </router-link>
  </section>
</template>

<script>
export default {
  name:'Account'
}
</script>

<style>

</style>