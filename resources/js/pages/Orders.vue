<template>
  <section class="container">
    <h1>Gli ordini che ho ricevuto</h1>
    <router-link class="btn btn-secondary" :to="{name:'dashboard'}">
      Return dashboard
    </router-link>
  </section>
</template>

<script>
export default {
  name:'Orders'
}
</script>

<style>

</style>