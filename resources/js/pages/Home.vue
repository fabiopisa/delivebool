<template>
  <div class="container">
    <h1>Questa è la home</h1>
    <router-link class="btn btn-primary" :to="{name:'as'}" >
      Advanced Search
    </router-link>
  </div>
</template>

<script>
export default {
  name:'Home'
}
</script>

<style>

</style>